<?php
session_start();
extract ($_POST);
require "../modelo/conexion.php";
/* los variables que viene del formulario son: $login, $password */

/*asigno a la variable password el valor encriptado de lo que colocaron
en el password del formulario, ya que así esta en la base de datos */

$email = $_POST['email'];
$password = ($_POST['password']);

$objConexion=Conectarse();
// Vamos a realizar el proceso para consultar los usuaarios
//Guardamos en una variable la sentencia sql
$sql="select * from users where email = '$email' and password = '$password'";
$sql2="select * from users where email = '$email' and password = '$password'";
$sql3="select * from users where email = '$email' and password = '$password'";

//Asignar a una variable el resultado de la consulta
$resultado=$objConexion->query($sql);
$resultado2=$objConexion->query($sql2);
$resultado3=$objConexion->query($sql3);
//verifico si existe el usuario
$admin = $resultado->num_rows;
$cliente = $resultado2->num_rows;
$empleado = $resultado3->num_rows;

if ($admin>0)  //quiere decir que los datos estan bien
{
	$usuario=$resultado->fetch_object() or die ("Error");
	$_SESSION['user']= $usuario->username;	
	$_SESSION['tipo_usuario']=$usuario->class;

	if($_SESSION['tipo_usuario']=="Administrador")
		header("location:../vista/admin.php");
	if($_SESSION['tipo_usuario']=="Usuario")
		header("location:../vista/zonacliente.php");
	if($_SESSION['tipo_usuario']=="empleado")
		header("location:../vista/menuEmp.php");
}
else if($cliente>0)
{
	$usuario2=$resultado2->fetch_object() or die ("Error");
	$_SESSION['user']= $usuario2->username;	
	header("location:../vista/zonacliente.php");

	echo '<script type="text/javascript">alert("Error de usuario, contraseña o usuario no registrado");</script>';
}
else if($empleado>0)
{
	$usuario3=$resultado3->fetch_object() or die ("Error");
	$_SESSION['user']= $usuario3->username;	
	header("location:../vista/menuEmp.php");

	echo '<script type="text/javascript">alert("Error de usuario, contraseña o usuario no registrado");</script>';
}
else
{  
	
	echo '<script type="text/javascript">alert("Error de usuario, contraseña o usuario no registrado");</script>';
	header('location:../index.php');

	 //x=1, quiere decir que el usuario no esta registrado
}
 
?>