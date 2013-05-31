<?php
/*$db_server='localhost'; 
$db_username='lvilladi_lvilla';  
$db_password='lvilla12345'; 

$conexion = mysql_connect($db_server, $db_username, $db_password) or die ("No se puede conectar con el servidor SQL");

$db_name='lvilladi_leovilla';    
*/
$db_server='localhost'; 
$db_username='root';  
$db_password=''; 

$conexion = mysql_connect($db_server, $db_username, $db_password) or die ("No se puede conectar con el servidor SQL");

$db_name='hospitales';
mysql_select_db($db_name,$conexion) or die ("Verifique la base de datos");

?>
