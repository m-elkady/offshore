<?php

/**

  Example listener which will change the upload folder and filename for an uploaded image
  Should be in src/Event
  @category Example
  @package UploadFilenameListener.php
  @author David Yell neon1024@gmail.com
  @when 03/03/15 * */

namespace App\Event;

use Cake\Event\Event;
use Cake\Event\EventListenerInterface;
use Cake\Utility\Inflector;
use Cake\ORM\Entity;
use Proffer\Lib\ProfferPath;

class UploadFilenameListener implements EventListenerInterface {

    public $field;

    public function implementedEvents() {
        return [
            'Proffer.afterCreateImage' => 'afterCreate',
            'Proffer.beforeDeleteFolder' => 'beforeDelete'
        ];
    }

    public function afterCreate(Event $event, ProfferPath $path) {
        $versions = $path->getPrefixes();
        $Filepath = $path->getFolder();
        $old_file = $event->subject()->getOriginal($path->getField());
        if ($old_file && !$event->subject()->isNew()) {
            foreach ($versions as $version) {
                $filename = $version . "_" . $old_file;
                if (file_exists($Filepath . $filename))
                    unlink($Filepath . $filename);
            }
            if (file_exists($Filepath . $old_file))
                unlink($Filepath . $old_file);
        }
    }

    public function beforeDelete(Event $event, ProfferPath $path){
        exit('HHH');
    }
}
