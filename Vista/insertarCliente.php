<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
//datos del cliente
$sql="Insert nomCliente,nitCliente,telCliente,dirCliente,correoCliente,tipCliente,tipCompra from cliente";
$cliente=$objConexion->query($sql);
$msj='1,2';
?>


<form id="form1" name="form1" method="post" action="../Controlador/validarInsertarCliente.php">
<head>
<meta charset="UTF-8">
<title>Registro_Clientes</title>
<link rel="stylesheet" href="../Css/estilos_control_clientes.css"> 
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
<h2>REGISTRO CLIENTES</h2>

          <tbody>
          <tr>
            <h4 <td>Nombre(s) Cliente:</td></h4> 
			<td><input name="nombres" type="text" id="nombres" size="53" required /></td>
            </tr>
			<tr>
            <h4 <td>Nit Cliente:</td></h4> 
			<td><input name="nit" type="text" id="nit" size="53" required /></td>
            </tr>
            <tr>
              <h4 <td>Telefono Contacto:</td></h4> 
			<td><input name="telefono" type="text" id="telefono" size="53" required /></td>
            </tr>
			<tr>
              <h4 <td>Direccion Cliente:</td></h4> 
			<td><input name="direccion" type="text" id="direccion" size="53" required /></td>
            </tr>
			<tr>
              <h4 <td>Correo Electronico:</td></h4> 
			<td><input name="correo" type="text" id="correo" size="53" required /></td>
            </tr>
			<tr>
              <h4 <td>SELECCIONE EL TIPO DE CLIENTE:</td></h4> 
            </tr>
			<td><label for="tipocliente"></label>
			<select name="tipocliente" id="tipocliente" style="width:100px" required>
			<option value="No">Seleccione</option>	
			<option value="MAYORISTA">MAYORISTA</option>
			<option value="MINORISTA">MINORISTA</option>
			</select>
			</td>
			<br>
			<br>
						<tr>
              <h4 <td>SELECCIONE EL METODO DE PAGO DE COMPRA:</td></h4> 
            </tr>
			<td><label for="tipocompra"></label>
			<select name="tipocompra" id="tipocompra" style="width:100px" required>
			<option value="No">Seleccione</option>	
			<option value="CONTADO">CONTADO</option>
			<option value="CREDITO">CREDITO</option>
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
<h4>SOFTWARE PARA CONTROL DE INVENTARIOS<h4/>
<h4>DISTRIBUIDORA GLOBAL<h4/>
</footer>

 </div>
</body>
</form>
<?php
if ($msj==1)
	echo '<p align="center" >SE HA INSERTADO UN NUEVO CLIENTE CORRECTAMENTE';
if ($msj==2)
	echo '<p align="center">PROBLEMAS EN LA INSERCION DEL NUEVO CLIENTE, FAVOR REVISE E INTENTE DE NUEVO';
?>


