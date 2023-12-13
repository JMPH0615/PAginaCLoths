<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FALDAS  </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
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
            body {
              background-color: #cbf0f7;
            }
        
            .album-container {
              max-width: 800px;
              margin: 50px auto;
            }
        
            .photo-card {
              margin-bottom: 20px;
              border: 1px solid #dee2e6;
              border-radius: 8px;
              overflow: hidden;
              box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
        
            .photo-card img {
              width: 100%;
              height: auto;
              border-bottom: 1px solid #dee2e6;
            }
        
            .photo-card:hover {
              transform: scale(1.05);
              transition: transform 0.3s ease-in-out;
            }
        
            
            .photo-card:not(:last-child) {
              margin-right: 0;
            }
            .card-img-overlay {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0;
    }

    .btn-overlay {
      background: none;
      border: none;
      color: transparent;
      cursor: pointer;
      width: 100%;
      height: 100%;
    }
          </style>

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
    
    <body>
       
    
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php"> FASHION</a>
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
                          
                            
                           
                        </div>
                    </li>
    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            MUJER
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            
                            <a class="dropdown-item" href="PRINCIPALPLAYERASM.php"> PLAYERAS </a>
                            <a class="dropdown-item" href="TOPS.php"> TOPS </a>
                           
                            <a class="dropdown-item" href="PANTALONES.php"> PANTALONES </a> 
                        </div>
                    </li>
                    
    
                    
    
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        

    </ul>
    
</div>
</nav>

        <!---- PALyeras y todo el menu de stas spmt-->

        <center>
            <h2> FASHION  </h2>
        </center>

        <div class="container-fluid album-container">
            <h2 class="text-center mb-4"> FALDAS  </h2>
            <div class="row">
              <!-- Espacios para las fotos -->
              <div class="col-md-4">
                <div class="card photo-card">
                  <center><img src="https://i.pinimg.com/564x/5e/f8/b6/5ef8b61881d13c785177200778e688fb.jpg" alt="Foto 1" class="card-img-top"> </center>
                  <div class="card-img-overlay">
                    <a href="" class="btn btn-overlay" target="_blank"></a>
                  </div>
                  <center><div class="photo-text">
                    	
                Falda negra tableada  
                  </div> </center>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card photo-card">
                  <center><img src="https://i.pinimg.com/236x/66/67/48/6667485bc9932aaa22357659f8c4d8bf.jpg" alt="Foto 2" class="card-img-top"></center>
                  <div class="card-img-overlay">
                    <a href="https://www.ejemplo.com/detalles-foto2" class="btn btn-overlay" target="_blank"></a>
                  </div>
                 <center> <div class="photo-text">
                    Falda negra ondulada  
                  </div></center>
                </div>
              </div>
              
              <!-- Repite estos bloques para las demás fotos -->
              <!-- Ejemplo de un tercer espacio -->
              <div class="col-md-4">
                <div class="card photo-card">
                  <center><img src="https://i.pinimg.com/236x/a4/63/37/a463378706c3864ba62daf34565dd96e.jpg" alt="Foto 3" class="card-img-top"></center>
                  <div class="card-img-overlay">
                    <a href="https://www.ejemplo.com/detalles-foto3" class="btn btn-overlay" target="_blank"></a>
                  </div>
                  <center><div class="photo-text">
                   Falda negra con tirantes
                  </div></center>
                </div>
              </div>
              
              <!-- Repite estos bloques para las demás fotos -->

              <div class="col-md-4">
                <div class="card photo-card">
                  <center><img src="https://i.pinimg.com/564x/ed/a5/16/eda516e6fc50033bb146a48ef9f36490.jpg"></center>
                  <div class="card-img-overlay">
                    <a href="https://www.ejemplo.com/detalles-foto2" class="btn btn-overlay" target="_blank"></a>
                  </div>
                 <center> <div class="photo-text">
                    Short blanco con moño    
                  </div></center>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card photo-card">
                  <center><img src="https://i.pinimg.com/236x/8d/fc/ba/8dfcba9d73903067de1837853b752f37.jpg"></center>
                  <div class="card-img-overlay">
                    <a href="https://www.ejemplo.com/detalles-foto2" class="btn btn-overlay" target="_blank"></a>
                  </div>
                 <center> <div class="photo-text">
                    Shorth mezclilla con moño  
                    <br>

                  </div></center>
                </div>
              </div>


              <div class="col-md-4">
                <div class="card photo-card">
                  <center><img src="https://i.pinimg.com/236x/d6/83/bb/d683bbf1235fc61acdfd25942f6b85c6.jpg"></center>
                  <div class="card-img-overlay">
                    <a href="https://www.ejemplo.com/detalles-foto2" class="btn btn-overlay" target="_blank"></a>
                  </div>
                 <center> <div class="photo-text">
                    Shorth verde con moño 
                  </div></center>
                </div>
              </div>

              <!-----xddddddd 3 -->

              <div class="col-md-4">
                <div class="card photo-card">
                  <center><img src="https://i.pinimg.com/236x/4c/7a/74/4c7a749cb9993a3dc7048ad830352926.jpg"></center>
                  <div class="card-img-overlay">
                    <a href="https://www.ejemplo.com/detalles-foto3" class="btn btn-overlay" target="_blank"></a>
                  </div>
                  <center><div class="photo-text">
                    Falda con cordones laterales
                  </div></center>
                </div>
              </div>
              
              <!-- Repite estos bloques para las demás fotos -->

              <div class="col-md-4">
                <div class="card photo-card">
                  <center><img src="https://i.pinimg.com/236x/6a/ce/46/6ace46cfc5faebd5f58ec435d3e686af.jpg"></center>
                  <div class="card-img-overlay">
                    <a href="https://www.ejemplo.com/detalles-foto2" class="btn btn-overlay" target="_blank"></a>
                  </div>
                 <center> <div class="photo-text">
                    Falda negra con cordon delantero
                  </div></center>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card photo-card">
                  <center><img src="https://i.pinimg.com/564x/97/bb/b4/97bbb4189d63e3d55b23c074b7b4fd24.jpg"></center>
                  <div class="card-img-overlay">
                    <a href="https://www.ejemplo.com/detalles-foto2" class="btn btn-overlay" target="_blank"></a>
                  </div>
                 <center> <div class="photo-text">
                    Falda verde con cordon delantero
                    <br>

                  </div></center>
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
        <div class="copyright py-4 text-center text-white" style="background-color: black;">
            <div class="container"><small>Copyright &copy; LOVERS 2023</small></div>
        </div>








          
          <!-- Enlace al CDN de jQuery y Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
          
          <script>
            function mostrarDetalles(foto) {
              alert('Detalles de ' + foto);
              // Puedes personalizar esta función para mostrar los detalles que desees.
            }
          </script>

<script src="js/bootstrap.min.js"></script>
    
</body>
</html>