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
                <div class="row mt-7 mb-5">
                    <?php require_once('../partials/navShop.php'); ?>


                    <div class="col-12 col-md-7">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-12 mb-4 h50 d-flex flex-column justify-content-between">
                                    <h2 class="monserrat grey2 text-uppercase font-weight-bolder cero8em">Datos de contacto</h2>
                                    <form method="post" action="" class="w50">
                                        <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" placeholder="Florencia" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" placeholder="Bonavera" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" placeholder="DNI 25024532" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" placeholder="TELEFONO" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    </form>

                                    <h2 class="monserrat grey2 text-uppercase font-weight-bolder cero8em mt-5">Direccion</h2>

                                    <form method="post" action="" class="w50">
                                        <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" placeholder="Florencia" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" placeholder="Bonavera" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" placeholder="DNI 25024532" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em" placeholder="TELEFONO" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    </form>


                                    <div class="w50 d-flex justify-content-between mt-5">
                                        <span class="mt-3 shop-link"><a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">> volver</a></span>
                                        <a href="#" class="button-story m-0">Guardar</a>
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