<?php
include('conexion/conexion.php');
	$ced = $_POST['ced'];
	$sql = "Select * from paciente where cedulaPaciente = '".$ced."'";
	$query = mysql_query($sql);
	if($result = mysql_fetch_array($query)){
		echo json_encode($result);
	}else echo json_encode(array("error"=>"No se encontró el paciente"));

	

?>