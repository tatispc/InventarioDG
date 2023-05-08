<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Personal.php";
//Creamos el objeto Personal
$objPersonal= new Personal();
$objPersonal->crearPersonal($_REQUEST['codigo'],$_REQUEST['area'],$_REQUEST['identificacion'],$_REQUEST['nombres'],$_REQUEST['apellidos'],$_REQUEST['telefono'],$_REQUEST['correo']);


$resultado = $objPersonal->agregarPersonal();
if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarPersonal&msj=1");
	//echo '<p>Ingreso exitoso</p>';
	//header ("location:../Vista/insertarPersonal.php?msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarPersonal&msj=2");
	//echo '<p>Error en el registro</p>';
	//header ("location:../Vista/insertarPersonal.php?msj=2");
?>




