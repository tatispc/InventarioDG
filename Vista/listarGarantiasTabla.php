<?php
require "../Modelo/conexionBasesDatos.php";
require "../Modelo/Garantia.php";
$objGarantia=new Garantia();
$garantias=$objGarantia->consultarGarantias();
?>
<head>
<meta charset="UTF-8">
<title>Lista_Garantias</title>
<link rel="stylesheet" href="../Css/estilos_listar_garantia.css">
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

<h1 align="center">LISTADO DE GARANTIAS</h1>
<link rel="stylesheet" href="../Css/estilos_listar_garantia.css"> 
<table width="100%" border="1" align="center">
  <tr align="center" bgcolor="#2c3e50" class="texto">
		<td><strong>NUMERO DE LA GARANTIA</strong></td>
		<td><strong>FECHA DE INICIO DE LA GARANTIA</strong></td>
		<td><strong>IDENTIFICACION Y/O NIT DEL CLIENTE</strong></td>
		<td><strong>NOMBRE DEL PRODUCTO EN GARANTIA</strong></td>
		<td><strong>OBSERVACION</strong></td>
		
	</tr>
<?php
while($registro=$garantias->fetch_object())
{
?>
	<tr>
		<td><?php echo $registro->idGarantia?></td>
		<td><?php echo $registro->fechaGarantia?></td>
		<td><?php echo $registro->identClienteGarantia?></td>
		<td><?php echo $registro->merMaterGarantia?></td>
		<td><?php echo $registro->garObservacion?></td>
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