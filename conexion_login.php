<?php
$base="contacto";
$acceso=mysqli_connect("localhost","root","",$base);
if ($acceso){
	//echo "estamos conectados";
}else{ 
		echo "algo anda mal";
}
?>