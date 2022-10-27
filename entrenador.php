<?php

session_start();  // se inicia seccion
$nombre = $_SESSION['nombre'];    // almacena el nombre mandado de la seccion en la variable $nombre para ser usado como referencia en la bienvenida

if (isset($_SESSION['nombre'])) {        // verifica si la variable nombre dentro de $_SESSION posee algun valor dentro

    if ($_SESSION['nivel'] == "cliente") {    // verifica si $_SESSION nivel lo compara y depende el usuario restringe 
        // el no poder usar otra pagina que no sea la propia 
        header("Location: cliente.php");
    } else if ($_SESSION['nivel'] == "entrenador") {      // si el nivel que entra en esta pagina es entrenador lo redirige a su pagina

?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>EveryDay Glow</title>
            <!-- font icons -->
            <link rel="stylesheet" href="./assets/vendors/themify-icons/css/themify-icons.css">
            <!-- Bootstrap styles-->
            <link rel="stylesheet" href="./assets/css/info-style.css">
            <link rel="stylesheet" href="./assets/css/user-style.css">
            <link rel="icon" href="./assets/imgs/icon.png">
        </head>

        <body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

            <!-- primera pagina de navegacion del cliente -->
            <nav class="navbar navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="assets/imgs/logo-dark.png" alt="">
                    </a>
                    <div class="socials">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-instagram"></i></a>
                        <a href="#"><i class="ti-youtube"></i></a>
                    </div>
                </div>
            </nav>
            <!-- End primera pagina de navegacion del cliente -->

            <!-- segunda pagina de navegacion del cliente -->
            <nav class="navbar custom-navbar navbar-expand-md navbar-light bg-primary sticky-top">
                <div class="container">
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#miclass">Mi Clase</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#estado">Estadisticas</a>
                            </li>
                        </ul>
                        <div class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="salir.php" class="Cerrar-seccion ml-4 btn btn-primary rounded btn-danger mt-1 btn-sm ">Cerrar Sesion</a>
                            </li>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- End segunda pagina de navegacion del cliente -->

            <div class="header-img">
                <img src="/assets/imgs/Fitcombat-trainer-ui.jpg" alt="">
            </div>

            <!-- end of page header -->
            <div class="blog-media">
                <img src="./assets/imgs/Fitcombat-trainer-ui.jpg" alt="" class="w-100">

            </div>

            <div class="container">
                <hr>
                <div id="miclass" class="page-container">
                    <div class="page-content">
                        <div class="card">
                            <div class="card-header text-center">
                                <h5 class="card-title">FitCombat</h5>
                                <small class="small text-muted">Si tú sabes lo que vales, ve y consigue lo que mereces
                                </small>
                            </div>
                            <div class="card-body">
                                <div class="blog-media">
                                    <img src="./assets/imgs/fitcombat-trainer.jpg" alt="" class="w-100">
                                    <a href="#" class="badge badge-primary">#Miclase</a>
                                </div>
                                <p class="my-3">El fitness es un modo de vivir que te transforma por dentro y por fuera. Es un estilo de vida, un matrimonio entre la buena alimentación (dieta balanceada) y la actividad física (rutina de entrenamiento).
                                    Las personas amantes del mundo fitness, van a disfrutar de una mayor calidad de vida,
                                    mejor salud y van a llegar a una edad avanzada con mucha más fuerza y vitalidad que aquellas personas que siguen una vida sendentaria. Por ello, te recomendamos que te introduzcas en el mundo fitness en cuanto puedas.
                                </p>
                            </div>


                        </div>
                        <hr>



                        <!-- Sidebar -->
                        <div id="estado" class="">
                            <center>
                            <h6 class="sidebar-title section-title mb-4 mt-3">Bienvenid@, <?php echo $nombre ?></h6>
                            <img src="assets/imgs/avatar-4.png" alt="" class="circle-100 mb-3 ">
                            <div class="socials mb-3 mt-2">
                                <a href="javascript:void(0)"><i class="ti-facebook"></i></a>
                                <a href="javascript:void(0)"><i class="ti-instagram"></i></a>
                            </div>
                            </center>
                            
                            <p></p>

                            <h5 class="card-title">Mis Estudiantes</h5>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">apellido</th>
                                        <th scope="col">Peso(kg)</th>
                                        <th scope="col">Altura</th>
                                        <th scope="col">Edad</th>
                                        <th scope="col">Patologia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>60</td>
                                        <td>1,73</td>
                                        <td>27</td>
                                        <td>ninguna</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>89</td>
                                        <td>1,73</td>
                                        <td>27</td>
                                        <td>ninguna</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>74</td>
                                        <td>1,73</td>
                                        <td>27</td>
                                        <td>ninguna</td>
                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
                <h1>Barra de progreso (Estudiantes)</h1>

                <div class="skillbar clearfix " data-percent="20%">
                    <div class="skillbar-title" style="background: #140c54;"><span>Calorias </span></div>
                    <div class="skillbar-bar" style="background: #8bc3fc;"></div>
                    <div class="skill-bar-percent">20%</div>
                </div> <!-- End Skill Bar -->

                <div class="skillbar clearfix " data-percent="25%">
                    <div class="skillbar-title" style="background: #46290b;"><span>Grasa</span></div>
                    <div class="skillbar-bar" style="background: #ffab2c;"></div>
                    <div class="skill-bar-percent">80%</div>
                </div> <!-- End Skill Bar -->

                <div class="skillbar clearfix " data-percent="50%">
                    <div class="skillbar-title" style="background: #182f15;"><span>completados</span></div>
                    <div class="skillbar-bar" style="background: #96f400;"></div>
                    <div class="skill-bar-percent">50%</div>
                </div> <!-- End Skill Bar -->

                <div class="skillbar clearfix " data-percent="40%">
                    <div class="skillbar-title" style="background: #46465e;"><span>Activos</span></div>
                    <div class="skillbar-bar" style="background: #5a68a5;"></div>
                    <div class="skill-bar-percent">40%</div>
                </div> <!-- End Skill Bar -->
                <div id="info" class="instagram-wrapper mt-5">
                    <div class="ig-id">
                        <a href="#">Siguenos @EveryDayGlow en Instagram</a>
                    </div>
                    <a href="javascript:void(0)" class="insta-item">
                        <img src="assets/imgs/insta-1.jpg" alt="" class="w-100">
                        <div class="overlay">
                            <span>
                                <i class="ti-heart"></i> 23
                            </span>
                            <span>
                                <i class="ti-comment"></i> 12
                            </span>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="insta-item">
                        <img src="assets/imgs/insta-2.jpg" alt="" class="w-100">
                        <div class="overlay">
                            <span>
                                <i class="ti-heart"></i> 59
                            </span>
                            <span>
                                <i class="ti-comment"></i> 10
                            </span>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="insta-item">
                        <img src="assets/imgs/insta-3.jpg" alt="" class="w-100">
                        <div class="overlay">
                            <span>
                                <i class="ti-heart"></i> 10
                            </span>
                            <span>
                                <i class="ti-comment"></i> 8
                            </span>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="insta-item">
                        <img src="assets/imgs/insta-4.jpg" alt="" class="w-100">
                        <div class="overlay">
                            <span>
                                <i class="ti-heart"></i> 12
                            </span>
                            <span>
                                <i class="ti-comment"></i> 10
                            </span>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="insta-item">
                        <img src="assets/imgs/insta-5.jpg" alt="" class="w-100">
                        <div class="overlay">
                            <span>
                                <i class="ti-heart"></i> 45
                            </span>
                            <span>
                                <i class="ti-comment"></i> 12
                            </span>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="insta-item">
                        <img src="assets/imgs/insta-6.jpg" alt="" class="w-100">
                        <div class="overlay">
                            <span>
                                <i class="ti-heart"></i> 30
                            </span>
                            <span>
                                <i class="ti-comment"></i> 10
                            </span>
                        </div>
                    </a>
                </div>

                <!-- Page Footer -->
                <footer class="page-footer">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-md-3 text-center text-md-left mb-3 mb-md-0">
                                <img src="assets/imgs/logo-dark.png" alt="" class="logo">
                            </div>

                        </div>
                        <p class="border-top mb-0 mt-4 pt-3 small">&copy; <script>
                                document.write(new Date().getFullYear())
                            </script>,EveryDayGlow<a href="#" class="text-muted font-weight-bold" target="_blank"></a> All rights reserved </p>
                    </div>
                </footer>
                <!-- End of Page Footer -->

                <!-- core  -->
                <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
                <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

                <!-- JoeBLog js -->
                <script src="assets/js/joeblog.js"></script>

        </body>

        </html>
<?php
    }
}
?>