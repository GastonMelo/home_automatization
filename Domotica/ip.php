<?php
$nombre = $_POST['nombre'];
$direccion_ip = $_POST['direccion'];
$content = file_get_contents('ip.json');
$json = array();
$json = json_decode($content, true);
$parametros = array(
	 "nombre" => "$nombre",
	 "direccion_ip" => "$direccion_ip",
	);
array_push($json,$parametros);
file_put_contents( 'ip.json',json_encode($json));
echo var_dump($parametros);
?>
