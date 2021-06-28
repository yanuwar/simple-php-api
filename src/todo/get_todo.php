<?php
    require_once('utils/response_helper.php');

    $string = file_get_contents("document.json");
    $json_a = json_decode($string, true);
    
    responseDefault('200', json_encode($json_a), 'sukses mendapatkan data');
    // $fileLocation = getenv("DOCUMENT_ROOT") . "/document.json";
    // $file = fopen($fileLocation,"w");
    // $content = '[{"id":"1","todo":"tes"},{"id":"2","todo":"tes2"}]';
    // fwrite($file, $content);
    // fclose($file);