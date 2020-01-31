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

                <div class="row">
                    <div class="d-none d-md-block col-12 m-4 text-center">
                        <img src="../img/logo_shop.png" class="" alt="">
                    </div>
                </div>

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
                                            <h5 class="card-title monserrat shop-card-title grey2 cero8em">Información de contacto</h5>
                                            <p class="card-text monserrat shop-card-text grey2 cero7em">Florencia Bonavera</p>
                                            <p class="card-text monserrat shop-card-text grey2 cero7em">florenciabonavera@gmail.com</p>
                                            <hr class="w100">
                                            <div class="w-100 d-flex justify-content-between">
                                                <a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em">> Cambiar contraseña</a>
                                                <a href="shopEditarCuenta.php" class="shop-card-text monserrat text-uppercase grey2 cero7em"><i class="fas fa-pencil-alt"></i> Editar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 mb-4">
                                    <div class="card shop-bk border-0 h100x">
                                        <div class="card-body d-flex flex-column justify-content-around">
                                            <h5 class="card-title monserrat shop-card-title grey2 cero8em">Newsletters</h5>
                                            <p class="card-text monserrat shop-card-text grey2 cero8em">No esta suscripto al boletín</p>
                                            <hr class="w100">
                                            <div class="w-100 d-flex flex-row-reverse">
                                                <a href="shopNewsletter.php" class="shop-card-text monserrat text-uppercase grey2 cero7em"><i class="fas fa-pencil-alt"></i> Editar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-12 mb-4 col-md-6 mb-4">
                                    <div class="card shop-bk border-0 h100x">
                                        <div class="card-body d-flex flex-column justify-content-around">
                                            <h5 class="card-title monserrat shop-card-title grey2 cero8em">Dirección de facturación</h5>
                                            <p class="card-text monserrat shop-card-text grey2 cero8em">No ha establecido una dirección de facturación predeterminada todavía</p>
                                            <hr class="w100">
                                            <div class="w-100 d-flex flex-row-reverse">
                                                <a href="shopMisDirecciones.php" class="shop-card-text monserrat text-uppercase grey2 cero7em"><i class="fas fa-pencil-alt"></i> Editar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 mb-4">
                                    <div class="card shop-bk border-0 h100x">
                                        <div class="card-body d-flex flex-column justify-content-around">
                                            <h5 class="card-title monserrat shop-card-title grey2 cero8em">Dirección de envío predeterminada</h5>
                                            <p class="card-text monserrat shop-card-text grey2 cero8em">No ha establecido una dirección de envío predeterminada todavía</p>
                                            <hr class="w100">
                                            <div class="w-100 d-flex flex-row-reverse">
                                                <a href="shopMisDirecciones.php" class="shop-card-text monserrat text-uppercase grey2 cero7em"><i class="fas fa-pencil-alt"></i> Editar</a>
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
</body>

</html>