<?php
$fileJSON = $_REQUEST['file_name'];
$json_stringify = $_REQUEST['array'];
//echo $json_stringify;
//echo $fileJSON;
file_put_contents($fileJSON, $json_stringify)
?>
