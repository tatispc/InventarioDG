<?php

function Conectarse ()

{
$Conexion=new MySQLi("localhost","root","","distribuidoraglobal","33065");


if ($Conexion->connect_error)
	echo "Problema con la conexion".$conexion->connect_error;

else
	return $Conexion;

}


?>