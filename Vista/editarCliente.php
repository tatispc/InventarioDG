<?php

require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Cliente.php";
$objConexion=Conectarse();
$sql="select * from cliente";	  
$clientes = $objConexion->query($sql);

?>
<head>
<meta charset="UTF-8">
<title>Editar_Clientes</title>
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
<article> 
<br>
<br>
<h2>ACTUALIZAR CLIENTE</h2>

<table width="auto" border="1" align="center">
  <tr align="center" bgcolor="#2c3e50" class="texto">
		<td><strong>CODIGO CLIENTE</strong></td>
		<td><strong>NOMBRE(S)</strong></td>
		<td><strong>IDENTIFICACION Y/O NIT</strong></td>
		<td><strong>TELEFONO</strong></td>
		<td><strong>DIRECCION</strong></td>
		<td><strong>CORREO</strong></td>
		<td><strong>TIPO CLIENTE</strong></td>
		<td><strong>METODO DE PAGO</strong></td>
		<td><strong>SELECCIONAR</strong></td>

</tr>
<?php
while($cliente=$clientes->fetch_object())
{
?>
	<tr>
		<td><?php echo $cliente->idCliente?></td>
		<td><?php echo $cliente->nomCliente?></td>
		<td><?php echo $cliente->nitCliente?></td>
		<td><?php echo $cliente->telCliente?></td>
		<td><?php echo $cliente->dirCliente?></td>
		<td><?php echo $cliente->correoCliente?></td>
		<td><?php echo $cliente->tipCliente?></td>
		<td><?php echo $cliente->tipCompra?></td>
		<td>
			<a href="index2.php?pag=edicionCliente&idCliente=<?php echo $cliente->idCliente?>" title="EDITAR">
			<img src="../Recursos/editarCliente.jpg" width="50" height="50" /></a>
		</td>
	</tr> 
 </div>
 <?php
}

?>
</table>
	</article>
  </section>
<footer> 
<h4>SOFTWARE PARA CONTROL DE INVENTARIOS<h4/>
<h4>DISTRIBUIDORA GLOBAL<h4/>
</footer>





