<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Cliente.php";
$objCliente=new Cliente();
$clientes=$objCliente->consultarClientes();
?>
<head>
<meta charset="UTF-8">
<title>Lista_Clientes</title>
<link rel="stylesheet" href="../Css/estilos_listar_cliente.css">
</head>
<div id="contenedor">
<header> 
<h2><img style="width: 150px; height: 80px;" alt="logo" src="../Recursos/logo.jpg">DISTRIBUIDORA DE HERRAMIENTAS Y MATERIALES PARA CONSTRUCCION GLOBAL</h2>
</header>
<nav> 
<div id="header">
<ul class="nav">
<li> <a href="salir.php"><h3>SALIR</h3></a>
</li>
<li> <a href="navegacion.php"><h3>ATRAS</h3></a>
</li>
</ul>
</nav>

<section id="contenido"> 

<h1 align="center">LISTADO DE CLIENTES</h1>
<link rel="stylesheet" href="../Css/estilos_listar_cliente.css"> 
<table width="100%" border="1" align="center">
  <tr align="center" bgcolor="#2c3e50" class="texto">
		<td><strong>CODIGO CLIENTE</strong></td>
		<td><strong>NOMBRE(S)</strong></td>
		<td><strong>IDENTIFICACION Y/O NIT</strong></td>
		<td><strong>TELEFONO</strong></td>
		<td><strong>DIRECCION</strong></td>
		<td><strong>CORREO</strong></td>
		<td><strong>TIPO CLIENTE</strong></td>
		<td><strong>METODO DE PAGO</strong></td>
		
	</tr>
<?php
while($registro=$clientes->fetch_object())
{
?>
	<tr>
		<td><?php echo $registro->idCliente?></td>
		<td><?php echo $registro->nomCliente?></td>
		<td><?php echo $registro->nitCliente?></td>
		<td><?php echo $registro->telCliente?></td>
		<td><?php echo $registro->dirCliente?></td>
		<td><?php echo $registro->correoCliente?></td>
		<td><?php echo $registro->tipCliente?></td>
		<td><?php echo $registro->tipCompra?></td>
	</tr>  
	</form>
<?php
}//cerrando el ciclo while
?>
</table>
</section>
<footer> 
<h4>SOFTWARE PARA CONTROL DE INVENTARIOS<h4/>
<h4>DISTRIBUIDORA GLOBAL<h4/>
</footer>