<?php

$path = "{$_SERVER['DOCUMENT_ROOT']}/storage/dir";

$iterator = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($path));

foreach($iterator as $file) {
    if($file->getFilename() === '2bc2f38f21b3a57db11b3ff62889bdc6.jpg') {
        // echo '2bc2f38f21b3a57db11b3ff62889bdc6.jpg', '<br>';
        var_dump($file->getPathName());
    }
}