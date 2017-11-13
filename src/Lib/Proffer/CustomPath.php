<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Lib\Proffer;

use Proffer\Lib\ProfferPath;

/**
 * Description of UserProfilePath
 *
 * @author mohammed.elkady
 */
class CustomPath extends ProfferPath {

    public function fullPath($prefix = null) {
        if ($prefix) {
            return $this->getRoot() . DS . $prefix . '_' . $this->getFilename();
        }
        return $this->getRoot() . DS . $this->getFilename();
    }

    public function getFolder() {
        return $this->getRoot() . DS;
    }

    public function setFilename($filename) {
        $uniqid = uniqid();
        if (is_array($filename) && isset($filename['name'])) {
            $this->filename = $uniqid . '_' . $filename['name'];
        } else {
            $this->filename = $filename;
        }
    }

    public function deleteFiles($folder, $rmdir = false) {
       
    }

}
