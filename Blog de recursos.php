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
			<title>BLOG DE RECURSOS</title>
			<body>
				<header><h2>Ayuda escolar presencial y a distancia</h2>
				<h1>&nbsp;"Construyendo el futuro"</h1>
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
			<div class="recursos"><h3>Visitanos en nuestras redes sociales</h3> 

			 <div id="fb-root"></div>
			<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v7.0" nonce="Avcyj1kU"></script>
			<div class="fb-post" data-href="https://www.facebook.com/apoyoescolarencastelar/posts/2642361799196555" data-show-text="true" data-width=""><blockquote cite="https://developers.facebook.com/apoyoescolarencastelar/posts/2642361799196555" class="fb-xfbml-parse-ignore">Publicado por <a href="https://www.facebook.com/apoyoescolarencastelar/">Apoyo Escolar En Castelar</a> en&nbsp;<a href="https://developers.facebook.com/apoyoescolarencastelar/posts/2642361799196555">Lunes, 23 de diciembre de 2019</a></blockquote></div>

			<p> <a href="https://www.facebook.com/apoyoescolarencastelar">
			Facebook: Apoyo escolar en Castelar</a><img src="logofb.png" alt="Instagram"height="30px" width="30px" /a> <a href="https://www.instagram.com/apoyoescolarencastelar/">
			Instagram: Apoyo escolar en Castelar<img src="logoig.png" alt="Instagram"height="30px" width="30px" /a></p>
			</div>



			<button> <a href="Index.html">Volver </a>
			</button>
			<footer>
			<p>Diseño multimedial y programación web I-by Salomón María Laura 2020</p>
			</footer>


			</body>
			</html>





