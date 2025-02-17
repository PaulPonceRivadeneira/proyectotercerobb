<?php
session_start();
if (isset($_REQUEST[´Enviar´]))
 {
if (!empty($_POST[´email´]and!empty($_POST[´contraseña´])))
{
$usuario=$_POST[´email´];
$clave=$_POST[´contraseña´];
$sql=$conexion->query("select *from personas where Per_Email=´$usuario´ and Per_Clave=´$clave´");
if(mysqli_num_rows($sql)>0){
    while ($fila=msqli_fetch_array($sql)) {

$_SESSION["id"]=$fila[´Per_id´];
$_SESSION["cedula"]=$fila[´Per_Cedula´];
$_SESSION["usuario"]=$fila[´Per_Nombre´];

    }
mysqli_free_result($sql);
header("location:Mantenimiento.php");
}
else
{
echo"<div class=´alert alert-danger´>Acceso denegado</div>";
}
}
else
{
echo"No ha ingresado ningun ususario o contraseña";
}
 }
?>