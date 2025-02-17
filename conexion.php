<?php
$server="localhost";
$user="root";
$pass="";
$bd="colegio";
$conexion=new mysqli($server,$user,$pass,$bd);
if($conexion->connect_error)
{
die("conexión fallida".$conexion->connect_error);

}
?>