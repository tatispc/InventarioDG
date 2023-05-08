<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
//datos de garantia
$sql="Insert fechaGarantia,merMaterGarantia,garObservacion from garantia";
$garantia=$objConexion->query($sql);
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarInsertarGarantia.php">
<head>
<meta charset="UTF-8">
<title>Registro_Garantia</title>
<link rel="stylesheet" href="../Css/estilos_garantias.css"> 
</head>


<body>
<div id="contenedor">
<header> 
<h2><img style="width: 150px; height: 80px;" alt="logo" src="../Recursos/logo.jpg">DISTRIBUIDORA DE HERRAMIENTAS Y MATERIALES PARA CONSTRUCCION GLOBAL<h2/>
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
<h2>REGISTRO GARANTIAS</h2>

          <tbody>
			<tr>
            <h4 <td>Fecha Registro de Garantia:</td></h4> 
			<td><input name="fecha" type="date" id="fecha" size="53" required /></td>
            </tr>
			<tr>
            <h4 <td>Ingrese Identificacion del Cliente:</td></h4> 
			<td><input name="nit" type="text" id="nit" size="53" required /></td>
            </tr>
            <tr>
              <h4 <td>Ingrese el Producto por Garantia:</td></h4> 
			<td><input name="nombres" type="text" id="nombres" size="53" required /></td>
            </tr>
            <tr>
              <h4 <td>Observaciones:</td></h4> 
			<td><input name="observacion" type="text" id="observacion" size="53" required /></td>
            </tr>
			<tr>
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
<h4>SOFTWARE PARA CONTROL DE INVENTARIOS<h4/>
<h4>DISTRIBUIDORA GLOBAL<h4/>
</footer>

 </div>
</body>
</form>
<?php
if ($msj==1)
	echo '<p align="center" >SE HA INSERTADO UN NUEVO REGISTRO DE GARANTIA CORRECTAMENTE';
if ($msj==2)
	echo '<p align="center">PROBLEMAS EN LA INSERCION DEL REGISTRO, FAVOR REVISE E INTENTE DE NUEVO';
?>


