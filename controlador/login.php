<?php 	
include 'database.php';

function ConsultarCds_array(){		
	$con=AbrirCon();		
	$query = 'SELECT * FROM cds';
	$result =mysqli_query($con,$query) or die('Consulta fallida: ' . mysql_error());
	$rows = array();
	while($r = mysqli_fetch_assoc($result)) {
	    $rows[] = $r;
	}
	print json_encode($rows);
	mysqli_close($con);
}
ConsultarCds_array();
?>