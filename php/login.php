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
                    <div class="d-none d-md-block col-12 mt-4 text-center">
                        <img src="../img/logo_shop.png" class="" alt="">
                    </div>
                    <h1 class="d-inline d-md-none roboto-light text-uppercase mx-auto text-center mt-4">Acceso <br> clientes</h1>
                </div>

                <!-- CONTENIDO PRINCIPAL -->
                <div class="row mt-5 mb-5 d-flex justify-content-center">
                    <div class="col-12 col-md-4">

                        <form method="post" action="" class="w-75 w-md-100 mx-auto my-3">
                            <input type="text" class="input-line form-control noBk rounded-0 monserrat cero8em p-0" placeholder="CORREO ELECTRÓNICO" aria-describedby="basic-addon2">
                            <input type="password" class="input-line form-control noBk rounded-0 monserrat cero8em p-0 mt-2" placeholder="CONTRASEÑA" aria-describedby="basic-addon2">
                        </form>

                        <div class="d-flex justify-content-end mt-3 mb-5">
                            <span class="mt-3 shop-link"><a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">¿Olvidaste tu contraseña?</a></span>
                        </div>

                        <div class="d-flex justify-content-center mt-7">
                            <a href="#" class="button-story m-0">Ingresar</a>
                        </div>

                        <div class="d-flex justify-content-center mb-5">
                            <span class="mt-3 shop-link"><a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">¿No tenés cuenta? Registrate acá</a></span>
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