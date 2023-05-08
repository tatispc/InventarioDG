<?php
session_start();
extract($_REQUEST); //recoger todas las variables y definir formula para sumar existencia
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Inventario.php";
$objConexion=Conectarse();
$varDiferencia = 0;
$idMercancia = '';
$cantidadActual = $_POST['disponible'];
$cantidadSumar =  $_POST['cantidad'];
$varDiferencia = $cantidadActual + $cantidadSumar;
$idMercancia = $_POST['idMercancia'];




$sql="UPDATE mercanciamaterialconstruccion  SET  merCant = " . $varDiferencia . " WHERE idMercancia = " .$idMercancia;






$resultado = $objConexion->query($sql);
if ($resultado)
	header ("location:../Vista/index2.php?pag=salidaInventario&msj=1");
else
	header ("location:../Vista/index2.php?pag=salidaInventario&msj=2");
?>

