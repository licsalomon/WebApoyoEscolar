<!DOCTYPE html>
<html>
<head>


<link href="Syle3.css" rel="stylesheet" type="text/css">


<!--<link href="w3.css" rel="stylesheet" type="text/css">!-->
 
</head>
<title>LOGIN</title>
<body>
<header><h2>Ayuda escolar presencial y a distancia</h2>
	<h1>&nbsp;"Construyendo el futuro"
</h1>
</header>
<nav class="nav">

<ul id="menu">
<li><a href="Nosotros.htm">Nosotros</a></li>
<li><a href="Blog%20de%20recursos.htm">Blog de recursos</a></li>
<li><a href="Contacto.htm">Contacto</a></li>
<li><a href="Login.htm">Iniciar sesión/registrarse</a></li>
</ul>

</nav>
<div>
<h3>Inicia sesión</h3>
</div>

<form class="registracion"id="regis" action="actualizardatos.php" method="post">
<label for="Usuario">Usuario:  </label><input type="text" name= "usuario" required /> <br>
<label for="email">Mail:</label>  <input type="text" name="email" required>
<br>
<input type="submit" value="Modificar datos"> 

</form>

<?php
error_reporting(0);
echo "<font color=red size=3>" .$_GET['error']. "</font>";
?>

<button> <a href="Index.html">Volver </a>
</button>

<footer>
<p>Diseño multimedial y programación web I-by Salomón María Laura 2020</p>
</footer>

</body>

</html>

<!--<p>¿Desea suscribirse al Newsletter?</p> 
<input type="checkbox" name=Newsletter value=1> Sí
<br>
<p> Ingrese sus comentarios:</p>
<textarea name="comentarios" cols="45" rows="10"></textarea>
<br>



<input type="Submit" value="Enviar datos"> 
<input type="reset" value="Borrar datos">


<div class="redes">
<p> <a href="https://www.facebook.com/apoyoescolarencastelar">
Facebook: Apoyo escolar en Castelar</a><img src="logofb.png" alt="Instagram"height="30px" width="30px" /a> <a href="https://www.instagram.com/apoyoescolarencastelar/">
Instagram: Apoyo escolar en Castelar<img src="logoig.png" alt="Instagram"height="30px" width="30px" /a></p>
</div>
!-->
