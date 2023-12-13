<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> FASHION</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<style>
    .component {
        color: var(--bs-gray-800);
        background-color: var(--bs-gray-100);
        border: 1px solid var(--bs-gray-200);
        border-radius: .25rem;
    }

    .component-header {
        color: var(--bs-purple);
    }
</style>

<style>
    .navbar {
        margin-top: 0px;

    }
</style>

<style>
    /* pa la barra de helpmeeeeeeee*/
    .navbar-top {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        height: 40px;
    }

    .navbar-brand {
        font-size: 14px;
    }
</style>
<style>
    .carousel-inner {
        border: 1px solid #ccc;
    }

    .carousel-item img {
        max-width: 50%;
        height: auto;
    }
</style>

</style>
<style>
    img.card-img-top {
        width: 200px;
        height: 200px;
    }
</style>

<?php

session_start(); // Asegúrate de iniciar la sesión al principio del archivo PHP

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['usuario'])) {
    // Usuario ha iniciado sesión
    $nombreUsuario = $_SESSION['usuario'];
    $enlaceUnete = '<a class="navbar-brand" href="login.php">Cerrar Sesión</a>';
} else {
    // Usuario no ha iniciado sesión
    $nombreUsuario = '';
    $enlaceUnete = '<a class="navbar-brand" href="login.php">Únete</a>';
}
?>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-top">
    <?php echo $enlaceUnete; ?>
    <a class="navbar-brand" href="#">Ayuda</a>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"> FASHION</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <img src="https://www.bing.com/images/create/logo-de-una-tienda-de-ropa-que-tenga-de-iniciales-/1-6566490a6d2e4da19ca8edba8dea2ba7?id=UjhNIcQJ9lvBoG9tDZzf%2fw%3d%3d&view=detailv2&idpp=genimg&FORM=GCRIDP&mode=overlay" alt="">
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            
            <!-- Muestra el nombre de usuario si está presente en la sesión -->
            <?php
            if (!empty($nombreUsuario)) {
                echo '<li class="nav-item"><span class="navbar-text">Bienvenido, ' . $nombreUsuario . '!</span></li>';
            }
            ?>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    HOMBRE
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="PRINCIPALPLAYERAS.php"> PLAYERAS</a>
                    <a class="dropdown-item" href="PRINCIPALSUETERES.php"> SUETERES </a>
                    <a class="dropdown-item" href="PRINCIPALHODDIES.php"> HOODIES</a>
                    <a class="dropdown-item" href="PRINCIPALPANTALONES.php"> PANTALONES </a>

                    <div class="dropdown-divider"></div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    MUJER
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="PRINCIPALPLAYERASM.php"> PLAYERAS</a>
                    <a class="dropdown-item" href="TOPS.php"> TOPS </a>
                    <a class="dropdown-item" href="FALDAS.php"> FALDAS</a>
                    <a class="dropdown-item" href="PANTALONES.php"> PANTALONES </a>

                    <div class="dropdown-divider"></div>
                </div>
            </li>
        </ul>
    </div>
</nav>

    

    <!--carrusellll-->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <center><img src="https://elonce-media.elonce.com/fotos-nuevo/2022/10/05/o_1664998193.jpg"
                        class="d-block w-100" alt="..."></center>
                <div class="carousel-caption d-none d-md-block">
                    <h5> MIDETE A LA MODA </h5>
                    <p> DESLUMBRATE CON LA NUEVA TEMPORADAS </p>
                </div>
            </div>
            <div class="carousel-item">
                <center><img
                        src=" https://cdn-3.expansion.mx/dims4/default/99f54ca/2147483647/strip/true/crop/1200x800+0+0/resize/1200x800!/format/webp/quality/60/?url=https%3A%2F%2Fcdn-3.expansion.mx%2Fbc%2F01%2Fd46a7e8d41d2b52820716e4edb21%2Fropa-para-primavera-mujer-2023.jpg"
                        class="d-block w-100" alt="..."> </center>
                <div class="carousel-caption d-none d-md-block">
                    <h5> LA MODA DE ESTA TEMPORADA</h5>
                    <p> CON ESTA MODA DESTELLARAS A TODAS CON ESTO</p>
                </div>
            </div>
            <div class="carousel-item">

                <center><img
                        src="https://img.freepik.com/foto-gratis/modelo-mujer-mostrando-ropa-invierno_1303-16950.jpg"
                        class="d-block w-100" alt="..."> </center>
                <div class="carousel-caption d-none d-md-block">
                    <h5>ROPA A LA MEDIDA DE TÚ COMODIDAD </h5>
                    <p>A UN CLIC DE TUS NUEVAS PRENDAS FAVORITAS </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>

    <center>
        <h2> TOP CATEGORIAS </h2>
    </center>

    <br>

    <!--- aqui los productosssssssssssssss xd--->


    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <center> <img class="card-img-top"
                            src="https://i5.walmartimages.com.mx/mg/gm/3pp/asr/e257b4e1-0f7c-4ba2-ad52-45ce9975740e.893e191d742df55b2c27e1350e4ef65a.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF/100px180/"
                            alt="Card image cap"></center>
                    <div class="card-body">
                        <h5 class="card-title">Camisa</h5>
                        <p class="card-text"> Camisa manga larga azul <br>
                            MXN 499</p>
                        <a href="primeracompra.php" class="btn btn-primary"> Ver detalles </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <center><img class="card-img-top"
                            src=" https://brooksbrothers.vteximg.com.br/arquivos/ids/223352-520-631/100197251_1.jpg?v=638252380157870000"
                            alt="Card image cap"> </center>
                    <div class="card-body">
                        <h5 class="card-title"> Pantalón casual </h5>
                        <p class="card-text"> Pantalon casual azul marino <br>
                            MXN 549</p>
                        <a href="segundacompra.php" class="btn btn-primary"> Ver detalles </a>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card" style="width: 18rem;">
                    <center><img class="card-img-top"
                            src="https://static.bershka.net/4/photos2/2023/I/0/1/p/5764/187/800/057f58b01ec149dd45a344e8d3e94cf5-5764187800_1_3_0.jpg?imwidth=750&impolicy=bershka-itxmediumhigh&imformat=chrome"
                            alt="Card image cap"> </center>
                    <div class="card-body">
                        <h5 class="card-title"> Vestido </h5>
                        <p class="card-text"> Vestido mini bandeau terciopelo frunce lateral <br>
                            MXN 799</p>
                        <a href="cuartacompra.php" class="btn btn-primary"> Ver detalles </a>
                    </div>
                </div>
            </div>




            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                           <center> <img class="card-img-top"
                                src="https://cdn1.coppel.com/images/catalog/pr/8128062-1.jpg"
                                alt="Card image cap"></center>
                            <div class="card-body">
                                <h5 class="card-title"> Tenis polo</h5>
                                <p class="card-text"> Tenis casuales polo blancos para mujer   <br>
                                    MXN 699</p>
                                <a href="terceracompra.php" class="btn btn-primary"> Ver detalles </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <center><img class="card-img-top"
                                src="https://resources.claroshop.com/imgsplaza-sears/sears/?tp=f&id=3876789&t=original"
                                alt="Card image cap"></center>
                            <div class="card-body">
                                <h5 class="card-title">Blazer para hombre azul</h5>
                                <p class="card-text"> Saco Blazer para Hombre con Bolsas Tipo Parche Slim Fit Carlo Corinto <br>
                                    MXN 1099</p>
                                <a href="sextacompra.php" class="btn btn-primary"> Ver detalles </a>
                            </div>
                        </div>
                    </div>


                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <center><img class="card-img-top"
                                src="https://trueshop.mx/cdn/shop/files/top_manga_larga_rib_H.E.R_negra_1_tops_bodies_720x720.jpg?v=1699540063"
                                alt="Card image cap"></center>
                            <div class="card-body">
                                <h5 class="card-title"> Top mujer </h5>
                                <p class="card-text"> Crop Tops Mujer  <br>
                                    MXN 329</p>
                                <a href="quintacompra.php" class="btn btn-primary"> Ver detalles </a>
                            </div>
                        </div>
                    </div>
                    <br>



                    <div class="container mt-5"
                        style="background-color: aliceblue; font-family: 'Arial', sans-serif; color: black; font-size: 16px;">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div style="padding: 10px; text-align: center;">
                                    <div class="pbn1_title">
                                        <span style="color: DARK; font-family: 'Verdana', sans-serif;">"LA COMBINACIÓN
                                            PERFECTA:"</span>
                                        <br>
                                        <span style="color: DARK; font-family: 'Georgia', serif;">"A LA ÚLTIMA Y CON UN
                                            10% DE DESCUENTO"</span>
                                        <br>
                                        <span style="color: black;">"ÚNETE A NUESTRA COMUNIDAD:"</span>
                                        <br>
                                        <div class="form-group">
                                            <input type="email" class="form-control"
                                                placeholder="Ingrese su correo electrónico">
                                        </div>
                                        <button class="btn btn-primary"
                                            style="background-color: blue; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">¡ENVIAR!</button>
                                    </div>
                                    
                                
                                </div>
                                
                            </div>
                            
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer text-center" style="background-color: black; color: white;">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">UBICANOS</h4>
                    <p class="lead mb-0">
                        Fracción la Coyotera del Ejido, Av. Nopaltepec, Av San Antonio s/n,
                        <br />
                        Industrial Cuamatla, 54748 Cuautitlán Izcalli, Méx.
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">NOSOTROS EN REDES SOCIALES</h4>
                    
                    <a href="https://www.instagram.com/p/Cs4GdJKP-Lt/?igshid=ODhhZWM5NmIwOQ==" target="_blank">
                        <img src="https://img.freepik.com/vector-premium/logotipo-redes-sociales-cuadrado-negro_197792-3367.jpg" 
                         style="width: 30px; height: 30;">
                        <a href="https://www.facebook.com/profile.php?id=100041578569265&mibextid=vk8aRt" target="_blank">
                            <img src="https://w7.pngwing.com/pngs/938/954/png-transparent-facebook-logo-facebook-messenger-logo-computer-icons-black-and-white-text-desktop-wallpaper-emoticon.png" 
                             style="width: 30px; height: 30;">
                            <a href="https://www.tiktok.com/@duck.less?_t=8hyL6NrQpEr&_r=1" target="_blank">
                                <img src="https://w7.pngwing.com/pngs/740/364/png-transparent-communication-media-network-social-tik-tok-social-media-icon-thumbnail.png" 
                                 style="width: 30px; height: 30;">
                                
                    </a>
                    <p>O contactanos a traves de: <br>
                        55 8646 4743
                      </p>
                </div>
                <!-- Footer About Text-->
<div class="col-lg-4 mb-5 mb-lg-0">
    <h4 class="text-uppercase mb-4">GRACIAS POR VISITARNOS</h4>
    <p class="lead mb-0">
        Agradecemos tu visita, compra para unirte 
        a nuestro estilo, vuelve a visitarnos pronto.
    </p>
</div>


            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white" style="background-color: black;">
        <div class="container"><small>Copyright &copy; LOVERS 2023</small></div>
    </div>
    

    
    
                    <script src="js/bootstrap.min.js"></script>

                    <script>
  // Función para cerrar sesión y redirigir al usuario al login
  function cerrarSesion() {
    // Aquí puedes realizar acciones de cierre de sesión, como limpiar cookies o tokens de autenticación en el lado del cliente.

    // Redirigir al usuario a la página de inicio de sesión (reemplaza 'login.html' con tu ruta correcta).
    window.location.href = '../../loginadmin.php';
  }
</script>
                               
</body>
</html>

