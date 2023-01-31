<?php
$url = $_POST['direccion_ip'];
$headers= get_headers($url);
echo substr($headers[1],7,2);
?>
