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
                <div class="row mt-7 mb-5">
                    <?php require_once('../partials/navShop.php'); ?>


                    <div class="col-12 col-md-7">
                        <div class="container-fluid">
                            <h2 class="monserrat-bold shop-title">Editar información de la cuenta</h2>
                            <p class="monserrat grey2">Mantenga su información de contacto actualizada.</p>

                            <div class="row">

                                <div class="col-12 mb-4 h50 d-flex flex-column justify-content-between">

                                    <form method="post" action="" class="w50">
                                        <input type="text" class="input-line form-control noBk rounded-0 monserrat" placeholder="Florencia" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <input type="text" class="input-line form-control noBk rounded-0 monserrat" placeholder="Bonavera" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <input type="text" class="input-line form-control noBk rounded-0 monserrat" placeholder="DNI 25024532" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    </form>

                                    <div class="w-100 d-flex flex-column shop-links">
                                        <span class="mt-3"><i class="far fa-square"></i> <a href="#" class="shop-card-text monserrat text-uppercase grey2" style="font-size: 0.8em">CAMBIAR CORREO ELECTRONICO</a></span>
                                        <span class="mt-3"><i class="far fa-square"></i> <a href="#" class="shop-card-text monserrat text-uppercase grey2" style="font-size: 0.8em">CAMBIAR CONTRASEÑA</a></span>
                                    </div>

                                    <div class="w50 d-flex justify-content-between">
                                        <span class="mt-3 shop-link"><a href="#" class="shop-card-text monserrat text-uppercase grey2" style="font-size: 0.8em">> volver</a></span>
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