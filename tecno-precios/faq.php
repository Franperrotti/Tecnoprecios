<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/master.css">
    <title>Preguntas Frecuentes</title>
</head>

<body>

    <!-- serchbar -->
    <div id="arriba">
        <img class="imagen_logo" src="img/Logo.png" alt=""> </span>
        <div class="buscar-caja">
            <input type="search" name="buscar" class="buscar-txt" placeholder="Buscar..." />
            <a class="buscar-btn">
                <i class="fas fa-search-dollar"></i>
            </a>
        </div>
        <!-- <span class="imagen_bag" > <a href=""><img src="img/bag.png" alt=""> </a> </span> -->
        <ul calss="log_in">
            <!-- <li>  <a href=""><img src="img/bag.png" alt=""> </a>   </li> -->
            <li class="d-flex">
                <a href="login.php" target="_blank" class="formato btn btn-primary btn-sm ml-auto ">Login</a>
            </li>
            <li class="d-flex">
                <a href="registro.php" target="_blank" class="formato btn btn-primary btn-sm ml-auto ">Registrate</a>
            </li>
        </ul>
        <!-- <img class="imagen_bag" src="img/bag.png" alt="">  -->

    </div>



    <div class="titulo">
        <h1>Preguntas Frecuentes</h1>
    </div>

    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Que metodos de pago hay?
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    Podes pagar con efectivo, credito o debito.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        pregunta 2
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi pariatur accusantium quis commodi veniam rerum. Libero reiciendis inventore omnis amet, suscipit harum numquam ipsam unde, nihil, facere excepturi repudiandae illum. </P>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Pregunta 3
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti doloribus dicta nemo, maxime similique, veritatis provident aut accusantium numquam harum sed nobis? Necessitatibus nisi illum assumenda labore iure nam voluptatum. </p>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Pregunta 4
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti doloribus dicta nemo, maxime similique, veritatis provident aut accusantium numquam harum sed nobis? Necessitatibus nisi illum assumenda labore iure nam voluptatum. </p>
                    </div>
                </div>
            </div>


            <!-- Footer -->


            <footer class="page-footer font-small indigo">

                <!-- Footer Links -->

                <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">


                <!--<div class="col-lg-2 col-md-12 mb-4">
                     <img src="img/TecnoLogoBlanco.png" class="img-fluid" alt=""> 
                </div>-->

                <!-- Grid row-->
                <div class="row d-flex text-center justify-content-center mb-md-0 mb-4" id="footerLinks">
                    <!-- ACA PEGUE TODOOOOOO-->
                    <div class="col-md-2 mb-3">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="index.php">INICIO</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 mb-3">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!">PRODUCTOS</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 mb-3">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!">NOSOTROS</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 mb-3">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!">AYUDA</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 mb-3">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!">CONTACTANOS</a>
                        </h6>
                    </div>

                    <!-- Grid column -->

                </div>
                <!-- Grid row-->
                <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

                <!-- Grid row-->
                <div class="row d-flex text-center justify-content-center mb-md-0 mb-4" id="footerIconos">

                    <!-- Grid row-->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-12 py-5">
                            <div class="mb-5 flex-center">

                                <!-- Facebook -->
                                <a class="fb-ic" href="https://facebook.com" target="_blank">
                                    <i class="fab fa-facebook-f fa-lg mr-md-5 mr-3 fa-2x"> </i>
                                </a>
                                <!-- Twitter -->
                                <a class="tw-ic" href="https://twitter.com" target="_blank">
                                    <i class="fab fa-twitter fa-lg mr-md-5 mr-3 fa-2x"> </i>
                                </a>
                                <!--Instagram-->
                                <a class="ins-ic" href="https://instagram.com" target="_blank">
                                    <i class="fab fa-instagram fa-lg mr-md-5 mr-3 fa-2x"> </i>
                                </a>
                            </div>
                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row-->

                </div>
                <!-- Footer Elements -->

                <!-- Copyright -->
                <div class="row d-flex text-center justify-content-center mb-md-0 mb-4" id="footerAll">TECNOPRECIOS 2019
                    <p>All rights reserved</p>
                </div>
            </footer>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>