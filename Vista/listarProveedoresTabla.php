<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Proveedor.php";
$objProveedor=new Proveedor();
$proveedores=$objProveedor->consultarProveedores();
?>
<head>
<meta charset="UTF-8">
<title>Lista_Proveedores</title>
<link rel="stylesheet" href="../Css/estilos_listar_proveedor.css">
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

<h1 align="center">LISTADO DE PROVEEDORES</h1>
<link rel="stylesheet" href="../Css/estilos_listar_proveedor.css"> 
<table width="100%" border="1" align="center">
  <tr align="center" bgcolor="#2c3e50" class="texto">
		<td><strong>CODIGO PROVEEDOR</strong></td>
		<td><strong>IDENTIFICACION Y/O NIT</strong></td>
		<td><strong>NOMBRE(S)</strong></td>
		<td><strong>TELEFONO</strong></td>
		<td><strong>DIRECCION</strong></td>
		<td><strong>CORREO</strong></td>
		
	</tr>
<?php
while($registro=$proveedores->fetch_object())
{
?>
	<tr>
		<td><?php echo $registro->proIdentificacion?></td>
		<td><?php echo $registro->proNit?></td>
		<td><?php echo $registro->proNombre?></td>
		<td><?php echo $registro->proTel?></td>
		<td><?php echo $registro->proDirec?></td>
		<td><?php echo $registro->proEmail?></td>

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