<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
//datos del producto
$sql="Insert merMater, merCant, merUnidad from mercanciamaterialconstruccion";
$inventario=$objConexion->query($sql);
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarInsertarInventario.php">
<head>
<meta charset="UTF-8">
<title>Insertar_Inventario</title>
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
<h2>INGRESO DE NUEVAS HERRAMIENTAS Y MATERIALES A BODEGA</h2>

          <tbody>
          <tr>
            <h4> <td>NOMBRE DEL PRODUCTO A INSERTAR EN EL INVENTARIO:</td></h4> 
			<td><input name="nombre" type="text" id="nombre" size="53" required /></td>
            </tr>
			<tr>
            <h4> <td>CANTIDAD DEL PRODUCTO A INGRESAR:</td></h4> 
			<td><input name="cantidad" type="text" id="cantidad" size="53" required /></td>
            </tr>
              <h4 <td>SELECCIONE LA UNIDAD DE MEDIDA DEL PRODUCTO:</td></h4> 
            </tr>
			<td><label for="medida"></label>
			<select name="medida" id="medida" style="width:100px" required>
			<option value="No">Seleccione</option>
			<option value="kilos">kilos</option>
			<option value="unidades">unidades</option>
			<option value="bultos">bultos</option>
			<option value="metros">metros</option>
			<option value="galon">galon</option>
			</select>
			</td>
          </tbody>
	</article>

<article> 
<br>
<h3 align="center"><td>
  <input name="ENVIAR" value="CONFIRMAR" type="submit">

</td></h3>

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
	echo '<p align="center" >SE HA INSERTADO UN NUEVO PRODUCTO CORRECTAMENTE';
if ($msj==2)
	echo '<p align="center">PROBLEMAS EN LA INSERCION DEL NUEVO PRODUCTO, FAVOR REVISE E INTENTE DE NUEVO';
?>


