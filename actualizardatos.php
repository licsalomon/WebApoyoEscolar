<?php
include("conexion_login.php");
$usuario=$_POST['usuario'];
$email=$_POST['email'];

//if(empty($usuario)|| empty($psw) || empty($email)){
//		header("location:registro.php?error=Faltan%20datos");
//} else{

$sql="UPDATE usuarios SET email='$email' where usuario='$usuario'";

if(mysqli_query($acceso, $sql)){
	echo "Datos actualizados";
	header("location:index_logueado.php");
}else{
	echo "hubo un error";
}


?>
