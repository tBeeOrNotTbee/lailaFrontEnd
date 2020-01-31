<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/brook.css">
    <link rel="stylesheet" href="../css/lailaStyle.css">
    <link rel="stylesheet" href="../css/catalog.css">
    <title>Laila Frank</title>
</head>

<body>
    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">
        <?php require_once('../partials/navFront.php'); ?>

        <?php require_once('../partials/toolbarFront.php'); ?>

        <!-- MAIN CONTENT -->
        <main class="page-content ml--100 ml_lg--0 ml_md--0 ml_sm--0">
            <!-- Contenido Principal -->
            <div class="container-fluid">

                <div class="row">
                    <div class="d-none d-md-block col-12 m-4 text-center">
                        <img src="../img/logo_shop.png" class="" alt="">
                    </div>
                </div>


                <!-- CONTENIDO PRINCIPAL -->

                <div class="row">
                    <?php require_once('../partials/navShop.php'); ?>


                    <div class="col-12 col-md-7 py-md-5">
                        <div class="container-fluid">

                            <h2 class="text-center monserrat-bold shop-title cero8em">Mis favoritos</h2>

                            <div class="row">

                                <div id="product1" class="col-6 col-md-4 card border-0 rounded-0">
                                    <div class="p-0 p-md-3">
                                        <!-- THUMBNAIL CAROUSEL -->
                                        <div class="shoe-img-preview">
                                            <img src="../img/shoe_1.jpg" class="img-fluid" alt="">
                                            <img src="../img/shoe_2.jpg" class="img-top img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-end" style="padding: 0 1.9rem;">
                                        <i class="far fa-heart" style="margin-right: 0!important"></i>
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title roboto-light black thumbnail-title">Nombre Feliciana</h5>
                                        <p class="card-text roboto black thumbnail-price">$10.000</p>
                                        <div class="row d-flex justify-content-around">
                                            <div class="show-color">
                                                <div class="w100" style="background-color: blue"></div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-link text-uppercase cero7em mt-2">x Eliminar</button>
                                    </div>




                                </div>

                                <div id="product1" class="col-6 col-md-4 card border-0 rounded-0">
                                    <div class="p-0 p-md-3">
                                        <!-- THUMBNAIL CAROUSEL -->
                                        <div class="shoe-img-preview">
                                            <img src="../img/shoe_1.jpg" class="img-fluid" alt="">
                                            <img src="../img/shoe_2.jpg" class="img-top img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-end" style="padding: 0 1.9rem;">
                                        <i class="far fa-heart" style="margin-right: 0!important"></i>
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title roboto-light black thumbnail-title">Nombre Feliciana</h5>
                                        <p class="card-text roboto black thumbnail-price">$10.000</p>
                                        <div class="row d-flex justify-content-around">
                                            <div class="show-color">
                                                <div class="w100" style="background-color: blue"></div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-link text-uppercase cero7em mt-2">x Eliminar</button>
                                    </div>
                                </div>

                            </div>

                            <div class="w100 d-flex justify-content-between mt-5">
                                <span class="mt-3 shop-link"><a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">> volver</a></span>
                                <a href="#" class="button-story m-0">Compartir favoritos</a>
                            </div>

                        </div>
                    </div>
                </div>



                <?php require_once('../partials/footer.php'); ?>
            </div>
        </main>
    </div>


    <!-- <script src="js/modernizr-3.6.0.min.js"></script> -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/home.js"></script>
</body>

</html>