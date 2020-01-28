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
                <?php require_once('../partials/advert.php'); ?>


                <!-- CONTENIDO PRINCIPAL -->
                <div class="row  container-fluid overflow-hidden d-flex justify-content-start mt-7 pb-3 mb-3">

                  <div class="col-lg-1 container-fluid mx-0 align-items-start d-block float-lg-left">
                    <img class="w100 pb-3" src="https://via.placeholder.com/100" alt="sideProduct">
                    <img class="w100 pb-3" src="https://via.placeholder.com/100" alt="sideProduct">
                    <img class="w100 pb-3" src="https://via.placeholder.com/100" alt="sideProduct">
                    <img class="w100 pb-3" src="https://via.placeholder.com/100" alt="sideProduct">
                  </div>

                  <div class="col-lg-6 mx-0 overflow-hidden d-block float-lg-left">
                    <img class="w-100 p-3" src="https://via.placeholder.com/500" alt="product">
                  </div>

                  <div class="col-lg-4   mx-0 d-block float-lg-left">

                    <div class="row d-flex">

                      <div class=" ml-0 pl-0 pr-3">

                        <h2>Modelo Feliciana</h2>
                        <h3>$8000</h3>
                        <p>Capellada: Cabretilla color nude con detalles en cobre rosado con agarre de cordón al tono.</p>
                        <p>Forro: De piel muy suave color rosado</p>
                        <p>Altura de taco: 4.5cm</p>
                        <p>Cómoda plantilla de armado</p>
                        <p>Suela: En cuero pintada al tono</p>

                      </div>

                    </div>
                    <!-- Grilla de talles boba temporal -->
                    <div class="row">

                      <div class=" w100 ml-0 pl-0 pr-3">
                        <h3>Selecciona talle</h3>
                        <img class="w100" src="https://via.placeholder.com/150" alt="grilla de talles">
                      </div>

                    </div>
                    <div class="row">

                    <div class="col-lg-12">
                        <h5>COLORES DISPONIBLES</h5>
                        <div class="row d-flex justify-content-around">
                            <div class="show-color">
                                <div class="w100" style="background-color: blue"></div>
                            </div>
                        </div>

                      </div>
                    </div>
                    <div class="row d-flex w-100">
                      <!-- AGREGAR ICONOS todo-->
                      <div class="col-6">
                        <h3>GUIA DE TALLES</h3>
                      </div>
                      <div class="col-6">
                        <h3>COMPRAR</h3>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        Envíos y devoluciones sin cargo
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
