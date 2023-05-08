<?php
session_start();
extract ($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
/* Variables que vienen del formulario: $login, $password */

/*asigno a la variable password el valor encriptado*/

$pass = md5($_REQUEST['pass']);
$login = $_REQUEST['login'];

$objConexion=Conectarse();
//Guardamos en una variable la sentencia sql
$sql="select * from usuarios where usuLogin = '$login' and usuPassword = '$pass'";
//Asignar a una variable el resultado de la consulta
$resultado=$objConexion->query($sql);
//verifico si existe el usuario
$existe = $resultado->num_rows;

if ($existe==1)  //quiere decir que los datos estan bien
{
	$usuario=$resultado->fetch_object();
	$_SESSION['user']= $usuario->usuLogin;	
	header("location:../Vista/Navegacion.php?pag=Navegacion");
	
}
else
{
	header("location:../Vista/index2.php?pag=iniciarSesion&x=1");  //x=1, quiere decir que el usuario no esta registrado
}

?>