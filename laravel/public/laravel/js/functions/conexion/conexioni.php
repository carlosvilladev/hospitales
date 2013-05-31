<?php
//$mysqli = new mysqli("localhost", "lvilladi_lvilla", "lvilla12345", "lvilladi_leovilla");
$mysqli = new mysqli("localhost", "root", "", "hospitales");
if (mysqli_connect_errno()) {printf("Conexión fallida: %s\n", mysqli_connect_error()); exit();}

?>