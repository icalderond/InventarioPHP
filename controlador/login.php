<?php 
include 'database.php';
function ChecarCredenciales($usuario, $clave){
	if($usuario=="icalderond" && $clave=="1234"){
		return true;		
	}else{
		return false;
	}
}?>