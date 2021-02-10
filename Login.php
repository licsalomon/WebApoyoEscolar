<!DOCTYPE html>
<html>
<head>


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
</ul>

</nav>
<div>
<h3>Inicia sesión</h3>
</div>
<form class="login" id="login"action="autenticar.php" method="post"> 
	<label for="Usuario">Usuario:  </label><input type="text" name= "usuario" placeholder="Usuario"/> <br>

    <label for="password">Password:  </label><input type="password" name="psw" placeholder="Contraseña"/> <br>

    <input type="submit" value="enviar"> 
    <p class="message">¿No estás registrado? <a href="registro.php"> Registrar </a></p>

</form>

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

