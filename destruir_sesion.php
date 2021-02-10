<?php
session_start();
session_destroy();
setcookie("usuario", "");
header("location:login.php");


?>