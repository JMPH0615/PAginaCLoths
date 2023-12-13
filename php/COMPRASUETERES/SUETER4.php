<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>  Suéter de rayas hombre  </title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


  
        <link rel="icon" type="image/x-icon" href="#" />
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
       
        <link href="css/styles.css" rel="stylesheet" />

        <style type="text/css">
            @keyframes addToCartAnimation {
                0% { transform: scale(1); }
                50% { transform: scale(1.2); }
                100% { transform: scale(1); }
            }
    
            .cart-added {
                animation: addToCartAnimation 0.5s ease-in-out;
            }
        </style>
    </head>

    <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="../../php/index.php"> FASHION </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../../php/PRINCIPALSUETERES.php">INICIO</a></li>
                        
                    </ul>


                     <form class="d-flex">
        <button class="btn btn-outline-dark" type="button" id="carritoBtn" data-bs-toggle="popover" data-bs-placement="bottom">
            <i class="bi-cart-fill me-1"></i>
            Carrito
            <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
        </button>
    </form>

    <div id="carritoPopoverContent" class="d-none">
        Escoge bien tus prendas :0
        <ul id="carritoLista" class="list-group">
            <li class="list-group-item">Tu carrito está vacío</li>
        </ul>
        <div class="text-center mt-3">
            <strong>Total: <span id="totalCarrito">$0.00</span></strong>
        </div>
        <div class="text-center mt-3">
            <a href="CARRITOTODO.html" class="btn btn-success" id="pagarBtn">Pagar</a>
        </div>
    </div>
            </div>
        </nav>



        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="https://i5.walmartimages.com.mx/mg/gm/3pp/asr/904aa4aa-d71c-4166-a6c5-044090f33839.a9709eeae05285934bda91d5fb610a22.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF" alt="..." /></div>
                    <div class="col-md-6">
                      
                        <h1 class="display-5 fw-bolder">   Suéter de rayas hombre   </h1>
                        <div class="fs-5 mb-5">
                            
                            <span>MXN 649</span>
                        </div>
                        <p class="lead">
                            ¡Explora la moda atemporal con nuestro Suéter de Rayas para Hombres! Esta prenda clásica combina estilo y comodidad, ofreciendo un toque distintivo a tu guardarropa. 
                        <br>
                        Nuestro suéter presenta un diseño de rayas que añade un toque moderno y elegante a tu estilo. Las rayas crean un patrón visual interesante que es versátil y atemporal.
                    
                    </p>
                        <div class="d-flex"> 
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="" style="max-width: 3rem" /> 
                            <button class="btn btn-outline-dark flex-shrink-0 agregar-carrito-btn" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Agregar al carrito
                            </button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">¡Esto podria gustarte!</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://m.media-amazon.com/images/I/71YjmWc7L2L._AC_UF894,1000_QL80_.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"> Suéter Casual Para Mantener El Calor Suéter de color liso for hombre de otoño e invierno </h5>
                                    <!-- Product price-->
                                    MXN 649
                                    
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="SUETER2.PHP">VER DETALLES</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            
                            <!-- Product image-->
                            <img class="card-img-top" src="https://i.linio.com/p/796cd81f63d560e44de73a438e21f321-product.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">  Chaqueta De Suéter De Lana Con Cremallera Delgada Para Suéter Hombre s</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    
                                    
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="SUETER3.PHP"> VER DETALLES</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            
                            <!-- Product image-->
                            <img class="card-img-top" src="https://ss251.liverpool.com.mx/xl/1126212164.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">    Suéter Hollister cuello redondo para hombre</h5>
                                    <!-- Product price-->
                                   
                                    MXN 399
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="SUETER8.PHP"> VER DETALLES </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://m.media-amazon.com/images/I/618KleSGkUL.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">  Suéter Casual de Los Hombres Suéter de algodón de manga larga de otoño e invierno for hombre</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    MXN 499
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="SUETER1.PHP"> VER DETALLES </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <script src="js/scripts.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>



    

    <script type="text/javascript">


        $(document).ready(function () {
            $('.agregar-carrito-btn').click(function () {
                // Agrega la clase de animación al hacer clic
                $(this).addClass('cart-added');

                // Elimina la clase después de 0.5 segundos (duración de la animación)
                setTimeout(function () {
                    $('.agregar-carrito-btn').removeClass('cart-added');
                }, 500);
            });
        });
    </script>


   <script type="text/javascript">
        $(document).ready(function () {
            var cantidadEnCarrito = 0;

            
           

            function actualizarCantidadEnCarrito() {
                // Actualiza el contenido del elemento con la clase 'badge'
                $('.badge').text(cantidadEnCarrito);
            }
        });
    </script>

<script type="text/javascript">
        $(document).ready(function () {
            $('#carritoBtn').popover({
                html: true,
                content: function () {
                    // Retorna el contenido del popover (puedes personalizarlo según tus necesidades)
                    return $('#carritoPopoverContent').html();
                }
            });

            var carrito = []; // Array para almacenar los productos en el carrito

            $('.agregar-carrito-btn').click(function () {
                var cantidad = parseInt($('#inputQuantity').val());
                var producto = ' Suéter de rayas hombre '; // Reemplaza con la información del producto
                var precio = 349; // Reemplaza con el precio del producto

                // Agregar el producto al carrito
                carrito.push({ producto: producto, cantidad: cantidad, precio: precio });

                // Actualizar la lista del carrito
                actualizarCarrito();

                // Calcular y actualizar el total del carrito
                var totalCarrito = calcularTotalCarrito();
                $('#totalCarrito').text('$' + totalCarrito.toFixed(2));

                // Actualizar el contador de la animación
                actualizarAnimacionCarrito(carrito.length);
            });

            $('#pagarBtn').click(function () {
                // Aquí puedes agregar la lógica para redirigir al usuario a la página de pago
                // Por ejemplo, window.location.href = 'tu_página_de_pago.html';
                alert('Redirigiendo a la página de pago...');
            });

            function actualizarCarrito() {
                // Limpiar la lista del carrito
                $('#carritoLista').empty();

                // Agregar cada producto al carrito
                carrito.forEach(function (item) {
                    var nuevoElemento = `<li class="list-group-item">${item.cantidad} x ${item.producto} - $${item.precio * item.cantidad}</li>`;
                    $('#carritoLista').append(nuevoElemento);
                });
            }

            function calcularTotalCarrito() {
                var total = 0;

                // Sumar los subtotales de cada producto en el carrito
                carrito.forEach(function (item) {
                    total += item.precio * item.cantidad;
                });

                return total;
            }

            function actualizarAnimacionCarrito(cantidad) {
                $('.carrito-badge').text(cantidad).addClass('animate__animated animate__rubberBand');

                // Quitar la clase de animación después de un tiempo
                setTimeout(function () {
                    $('.carrito-badge').removeClass('animate__animated animate__rubberBand');
                }, 1000); // 1000 milisegundos = 1 segundo
            }
        });
    </script>



    </body>
</html>
