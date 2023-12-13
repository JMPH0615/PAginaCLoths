<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TOPS </title>
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
              background-color: #cceffa;
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-top">
            <a class="navbar-brand" href="login.php">Únete</a>
            <a class="navbar-brand" href="#">Ayuda</a>
        </nav>
    
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php"> FASHION</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.pjp">
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
                            <a class="dropdown-item" href="FALDAS.php"> FALDAS </a>
                            <a class="dropdown-item" href="PANTALONES.php"> PANTALONES </a> 
                        </div>
                    </li>
                    
    
                    
    
                </ul>
                
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
            <h2 class="text-center mb-4"> TOPS</h2>
            <div class="row">
              <!-- Espacios para las fotos -->
              <div class="col-md-4">
                <div class="card photo-card">
                  <center><img src="https://i.pinimg.com/236x/a4/2f/b9/a42fb9daa7f893e691b7ad71955d19d8.jpg" alt="Foto 1" class="card-img-top"> </center>
                  <div class="card-img-overlay">
                    <a href="tops/top1.php" class="btn btn-overlay" target="_blank"></a>
                  </div>
                  <center><div class="photo-text">
                    	
                Top color negro con clanco y mariposas  
                  </div> </center>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card photo-card">
                  <center><img src="https://i.pinimg.com/236x/dc/e9/98/dce99870f69a9acfdb267ff45375061b.jpg" alt="Foto 2" class="card-img-top"></center>
                  <div class="card-img-overlay">
                    <a href="tops/top2.php" class="btn btn-overlay" target="_blank"></a>
                  </div>
                 <center> <div class="photo-text">
                    Top negro con tirantes de cadenas 
                  </div></center>
                </div>
              </div>
              
              <!-- Repite estos bloques para las demás fotos -->
              <!-- Ejemplo de un tercer espacio -->
              <div class="col-md-4">
                <div class="card photo-card">
                  <center><img src="https://i.pinimg.com/236x/8a/81/c0/8a81c030d6139733c09e95297a5a9a02.jpg" alt="Foto 3" class="card-img-top"></center>
                  <div class="card-img-overlay">
                    <a href="tops/top3.php" class="btn btn-overlay" target="_blank"></a>
                  </div>
                  <center><div class="photo-text">
                   Top sin mangas de colores azul a cuadros
                  </div></center>
                </div>
              </div>
              
              <!-- Repite estos bloques para las demás fotos -->

              <div class="col-md-4">
                <div class="card photo-card">
                  <center><img src="https://i.pinimg.com/564x/e5/ce/d7/e5ced7a2b9ba790f60fa832a444f309f.jpg"></center>
                  <div class="card-img-overlay">
                    <a href="tops/top4.php" class="btn btn-overlay" target="_blank"></a>
                  </div>
                 <center> <div class="photo-text">
                    Top blanco con mangas    
                  </div></center>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card photo-card">
                  <center><img src="https://i.pinimg.com/236x/50/d5/9d/50d59d9e13e79410e2261b9b32ebe830.jpg"></center>
                  <div class="card-img-overlay">
                    <a href="tops/top5.php" class="btn btn-overlay" target="_blank"></a>
                  </div>
                 <center> <div class="photo-text">
                    Top negro con tirantes  
                    <br>

                  </div></center>
                </div>
              </div>


              <div class="col-md-4">
                <div class="card photo-card">
                  <center><img src="https://i.pinimg.com/236x/4c/6a/d8/4c6ad87aed315f162e3b6d1c9807cac6.jpg"></center>
                  <div class="card-img-overlay">
                    <a href="tops/top6.php" class="btn btn-overlay" target="_blank"></a>
                  </div>
                 <center> <div class="photo-text">
                    Top blanco con tirantes 
                  </div></center>
                </div>
              </div>

              <!-----xddddddd 3 -->

              <div class="col-md-4">
                <div class="card photo-card">
                  <center><img src="https://i.pinimg.com/564x/cf/b9/50/cfb95023c8c3c5b7d7f1be33ac9e2a32.jpg"></center>
                  <div class="card-img-overlay">
                    <a href="tops/top7.php" class="btn btn-overlay" target="_blank"></a>
                  </div>
                  <center><div class="photo-text">
                    Top verde floreado
                  </div></center>
                </div>
              </div>
              
              <!-- Repite estos bloques para las demás fotos -->

              <div class="col-md-4">
                <div class="card photo-card">
                  <center><img src="https://i.pinimg.com/236x/e6/1c/26/e61c260cbff2632e413423e396ab94ee.jpg"></center>
                  <div class="card-img-overlay">
                    <a href="tops/top8.php" class="btn btn-overlay" target="_blank"></a>
                  </div>
                 <center> <div class="photo-text">
                    Top café con tirantes  
                  </div></center>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card photo-card">
                  <center><img src="https://i.pinimg.com/236x/bb/60/08/bb6008242a5878ad118f71a06f6c21ce.jpg"></center>
                  <div class="card-img-overlay">
                    <a href="tops/top9.php" class="btn btn-overlay" target="_blank"></a>
                  </div>
                 <center> <div class="photo-text">
                    Top color rosa
                    <br>

                  </div></center>
                </div>
              </div>


              <div class="col-md-4">
                <div class="card photo-card">
                  <center><img src="https://i.pinimg.com/236x/db/fb/e2/dbfbe2b88d00527609d04b21cd0b4826.jpg"></center>
                  <div class="card-img-overlay">
                    <a href="tops/top10.php" class="btn btn-overlay" target="_blank">s</a>
                  </div>
                 <center> <div class="photo-text">
                    Top manga larga color morado
                  </div></center>
                </div>
              </div>


              <div class="col-md-4">
                <div class="card photo-card">
                  <center><img src="https://i.pinimg.com/236x/51/07/d5/5107d5823870bcdb0170fa82fa528071.jpg"></center>
                  <div class="card-img-overlay">
                    <a href="tops/top11.php" class="btn btn-overlay" target="_blank"></a>
                  </div>
                 <center> <div class="photo-text">
                    Top manga corta color rojo
                    <br>

                  </div></center>
                </div>
              </div>


              <div class="col-md-4">
                <div class="card photo-card">
                  <center><img src="https://i.pinimg.com/236x/f0/48/cb/f048cb5dfb142a21873568a27d67446d.jpg"></center>
                  <div class="card-img-overlay">
                    <a href="tops/top12.php" class="btn btn-overlay" target="_blank"></a>
                  </div>
                 <center> <div class="photo-text">
                    Top manga larga color blanco        
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