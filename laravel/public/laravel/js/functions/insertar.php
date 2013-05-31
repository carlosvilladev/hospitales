<?php
	include("conexion/conexion.php");
	//print_r($_POST);
	$datos = $_POST;

		$sql = "Insert into paciente (nombrePaciente,apellidoPaciente,cedulaPaciente,sexo,edad,EPS) values('".$datos['u-name']."','".$datos['u-ape']."','".$datos['u-ced']."','".$datos['sexo']."','".$datos['u-edad']."','".$datos['u-eps']."')";

	if (!mysql_query($sql))
      {
      	echo json_encode(array("error"=>"No se pudo registrar"));

      }else{
      	echo json_encode(array("success"=>"Paciente registrado"));
      }


	
?>
