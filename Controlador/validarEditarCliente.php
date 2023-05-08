<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
//Guardamos en una variable la sentencia sql que permite actualizar el cliente
echo $sql="update cliente 
set nomCliente='$_REQUEST[nomCliente]',nitCliente='$_REQUEST[nitCliente]',telCliente='$_REQUEST[telCliente]',dirCliente='$_REQUEST[dirCliente]',correoCliente='$_REQUEST[correoCliente]',tipCliente='$_REQUEST[tipCliente]',tipCompra='$_REQUEST[tipCompra]' where idCliente='$_REQUEST[idCliente]'";



//Ejecutamos la consulta llamando al método query del objeto conexión y pasando la sentencia sql
$resultado=$objConexion->query($sql);

if ($resultado)
	header("location:../Vista/index2.php?pag=EditarCliente&msj=1");
else
	header("location:../Vista/index2.php?pag=EditarCliente&msj=2");
$objConexion->close();
?>