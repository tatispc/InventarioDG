<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
if (isset($_REQUEST['idMercancia']))
{
	$idMerc=$_REQUEST['idMercancia'];
	$sql="select * from mercanciamaterialconstruccion where idMercancia = '$idMerc'";
	$materialBodega = $objConexion->query($sql);
	$material=$materialBodega->fetch_object();
	$nombreMaterial= $material->merMater;
	$cantMaterial= $material->merCant;
}
else
{
	$nombreMaterial= "";
	$cantMaterial= "";
}

//$msj='1,2';
?>

<form id="form1" name="form1" method="post" action="../Controlador/validarSumarInventario.php">
<head>
<meta charset="UTF-8">
<title>Sumar_Inventario</title>
<link rel="stylesheet" href="../Css/estilos_exis_bodega.css"> 
</head>


<body>
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
</div>
</nav>


<section id="contenido"> 
<article> 
<br>
<br>
<h2>ADICION DE STOCK DE BODEGA</h2>

          <tbody>
          <tr>
            <h4> <td>NOMBRE DEL PRODUCTO A INCREMENTAR EN EL INVENTARIO:</td></h4> 
			<td><input name="buscar" type="search" id="buscar" size="53" readonly="true" value="<?php echo $nombreMaterial ?>" required></td>
            </tr>
            <tr>
            <h4> <td>CANTIDAD DISPONIBLE:</td></h4> 
			<td><input name="disponible" id="text" size="53" readonly="true" value="<?php echo $cantMaterial ?>"></td>
            </tr>
			<tr>
            <h4> <td>CANTIDAD DEL PRODUCTO A SUMAR:</td></h4> 
			<td><input name="cantidad" type="text" id="cantidad" size="53" required /></td>
            </tr>
          </tbody>
	</article>

<article> 
<br>
<h3 align="center"><td>
<input type="hidden" value="<?php echo $_GET['idMercancia']?>" name="idMercancia">
<input name="ENVIAR" value="CONFIRMAR" type="submit">
</td>
    </h3>

    </article>
  </section>

<footer> 
	<h4>SOFTWARE PARA CONTROL DE INVENTARIOS</h4>
	<h4>DISTRIBUIDORA GLOBAL</h4>
</footer>

</div>
</body>
</form>
<?php
if ($msj==1)
	echo '<p align="center" >SE HA DEBITADO CORRECTAMENTE';
if ($msj==2)
	echo '<p align="center">PROBLEMAS EN LA EJECUCION, FAVOR REVISE E INTENTE DE NUEVO';
?>
