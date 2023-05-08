<?php
if (isset($_SESSION['user'])){
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql="select * from proveedor where proIdentificacion='$_REQUEST[proIdentificacion]'";
$proveedores = $objConexion->query($sql);
$proveedor=$proveedores->fetch_object();
}
else
{
header("location:../index.php?x=2");
}
?>

<form id="form1" name="form1" method="post" action="../Controlador/validarEditarProveedor.php">
<head>
<meta charset="UTF-8">
<title>Actualizar_Proveedor</title>
<link rel="stylesheet" href="../Css/estilos_control_proveedores.css"> 
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
<h2 align="center">ACTUALIZAR DATOS PROVEEDOR</h2>
<link rel="stylesheet" href="../Css/estilos_listar_proveedor.css">
<table  border="1" align="center" bgcolor="#2c3e50" class="texto">

<tr>
<td><strong>IDENTIFICACION:</strong></td>
<td>
<input name="proNit" type="text" id="proNit"  size="70%" 
value="<?php echo $proveedor->proNit?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>NOMBRE:</strong></td>
<td>
<input name="proNombre" type="text" id="proNombre"  size="70%" 
value="<?php echo $proveedor->proNombre?>" class="form-control"/></td>
</tr>


<tr>
<td><strong>TELEFONO:</strong></td>
<td>
<input name="proTel" type="text" id="proTel"  size="70%" 
value="<?php echo $proveedor->proTel?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>DIRECCION:</strong></td>
<td>
<input name="proDirec" type="text" id="proDirec"  size="70%" 
value="<?php echo $proveedor->proDirec?>" class="form-control"/></td>
</tr>

<tr>
<td><strong>CORREO ELECTRONICO:</strong></td>
<td>
<input name="proEmail" type="text" id="proEmail"  size="70%" 
value="<?php echo $proveedor->proEmail?>" class="form-control"/></td>
</tr>




<tr>
<td colspan="20" align="center" ><input type="submit" name="enviar" id="enviar" value="ACTUALIZAR" class="botcolored"/></td>
</tr>
</table>
<input name="proIdentificacion" type="hidden" value="<?php echo $_REQUEST['proIdentificacion']?>" />
</form>
</article> 
</body>
</section>
<footer> 
<h4>SOFTWARE PARA CONTROL DE INVENTARIOS<h4/>
<h4>DISTRIBUIDORA GLOBAL<h4/>
</footer>
</form>


