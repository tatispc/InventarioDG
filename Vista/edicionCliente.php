<?php
if (isset($_SESSION['user'])){
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql="select * from cliente where idCliente='$_REQUEST[idCliente]'";
$clientes = $objConexion->query($sql);
$cliente=$clientes->fetch_object();
}
else
{
header("location:../index.php?x=2");
}
?>

<form id="form1" name="form1" method="post" action="../Controlador/validarEditarCliente.php">
<head>
<meta charset="UTF-8">
<title>Actualizar_Clientes</title>
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
<h2 align="center">ACTUALIZAR DATOS CLIENTE</h2>
<link rel="stylesheet" href="../Css/estilos_listar_cliente.css">
<table  border="1" align="center" bgcolor="#2c3e50" class="texto">

<tr>
<td><strong>NOMBRE:</strong></td>
<td>
<input name="nomCliente" type="text" id="nomCliente"  size="70%" 
value="<?php echo $cliente->nomCliente?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>IDENTIFICACION:</strong></td>
<td>
<input name="nitCliente" type="text" id="nitCliente"  size="70%" 
value="<?php echo $cliente->nitCliente?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>TELEFONO:</strong></td>
<td>
<input name="telCliente" type="text" id="telCliente"  size="70%" 
value="<?php echo $cliente->telCliente?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>DIRECCION:</strong></td>
<td>
<input name="dirCliente" type="text" id="dirCliente"  size="70%" 
value="<?php echo $cliente->dirCliente?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>CORREO ELECTRONICO:</strong></td>
<td>
<input name="correoCliente" type="text" id="correoCliente"  size="70%" 
value="<?php echo $cliente->correoCliente?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>TIPO DE CLIENTE:</strong></td>
<td><label for="tipCliente"></label>
<select name="tipCliente"  id="tipCliente"> 
<option value="<?php $tipCliente=$cliente->tipCliente; echo $tipCliente;?>"><?php $tipCliente=$cliente->tipCliente; echo $tipCliente;?></option>
<option value="<?php 
if($tipCliente=='mayorista'){
echo "minorista";
}
else {
echo "mayorista";}
?>">
<?php 
if($tipCliente=='mayorista'){
echo "minorista";
}
else {
echo 'mayorista';}
?></option>
</select></td>
</tr>

<tr>
<td><strong>METODO DE PAGO:</strong></td>
<td><label for="tipCompra"></label>
<select name="tipCompra"  id="tipCompra"> 
<option value="<?php $tipCompra=$cliente->tipCompra; echo $tipCompra;?>"><?php $tipCompra=$cliente->tipCompra; echo $tipCompra;?></option>
<option value="<?php 
if($tipCompra=='credito'){
echo "contado";
}
else {
echo "credito";}
?>">
<?php 
if($tipCompra=='credito'){
echo "contado";
}
else {
echo 'credito';}
?></option>
</select></td>
</tr>



<tr>
<td colspan="20" align="center" ><input type="submit" name="enviar" id="enviar" value="ACTUALIZAR" class="botcolored"/></td>
</tr>
</table>
<input name="idCliente" type="hidden" value="<?php echo $_REQUEST['idCliente']?>" />
</form>
</article> 
</body>
</section>
<footer> 
<h4>SOFTWARE PARA CONTROL DE INVENTARIOS<h4/>
<h4>DISTRIBUIDORA GLOBAL<h4/>
</footer>
</form>


