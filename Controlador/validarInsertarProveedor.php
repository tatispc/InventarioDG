<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Proveedor.php";
//Creamos el objeto Proveedor
$objProveedor= new Proveedor();
$objProveedor->crearProveedor($_REQUEST['codigo'],$_REQUEST['nit'],$_REQUEST['nombres'],$_REQUEST['telefono'],$_REQUEST['direccion'],$_REQUEST['correo']);


$resultado = $objProveedor->agregarProveedor();
if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarProveedor&msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarProveedor&msj=2");
?>




