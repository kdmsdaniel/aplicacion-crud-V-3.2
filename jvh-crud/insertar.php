<?php
include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_estudiante'];
$nombre=$_POST['nombre'];
$rif=$_POST['rif'];
$tlf1=$_POST['tlf1'];
$tlf2=$_POST['tlf2'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];

$sql="INSERT INTO clientes VALUES('$cod_estudiante','$nombre','$rif','$tlf1','$tlf2','$direccion','$correo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: clientes.php");
    
}else {
}
?>