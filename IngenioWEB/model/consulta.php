<?php
require_once('parametros.php');
$conexion = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$consulta = '';
if ($conexion->connect_errno)
 {
	echo "Error en la conexion";
	exit;
}

function consultaBD(){
	global $conexion, $consulta;
	$sql = 'Select *  from caneros';
	return $conexion->query($sql);
}