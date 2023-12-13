
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Iniciar Sesión </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

        <style>
            .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
        </style>
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="../images/lovers.png"
                class="img-fluid" alt=" Lovers">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

            <form action="./registrar_clientes.php" method="POST">
                <!--nombreeeeee-->
                <div class="form-outline mb-4">
    <input type="text" id="nombreCompleto" name="nombreCompleto" class="form-control form-control-lg"
        placeholder="Nombre Completo" />
    <label class="form-label" for="nombreCompleto">Nombre Completo</label>
</div>

<!-- Usuario -->
<div class="form-outline mb-4">
    <input type="text" id="nombreUsuario" name="nombreUsuario" class="form-control form-control-lg"
        placeholder="Usuario" />
    <label class="form-label" for="nombreUsuario">Usuario</label>
</div>

<!-- Email input -->
<div class="form-outline mb-4">
    <input type="email" id="correoElectronico" name="correoElectronico" class="form-control form-control-lg"
        placeholder="Correo Electrónico" />
    <label class="form-label" for="correoElectronico">Correo Electronico</label>
</div>

<!-- Password input -->
<div class="form-outline mb-3">
    <input type="password" id="contrasena" name="contrasena" class="form-control form-control-lg"
        placeholder="Contraseña" />
    <label class="form-label" for="contrasena">Contraseña</label>
</div>


      
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    
                    
                  </div>
                  
                </div>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Registrarse</button>
                <a href="login.php" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Iniciar Sesión</a>

                  
                </div>

                
      
              </form>
            </div>
          </div>
        </div>
        <div
          class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
          <!-- Copyright -->
          <div class="text-white mb-3 mb-md-0">
            Copyright lovers © 2020.
          </div>
          <!-- Copyright -->
      
          <!-- Right -->
          
      </section>
</body>
</html>
