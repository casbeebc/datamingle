<?php

$returnArray = array();

foreach($_REQUEST as $key=>$value) {
    
    $newValue = sha1(md5($value."669534508907825819"));
    $returnArray[$key]=$newValue;
}
header("HTTP/1.0 200 OK");
header('Content-type: text/html');
echo json_encode($returnArray);
?>