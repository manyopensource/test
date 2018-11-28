<?php

// $text = '<p>1</p><p>2</p><p>3</p>';
// 
// $string = substr($text, strpos($text, "<p"), strpos($text, "</p>")+4);
// 
// $string = str_replace($string, '', $text);
// 
// var_dump($string);


$zip = new ZipArchive();
if ($zip->open('test.zip', ZipArchive::CREATE) === TRUE) {
    $zip->addFromString('index.txt', 'newname.txt');
    $zip->close();
    echo 'готово';
} else {
    echo 'ошибка';
}