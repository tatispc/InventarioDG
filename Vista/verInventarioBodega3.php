<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql="select * from mercanciamaterialconstruccion";	  
$inventarioBodega = $objConexion->query($sql);
?>

<head>
<meta charset="utf-8">
<title>Ver_Inventario</title>
<link rel="stylesheet" href="../Css/estilos_listar_bodega.css">
</head>
<div id="contenedor">
<header> 
<h2><img style="width: 150px; height: 80px;" alt="logo" src="../Recursos/logo.jpg">DISTRIBUIDORA DE HERRAMIENTAS Y MATERIALES PARA CONSTRUCCION GLOBAL</h2>
</header>
<nav> 
	<div id="header"></div>
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
<h2>INVENTARIO ACTUAL EN BODEGA</h2>

<table width="auto" border="1" align="center">
  <tr align="center" bgcolor="#2c3e50" class="texto">
		<td><strong>ID </strong></td>
		<td><strong>MATERIAL_O_MERCANCIA</strong></td>
		<td><strong>CANTIDAD_EN_BODEGA </strong></td>
		<td><strong>UNIDAD_DE_MEDIDA</strong></td>
		<td><strong>SELECCIONAR</strong></td>

</tr>
<?php
while($material=$inventarioBodega->fetch_object())
{
?>
	<tr>
		<td><?php echo $material->idMercancia?></td>
		<td><?php echo $material->merMater?></td>
		<td><?php echo $material->merCant?></td>
		<td><?php echo $material->merUnidad?></td>
		<td>
			<a href="index2.php?pag=ingresoInventario&idMercancia=<?php echo $material->idMercancia?>" title="SELECCIONAR">
			<img src="../Recursos/Check.png" height="15" /></a>
		</td>

	</tr> 
 <?php
}

?>
</table>
	</article>
  </section>
<footer> 
<h4>SOFTWARE PARA CONTROL DE INVENTARIOS</h4>
	<h4>DISTRIBUIDORA GLOBAL</h4>
</footer>





