<?php
function AbrirCon(){
	
	$server='localhost';
	$usuario='root';
	$clave='';
	$database='cdcol';
	
	$con = new mysqli($server, $usuario, $clave,$database);
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit;
	}
	return $con;
}?>