<?php
include("conexion_login.php");
$usuario=$_POST['usuario'];

$sql="DELETE from  usuarios WHERE usuario='$usuario'";

if(mysqli_query($acceso, $sql)){
	echo "Datos borrados";
	header("location:index.php");
}else{
	echo "hubo un error";
}


?>
