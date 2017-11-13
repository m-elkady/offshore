<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Query;
use Cake\Event\Event;
use Cake\Datasource\EntityInterface;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use Cake\Database\Type;
use Cake\Routing\Router;
use Cake\Utility\Text;
use ArrayObject;

class FileBehavior extends Behavior {

    protected $_defaultConfig = [
        'file' => [// The name of your upload field
            'folder' => 'files', // Customise the root upload folder here, or omit to use the default
            'required' => false,
            'allowedMimeTypes' => ['application/pdf'],
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
        $this->_config = $config;
    }

    public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options) {

        foreach ($this->config() as $field => $settings) {

            $this->_validate($field, $data);

            if ($this->_table->validator()->isEmptyAllowed($field, false) &&
                    isset($data[$field]['error']) && $data[$field]['error'] === UPLOAD_ERR_NO_FILE
            ) {
                unset($data[$field]);
            }
        }
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
                    $entity->set($field, $filename);
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
        if (file_exists($fullPath . $file_name)) {
            unlink($fullPath . $file_name);
        }
    }

    private function _validate($field, $data) {
        $this->_table->validator()->provider('upload', \App\Model\Behavior\Validation\UploadValidation::class);
//        debug($field);exit;

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
                'rule' => array('mimeType', $this->config()[$field]['allowedMimeTypes']),
                'message' => __('Please upload files with these allowed types {0}', implode(',', $this->config()[$field]['allowedMimeTypes']))
                    ]
            );
        }
    }
    
    function getFileSettings($field = false, $param = false) {
        if (!$field && !$param)
            return $this->config();
        else if (!$param)
            return $this->config()[$field];
        else
            return $this->config()[$field][$param];
    }

}
