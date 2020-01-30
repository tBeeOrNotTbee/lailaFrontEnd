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
                <div class="row">
                  <div class="col-12 text-center roboto-condensed grey newsletter-title py-3 my-3 justify-content-center">
                    <h1>CAMBIOS Y DEVOLUCIONES</h1>
                  </div>
                  <?php require_once('../partials/navfooter.php'); ?>

                  <div class="col-12 col-md-7 py-4">
                    <p class="grey monserrat">
                      El cambio de un producto adquirido a través de la página web debe gestionarse dentro de los <b> 15 días calendario siguiente a la fecha de la compra.</b> Los gastos de envío y manejo del producto serán asumidos por <b>Laila Frank</b> <br> <br>
                      Para efectuar el cambio es indispensable que el producto se encuentre en perfecto estado y no presentar indicios de uso, deberá entregarse con sus respectivas etiquetas y empaques. <br> <br>
                      Dicho producto se puede cambiar por talle o por otro producto o podrá quedar el dinero asignado a favor en su cuenta. En el caso en el que ninguno de nuestros calzados llegara a satisfacer sus necesidades, se podrá optar por el reintegro del dinero. <br><br>
                      <b>Los productos en oferta, rebaja o saldo no tienen cambio. </b>
                    </p>
                  </div>
                  <div class="col-12 d-md-none">
                    <div class="row justify-content-center" style="clear:both">
                        <div class="col-12 newsletter">
                            <img src="../img/logoLK.png" alt="Logo Laila Frank">
                            <h2 class="newsletter-title roboto-condensed grey text-center">Suscribite <br class="d-block d-md-none"> al newsletter</h2>
                            <div class="newsletter-input">
                                <input class="input-line" type="text" class="form-control" placeholder="Ingresá tu email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="button-line roboto-light camel" type="button">Ok</button>
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
