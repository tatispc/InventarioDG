<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
//datos de personal
$sql="Insert idUsuario,userArea,userCodIdent,userNom,userApell,userTel,userCorreo from personal";
$personal=$objConexion->query($sql);
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarInsertarPersonal.php">
<head>
<meta charset="UTF-8">
<title>Registro_Personal</title>
<link rel="stylesheet" href="../Css/estilos_registro_personal_general.css"> 
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
<h2>REGISTRO DE PERSONAL</h2>

          <tbody>
		  <tr>
		  <h4><td> Codigo Usuario: </td></h4>
			<td><label for="codigo"></label>
			<input name="codigo" type="text" id="codigo" size="53"  required /></td>
		  </tr>
		  <tr>
		  <h4><td> Seleccione el Area Laboral: </td></h4>
			<td width="50%"><label for="area"></label>
			<select name="area" id="area" style="width:28.5%" required>
			<option value="0">Seleccione</option>	
			<option value="1">Administrador</option>
			<option value="2">Vendedor</option>
			<option value="3">Jefe de Bodega</option>
			<option value="4">Auxiliar Logistico</option>
			<option value="5">Despachos</option>
			<option value="6">Tecnologia</option>
			<option value="7">Facturacion</option>
			<option value="8">Garantia</option>
			</select></td>
		  </tr>
          <tr>
            <h4 <td>Numero de Identificacion:</td></h4> 
			<td><input name="identificacion" type="text" id="identificacion" size="53" required /></td>
            </tr>
            <tr>
              <h4 <td>Nombre(s):</td></h4> 
			<td><input name="nombres" type="text" id="nombres" size="53" required /></td>
            </tr>
			<tr>
              <h4 <td>Apellido(s):</td></h4> 
			<td><input name="apellidos" type="text" id="apellidos" size="53" required /></td>
            </tr>
			<tr>
              <h4 <td>Telefono Contacto:</td></h4> 
			<td><input name="telefono" type="text" id="telefono" size="53" required /></td>
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
	echo '<p align="center" >SE HA INSERTADO EL REGISTRO DEL NUEVO PERSONAL CORRECTAMENTE';
if ($msj==2)
	echo '<p align="center">PROBLEMAS EN LA INSERCION DEL NUEVO PERSONAL, FAVOR REVISE E INTENTE DE NUEVO';
?>


