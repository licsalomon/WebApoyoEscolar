<?php
session_start();

include("conexion_login.php");
$usuario=$_POST['usuario'];
$psw=$_POST['psw'];
setcookie("usuario", $usuario);
if(empty($usuario)|| empty($psw)){
		header("location:login.php?error=Faltan%20datos");
} else{

$sql="SELECT usuario, psw from usuarios where usuario='$usuario' and psw='$psw'";

$consulta=mysqli_query($acceso,$sql);
$existe=mysqli_num_rows($consulta);



if($existe==1){
	$_SESSION['nombre']="x";
	header("location:index_logueado.php");
	
}else{
	header("location:sesion_caducada.php");
}
}

?>
