
<head>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../Css/estilos.css">
<link rel="stylesheet" href="../Css/CSS"> 
</head>


<form action="Controlador/validarInicioSesion.php">
  <section class="h-100 gradient-form" style="background-color: #4facfe;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="Recursos/logo.jpg"
                    style="width: 100px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Software Inventario Distribuidora Global</h4>
                </div>

                <form>
                  <p>Por favor, ingrese a su cuenta</p>

                  <div class="form-outline mb-4">
                    <input name="login" type="text" id="login" required" placeholder="Usuario"/>
                    <label class="form-label" for="login"></label>
                  </div>

                  <div class="form-outline mb-4">
                    <input name="pass" type="password" id="pass" required" placeholder="Password"/>
                    <label class="form-label" for="pass"></label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" 
                    type="submit" name="button" id="button" value="INGRESAR">Ingresar</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="Recursos/herramientass.png"
          alt="Login image" class="w-100 vh-60" style="object-fit: cover; object-position: left;">
      </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 
 
<?php

if ($x==1)
	echo "<br><p align='center'> Usuario no registrado con los datos ingresados, vuelva a intentar";
if ($x==2)
	echo "<br><p align='center'> Deben Iniciar Sesion para poder ingresar a la Aplicacion";
if ($x==3)
	echo "<br><p align='center'> El Usuario ha cerrado la Sesion";
?>


