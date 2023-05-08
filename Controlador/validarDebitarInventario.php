<?php
session_start();
extract($_REQUEST); //recoger todas las variables y definir formula para debitar existencia
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Inventario.php";
$objConexion=Conectarse();
$varDiferencia = 0;
$idMercancia = '';
$cantidadActual = $_POST['disponible'];
$cantidadRestar =  $_POST['cantidad'];
$varDiferencia = $cantidadActual - $cantidadRestar;
$idMercancia = $_POST['idMercancia'];



if ($varDiferencia>=0)
{
	$sql="UPDATE mercanciamaterialconstruccion  SET  merCant = " . $varDiferencia . " WHERE idMercancia = " .$idMercancia;
	$resultado = $objConexion->query($sql);
	if ($resultado)
		header ("location:../Vista/index2.php?pag=salidaInventario&msj=1");
	else
		header ("location:../Vista/index2.php?pag=salidaInventario&msj=2");
}
else
{
	echo "EL VALOR A DEBITAR ES MAYOR AL EXISTENTE EN EL INVENTARIO POR FAVOR REVISE E INTENTE NUEVAMENTE, EN CASO DE REQUERIR AYUDA CONTACTE AL ADMINISTRADOR";
}


?>








