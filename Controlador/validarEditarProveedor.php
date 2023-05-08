<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
//Guardamos en una variable la sentencia sql que permite actualizar el proveedor
echo $sql="update proveedor 
set proNit='$_REQUEST[proNit]',proNombre='$_REQUEST[proNombre]',proTel='$_REQUEST[proTel]',proDirec='$_REQUEST[proDirec]',proEmail='$_REQUEST[proEmail]'where proIdentificacion='$_REQUEST[proIdentificacion]'";
//Ejecutamos la consulta llamando al método query del objeto conexión y pasando la sentencia sql
$resultado=$objConexion->query($sql);

if ($resultado)
	header("location:../Vista/index2.php?pag=EditarProveedor&msj=1");
else
	header("location:../Vista/index2.php?pag=EditarProveedor&msj=2");
$objConexion->close();
?>