<?php
include("conexion.php");
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$mail=$_POST['mail'];
$telefono=$_POST['telefono'];

$sql="INSERT INTO contacto (id, nombre, apellido, mail, telefono ) values ('', '$nombre', '$apellido', '$mail', '$telefono')";

if(mysqli_query($acceso, $sql)){
	echo "Gracias por contactarte con nosotros. Nos comunicaremos a la brevedad";
}else{
	echo "hubo un error";

}

?>
