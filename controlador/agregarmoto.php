<?php
session_start();
extract ($_POST);
require "../modelo/conexion.php";
require "../modelo/motos.php";
$objProducto=new Motos();
$objProducto->crearMoto($_POST['id_detalle'],$_POST['id_marca'],$_POST['id_category'],$_POST['referencia'],$_POST['precio'],$_POST['motor'],$_POST['cilindrada'],$_POST['potencia'],$_POST['transmision'],$_POST['ciclo'],$_POST['refrigeracion'],$_POST['cilindros'],$_POST['regimen_potencia'],$_POST['arranque'],$_POST['traccion'],$_POST['distancia_ejes'],$_POST['rueda_delantera'],$_POST['rueda_trasera'],$_POST['freno_delantero'],$_POST['freno_trasero'],$_POST['altura_asiento'],$_POST['peso'],$_POST['capacidad_deposito'],$_POST['compresion'],$_POST['suspension_D'],$_POST['suspension_T'],$_POST['encendido'],$_POST['caja_vel']);
$resultado=$objProducto->agregarMoto();
if ($resultado) 
	header("location:../vista/admin.php");
else
	header("location:../vista/error.php");

?>



