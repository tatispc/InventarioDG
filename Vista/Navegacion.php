<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Navegacion</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'><link rel="stylesheet" href="./css.Navegacion">

</head>
<body>
<!-- partial:index.partial.html -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <h5><img class="logo horizontal-logo""> Distribuidora Global<h5/>
	  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Clientes
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item" href="insertarCliente.php">Registro de Clientes</a>
            <a class="dropdown-item" href="editarCliente.php">Edición de Clientes</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="listarClientesTabla.php">Listado de Clientes</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Proveedores
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
            <a class="dropdown-item" href="insertarProveedor.php">Registro Proveedores</a>
            <a class="dropdown-item" href="editarProveedor.php">Edición Proveedores</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="listarProveedoresTabla.php">Listado Proveedores</a>
          </div>
        </li>
    
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Personal
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
            <a class="dropdown-item" href="insertarPersonal.php">Registro de Personal</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Inventario Bodega
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
            <a class="dropdown-item" href="InsertarInventario.php">Registro de Nuevas Harramientas y Materiales</a>
            <a class="dropdown-item" href="verInventarioBodega2.php">Salida de Stock de Herramientas y Materiales</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="verInventarioBodega3.php">Aumento de Stock de Herramientas y Materiales</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Garantia
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
           <a class="dropdown-item" href="insertarGarantia.php">Garantia</a>
            <a class="dropdown-item" href="listarGarantiasTabla.php">Listado de Garantias</a>
          </div>
        </li>
    
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Salir
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
            <a class="dropdown-item" href="salir.php">Salir</a>
          </div>
        </li>
    </ul>
    </div>
  </div>
</nav>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script><script  src="./script.js"></script>

</body>
</html>