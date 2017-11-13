<?php

namespace App\Event;

use Cake\Event\Event;
use Cake\Event\EventListenerInterface;
use Cake\Log\Log;
use Proffer\Lib\ProfferPath;

class UploadAndDeleteImageListener implements EventListenerInterface {

    public function implementedEvents() {
        return [
            'Proffer.afterCreateImage' => 'createImage',
//            'Proffer.beforeDeleteImage' => 'deleteImage',
        ];
    }

    public function createImage(Event $event, ProfferPath $path, $imagePath) {
        $versions = $path->getPrefixes();
        $Filepath = $path->getRoot() . DS;
        $field = $path->getField();
        $path->setField('');
        $old_file = $event->subject()->getOriginal($field);

        if ($old_file && !$event->subject()->isNew()) {
            foreach ($versions as $version) {
                $filename = $version . "_" . $old_file;
                if (file_exists($Filepath . $filename))
                    unlink($Filepath . $filename);
            }
            unlink($Filepath . $old_file);
        }
    }

}
