<!DOCTYPE html>
<html>
<head>
<?php 
	session_start();
	if(!isset($_SESSION['nombre'])){
	header("location:sesion_caducada.php");
	} 
?>

<link href="Syle3.css" rel="stylesheet" type="text/css">


<link href="w3.css" rel="stylesheet" type="text/css">
 

</head>
<title>LOGIN</title>
<body>
<header><h2>Ayuda escolar presencial y a distancia</h2>
	<h1>&nbsp;"Construyendo el futuro"
</h1>
</header>
<nav class="nav">

<ul id="menu">
<li><a href="Nosotros.php">Nosotros</a></li>
<li><a href="Blog%20de%20recursos.php">Blog de recursos</a></li>
<li><a href="Contacto.php">Contacto</a></li>
<li><a href="Login.php">Iniciar sesión/registrarse</a></li>
<li><a href="index_logueado.php">Mi cuenta</a></li>
</ul>

</nav>
<?php
echo "Bienvenido/a ". $_COOKIE['usuario']; 
echo "<br>";
echo "<a href=destruir_sesion.php>Cerrar sesion</a>";
?>
<div>
<h3>Ver datos de su cuenta</h3>
</div>
<form class="ver" id="ver"action="ver_resultados.php" method="post"> 
	<p>Confirme su usuario:  </p><input type="text" name= "usuario" placeholder="Usuario"/> <br>
	<br>
    <input type="submit" value="Ver"> 
    
    </form>
<div>


<?php
error_reporting(0);
echo "<font color=red size=3>" .$_GET['error']. "</font>";
?>



<button> <a href="Index.php">Volver </a>
</button>

<footer>
<p>Diseño multimedial y programación web I-by Salomón María Laura 2020</p>
</footer>

</body>

</html>

