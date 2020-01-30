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


                    <div class="col-12 col-md-7 py-4">
                        <h2 class="monserrat-bold shop-title cero8em text-center text-md-left">Mis compras</h2>
                        <p class="monserrat grey2 cero8em text-center text-md-left">Datos de la compra/ Nro. 5800284197</p>

                        <div class="shop-bk px-3 py-1">
                        <table class="table greyBk cero7em shop-bk moserrat">
                            <thead>
                                <tr>
                                    <th scope="col" class="col-3 border-0"></th>
                                    <th scope="col" class="border-0">Producto</th>
                                    <th scope="col" class="border-0">Cant</th>
                                    <th scope="col" class="border-0">Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row" class="p-0"><img src="../img/shoe_1.jpg" class="col-12 img-fluid p-0 w100" alt=""></td>
                                    <td class="align-middle">Zapato TANGO</td>
                                    <td class="align-middle">1</td>
                                    <td class="align-middle">$2680.00</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <th class="py-1">Subtotal</th>
                                    <td class="py-1">$2680.00</td>
                                </tr>
                                <tr class="mt-0 border-bottom mb-2">
                                    <td class="border-0" colspan="2"></td>
                                    <th class="border-0 py-1">Costo de envío</th>
                                    <td class="border-0 py-1">$00</td>
                                </tr>
                                <tr>
                                    <td class="border-0 w100" colspan="2">&nbsp;</td>
                                    <th colspan="2" class="shop-bk2 border-0 shop-border pr-0 mr-0">TOTAL</th> 
                                    <th colspan="2" class="shop-bk2 border-0 shop-border pl-0 ml-0"> $2680.00</th>
                                </tr>
                            </tbody>
                        </table>
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