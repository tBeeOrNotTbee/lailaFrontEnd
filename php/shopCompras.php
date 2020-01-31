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


                    <div class="col-12 col-md-7 py-4 py-md-5">
                        <h2 class="monserrat-bold shop-title cero8em text-center text-md-left">Mis compras</h2>
                        <p class="monserrat grey2 cero8em text-center text-md-left">Si tenés dudas, comunicate con nosotros vía email a compras@lailafrank.com,
                            ó por teléfono a (011) 49179488</p>

                        <table class="table greyBk cero7em shop-bk moserrat">
                            <thead>
                                <tr>
                                    <th scope="col" class="border-0">Pedido #</th>
                                    <th scope="col" class="border-0">Fecha</th>
                                    <th scope="col" class="border-0 d-none d-md-block">Enviar a</th>
                                    <th scope="col" class="border-0">Total del Pedido</th>
                                    <th scope="col" class="border-0 d-none d-md-block">Estado</th>
                                    <th scope="col" class="border-0"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">5800284197</th>
                                    <td>11/09/19</td>
                                    <td class=" d-none d-md-block">Flor Bonavera</td>
                                    <td>$5650.00</td>
                                    <td class="text-italic d-none d-md-block">Entregado</td>
                                    <td><span class="mt-3 shop-link"><a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">> ver</a></span></td>
                                </tr>
                                <tr>
                                    <th scope="row">5800284197</th>
                                    <td>11/09/19</td>
                                    <td class=" d-none d-md-block">Flor Bonavera</td>
                                    <td>$2680.00</td>
                                    <td class="text-italic d-none d-md-block">Entregado</td>
                                    <td><span class="mt-3 shop-link"><a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">> ver</a></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="w100 mt-7"></div>

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