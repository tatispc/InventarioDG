<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Cliente.php";
//Creamos el objeto cliente
$objCliente= new Cliente();
$objCliente->crearCliente($_REQUEST['codigo'],$_REQUEST['nombres'],$_REQUEST['nit'],$_REQUEST['telefono'],$_REQUEST['direccion'],$_REQUEST['correo'],$_REQUEST['tipocliente'],$_REQUEST['tipocompra']);


$resultado = $objCliente->agregarCliente();
if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarCliente&msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarCliente&msj=2");
?>




