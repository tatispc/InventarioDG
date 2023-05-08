<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Garantia.php";
//Creamos el objeto Garantia
$objGarantia= new Garantia();
$objGarantia->crearGarantia($_REQUEST['codigo'],$_REQUEST['fecha'],$_REQUEST['nit'],$_REQUEST['nombres'],$_REQUEST['observacion']);


$resultado = $objGarantia->agregarGarantia();
if ($resultado)
	header ("location:../Vista/index2.php?pag=insertarGarantia&msj=1");
else
	header ("location:../Vista/index2.php?pag=insertarGarantia&msj=2");
?>




