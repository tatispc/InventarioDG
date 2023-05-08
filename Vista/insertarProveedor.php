<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
//datos de proveedor
$sql="Insert proNit,proNombre,proTel,proDirec,proEmail from proveedor";
$proveedor=$objConexion->query($sql);
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarInsertarProveedor.php">
<head>
<meta charset="UTF-8">
<title>Registro_Proveedores</title>
<link rel="stylesheet" href="../Css/estilos_registro_proveedores.css"> 
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
<h2>REGISTRO PROVEEDORES</h2>

          <tbody>
			<tr>
            <h4 <td>NIT del Proveedor:</td></h4> 
			<td><input name="nit" type="text" id="nit" size="53" required /></td>
            </tr>
            <tr>
              <h4 <td>Nombre Empresa Y/O Proveedor:</td></h4> 
			<td><input name="nombres" type="text" id="nombres" size="53" required /></td>
            </tr>
			<tr>
              <h4 <td>Telefono Contacto:</td></h4> 
			<td><input name="telefono" type="text" id="telefono" size="53" required /></td>
            </tr>
			<tr>
              <h4 <td>Direccion:</td></h4> 
			<td><input name="direccion" type="text" id="direccion" size="53" required /></td>
            </tr>
			<tr>
              <h4 <td>Correo electronico:</td></h4> 
			<td><input name="correo" type="text" id="correo" size="53" required /></td>
            </tr>
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
	echo '<p align="center" >SE HA INSERTADO UN NUEVO PROVEEDOR CORRECTAMENTE';
if ($msj==2)
	echo '<p align="center">PROBLEMAS EN LA INSERCION DEL NUEVO PROVEEDOR, FAVOR REVISE E INTENTE DE NUEVO';
?>


