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



                <!-- CONTENIDO PRINCIPAL -->
                <div class="row">
                    <?php require_once('../partials/navShop.php'); ?>


                    <div class="col-12 col-md-7">
                        <div class="container-fluid">
                            <h2 class="text-center monserrat-bold shop-title">Mi cuenta</h2>

                            <div class="row">

                                <div class="col-12 col-md-6 mb-4">
                                    <div class="card shop-bk border-0 h100x">
                                        <div class="card-body d-flex flex-column justify-content-around">
                                            <h5 class="card-title monserrat shop-card-title grey2">Información de contacto</h5>
                                            <p class="card-text monserrat shop-card-text grey2">Florencia Bonavera</p>
                                            <p class="card-text monserrat shop-card-text grey2">florenciabonavera@gmail.com</p>
                                            <hr class="w100">
                                            <div class="w-100 d-flex justify-content-between">
                                                <a href="#" class="shop-card-text monserrat text-uppercase grey2" style="font-size: 0.8em">> Cambiar contraseña</a>
                                                <a href="#" class="shop-card-text monserrat text-uppercase grey2" style="font-size: 0.8em"><i class="fas fa-pencil-alt"></i> Editar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 mb-4">
                                    <div class="card shop-bk border-0 h100x">
                                        <div class="card-body d-flex flex-column justify-content-around">
                                            <h5 class="card-title monserrat shop-card-title grey2">Newsletters</h5>
                                            <p class="card-text monserrat shop-card-text grey2">No esta suscripto al boletín</p>
                                            <hr class="w100">
                                            <div class="w-100 d-flex flex-row-reverse">
                                                <a href="#" class="shop-card-text monserrat text-uppercase grey2" style="font-size: 0.8em"><i class="fas fa-pencil-alt"></i> Editar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-12 mb-4 col-md-6 mb-4">
                                    <div class="card shop-bk border-0 h100x">
                                        <div class="card-body d-flex flex-column justify-content-around">
                                            <h5 class="card-title monserrat shop-card-title grey2">Dirección de facturación</h5>
                                            <p class="card-text monserrat shop-card-text grey2">No ha establecido una dirección de facturación predeterminada todavía</p>
                                            <hr class="w100">
                                            <div class="w-100 d-flex flex-row-reverse">
                                                <a href="#" class="shop-card-text monserrat text-uppercase grey2" style="font-size: 0.8em"><i class="fas fa-pencil-alt"></i> Editar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 mb-4">
                                    <div class="card shop-bk border-0 h100x">
                                        <div class="card-body d-flex flex-column justify-content-around">
                                            <h5 class="card-title monserrat shop-card-title grey2">Dirección de envío predeterminada</h5>
                                            <p class="card-text monserrat shop-card-text grey2">No ha establecido una dirección de envío predeterminada todavía</p>
                                            <hr class="w100">
                                            <div class="w-100 d-flex flex-row-reverse">
                                                <a href="#" class="shop-card-text monserrat text-uppercase grey2" style="font-size: 0.8em"><i class="fas fa-pencil-alt"></i> Editar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
    <script src="../js/jquery.instagramFeed.min.js"></script>

    <script type="text/javascript">
        (function($) {
            $(window).on('load', function() {
                $.instagramFeed({
                    'username': 'lailafrankshoes',
                    'container': ".insta-feed",
                    'display_profile': false,
                    'display_biography': false,
                    'display_gallery': true,
                    'get_raw_json': false,
                    'callback': null,
                    'styling': true,
                    'items': 6,
                    'items_per_row': 6,
                    'margin': 0
                });
            });
        })(jQuery);
    </script>
</body>

</html>