<?php 
session_start();
extract ($_REQUEST);
if (!isset($_SESSION['user']))
  header("location:../index.php");//significa que no han iniciado sesión
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Zona Cliente</title>
 </head>
 <body>
 	<span class="navbar-brand glyphicon glyphicon-user"><span class="">Bienvenido:</span><?php echo $_SESSION['user']?></
   	</span>
   	<a class="navbar-brand" href="../vista/logout.php">Salir</a>
 </body>
 </html>