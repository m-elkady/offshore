<?php

namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Query;
use Cake\Event\Event;
use Cake\Datasource\EntityInterface;
use Cake\ORM\Entity;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use Cake\Database\Type;
use App\Lib\Image;
use Cake\Utility\Text;
//use Intervention\Image\ImageManager;
use Eventviva\ImageResize;
use Cake\Routing\Router;
use ArrayObject;

class ImageBehavior extends Behavior {

    protected $_defaultConfig = [
        'image' => [// The name of your upload field
            'folder' => 'img/uploads', // Customise the root upload folder here, or omit to use the default
            'width' => 460,
            'crop' => false,
            'required' => false,
            'versions' => [],
        ]
    ];

    public function Setup($config) {
        $this->_config = $config;
    }

    public function initialize(array $config) {
        Type::map('file', '\App\Lib\Image\FileType');
        $schema = $this->_table->schema();
        foreach (array_keys($this->config()) as $field) {
            $schema->columnType($field, 'file');
        }
        $this->_table->schema($schema);
    }

    public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options) {
        foreach ($this->config() as $field => $settings) {

            $this->_validate($field, $data);

//            debug($this->_table->validator()->errors($data));exit;
            if ($this->_table->validator()->isEmptyAllowed($field, false) &&
                    isset($data[$field]['error']) && $data[$field]['error'] === UPLOAD_ERR_NO_FILE
            ) {
                unset($data[$field]);
            }
        }
//        debug($this->_table->validator());
//        exit;
    }

    public function beforeSave(Event $event, EntityInterface $entity, ArrayObject $options) {
        foreach ($this->config() as $field => $settings) {

            if ($entity->has($field) && is_array($entity->get($field)) &&
                    $entity->get($field)['error'] === UPLOAD_ERR_OK) {

                $fullPath = $this->getFullPath($field);
                $folder = new Folder($fullPath, true, 0777);
                $filename = $this->getFilename($entity, $field);
                $file = new File($folder->pwd() . DS . $filename);

                if ($entity->getOriginal($field) && !$entity->isNew()) {
                    $this->deletFiles($field, $entity->getOriginal($field));
                }

                if ($this->moveUploadedFile($entity->get($field)['tmp_name'], $file->path)) {
//                    $imagePaths = [$path->fullPath()];
                    $entity->set($field, $filename);
                    $this->handleImages($field, $file->path, $folder, $filename);
                } else {
                    throw new Exception('Cannot upload file');
                }
            }
        }

        return true;
    }

    public function beforeFind(Event $event, Query $query, ArrayObject $options) {

        return $query->formatResults(function($results) {
                    return $results->map(function ($row) {
                                foreach ($this->config() as $field => $ops) {
                                    if (!empty($row[$field])) {
                                        $image = [];
                                        $image['file_name'] = $row[$field];
                                        $image['path'] = Router::url('/' . $ops['folder'] . '/' . $row[$field]);
                                        $image['folder_path'] = $ops['folder'];
                                        foreach ($ops['versions'] as $prefix => $op) {
                                            $image[$prefix] = Router::url('/' . $ops['folder'] . '/' . $prefix . '_' . $row[$field]);
                                        }
                                        $row[$field . '_info'] = $image;
                                    }
                                }
                                return $row;
                            });
                });
    }

    public function getFullPath($field) {
        return WWW_ROOT . str_replace('/', DS, $this->config()[$field]['folder']) . DS;
    }

    public function getFilename($entity, $field) {
        $uniqid = uniqid();
        $file_name = $entity->get($field);
        $name = substr($file_name['name'], 0, strrpos($file_name['name'], '.'));
        $ext = substr($file_name['name'], strrpos($file_name['name'], '.'));
        if (is_array($file_name) && isset($file_name['name'])) {
            $filename = $uniqid . '_' . Text::slug($name) . $ext;
        } else {
            $filename = $file_name;
        }
        return $filename;
    }

    protected function moveUploadedFile($file, $destination) {


        copy($file, $destination);

        return true;
    }

    public function handleImages($field, $image_path, $folder, $filename) {

        $fieldConfig = $this->config()[$field];
        foreach ($fieldConfig['versions'] as $prefix => $settings) {
            $width = isset($settings['width']) ? $settings['width'] : 0;
            $height = isset($settings['height']) ? $settings['height'] : 0;
            $crop = isset($settings['crop']) && $settings['crop'] ? true : false;
            $this->resize($image_path, $width, $height, $crop, $prefix, $folder, $filename);
        }

        if (!empty($fieldConfig['width']) || !empty($fieldConfig['height'])) {
            $width = isset($fieldConfig['width']) ? $fieldConfig['width'] : 0;
            $height = isset($fieldConfig['height']) ? $fieldConfig['height'] : 0;
            $crop = isset($fieldConfig['crop']) && $fieldConfig['crop'] ? true : false;
            $this->resize($image_path, $width, $height, $crop, '', $folder, $filename);
        }
    }

    public function resize($image_path, $targetWidth = 0, $targetHeight = 0, $crop = false, $prefix = '', $folder, $filename) {
        $image = new ImageResize($image_path);
        if (!$crop) {
            if ($targetWidth == 0) {
                $image = $image->resizeToHeight($targetHeight);
            } elseif ($targetHeight == 0) {
                $image = $image->resizeToWidth($targetWidth);
            } else {
                $image = $image->resizeToBestFit($targetWidth, $targetHeight);
            }
        } elseif ($crop && $targetHeight && $targetWidth) {
            $image = $image->crop($targetWidth, $targetHeight, true);
        }


        if ($prefix) {
            $image_path = $folder->pwd() . DS . $prefix . '_' . $filename;
        }
        $image->save($image_path);
    }

    function beforeDelete(Event $event, EntityInterface $entity, ArrayObject $options) {
        foreach ($this->config() as $field => $settings) {
            if ($entity->has($field) && !empty($entity->get($field))) {
                $this->deletFiles($field, $entity->get($field));
            }
        }
    }

    function deletFiles($field, $file_name) {
        $fieldConfig = $this->config()[$field];
        $fullPath = $this->getFullPath($field);
//        debug($file_name);
        if (file_exists($fullPath . $file_name)) {
            unlink($fullPath . $file_name);
        }
        foreach ($fieldConfig['versions'] as $prefix => $settings) {
            if (file_exists($fullPath . $prefix . '_' . $file_name)) {
                unlink($fullPath . $prefix . '_' . $file_name);
            }
        }
    }

    private function _validate($field, $data) {
        $this->_table->validator()->provider('upload', \App\Model\Behavior\Validation\UploadValidation::class);
        $max_file_size = ini_get('upload_max_filesize');

        $this->_table->validator()->add($field, 'fileSuccessfulWrite', [
            'rule' => 'isSuccessfulWrite',
            'message' => __('This upload failed'),
            'provider' => 'upload'
        ]);

        $this->_table->validator()->add($field, 'fileUnderPhpSizeLimit', [
            'rule' => 'isUnderPhpSizeLimit',
            'message' => __("This file shouldn't exceed the memory size {0}", $max_file_size),
            'provider' => 'upload'
        ]);
//        debug($data);exit;
        if (isset($data[$field]['error']) && $data[$field]['error'] === UPLOAD_ERR_OK) {
            $this->_table->validator()->add($field, 'mimeType', [
                'rule' => array('mimeType', array('image/gif', 'image/png', 'image/jpg', 'image/jpeg')),
                'message' => __('Please upload images only (gif, png, jpg).', true)
                    ]
            );
        }
    }

    function getImageSettings($field = false, $param = false) {
        if (!$field && !$param)
            return $this->config();
        else if (!$param)
            return $this->config()[$field];
        else
            return $this->config()[$field][$param];
    }

}
