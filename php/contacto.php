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
                  <div class="d-none d-lg-block col-lg-2">

                  </div>
                  <div class="col-8 col-lg-4 mx-auto p-5 mb-3">
                    <h1 id="contacto-titulo" class="hastag smooth-stone px-3">Contactanos</h2>
                  </div>
                </div>
                <div class="row ml-3  ">
                  <div class="col-12 col-md-4 text-center mt-3">
                      <i class="fas fa-map-marker-alt contacto-color"></i>
                      <h2 class="contacto-subtitulo" >DOMICILIO</h2>
                      <p class="grey" >3 de Febrero 1930<br>Planta baja E</p>
                  </div>
                  <div class="col-12 col-md-4 text-center mt-3">
                      <i class="fas fa-phone-alt contacto-color"></i>
                      <h2 class="contacto-subtitulo" >TELÉFONO</h2>
                      <p class="grey" >+5411 - 4788 2483</p>
                  </div>
                  <div class="col-12 col-md-4 text-center mt-3">
                      <i class="far fa-envelope contacto-color"></i>
                      <h2 class="contacto-subtitulo" >MAIL</h2>
                      <p class="grey" >shoes@lailafrank.com</p>
                  </div>
                </div>
                <div class="row mx-auto mb-4 p-3">

                  <form class="form-row mx-auto col-lg-10" method="post">
                    <div class="form-row col-lg-12">
                      <div class="form-group col-12 col-md-6">
                        <input type="text" class="form-control" id="inputNombre" placeholder="NOMBRE">
                      </div>
                      <div class="form-group col-12 col-md-6">
                        <input type="text" class="form-control" id="inputPassword4" placeholder="APELLIDO">
                      </div>
                    </div>
                    <div class="form-row col-lg-12">
                      <div class="form-group col-12 col-md-6">
                        <input type="email" class="form-control" id="inputEmail" placeholder="EMAIL">
                      </div>
                      <div class="form-group col-12 col-md-6">
                        <input type="tel" class="form-control" id="inputTelefono" placeholder="TELEFONO">
                      </div>
                    </div>

                    <div class="form-row col-lg-12">
                      <div class="form-group col-12 col-md-6">
                        <label for="tema">Elegí tu tema</label>
                        <input type="text" class="form-control" id="tema">
                      </div>
                      <div class="form-group col-12 col-md-6">
                        <label for="estadoPedido">Tipo de consulta</label>
                        <select id="estadoPedido" class="form-control custom-select">
                          <option>Estado de mi pedido</option>
                          <option>...</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-row col-lg-12 ">
                      <label for="exampleFormControlTextarea1">Mensaje</label>
                      <textarea class="form-control" id="areaMensaje" rows="10"></textarea>
                    </div>
                    <div class="form-row col-8 mx-auto">
                      <button type="submit" class="btn btn-primary">ENVIAR</button>
                    </div>
                  </form>

                </div>
                <section class="row mt-7 insta-title d-flex align-items-center">
                  <div class="d-none d-md-block col-md-4"><span class="roboto camel">@lailafrankshoes</span></div>
                  <div class="col-12 col-md-4 d-flex justify-content-center">
                      <h3 class="follow-us playfair-black-italic camel"><i class="fab fa-instagram insta-ico"></i>
                          follow us!</h3>
                  </div>
                  <div class="col-12 col-md-4 d-flex justify-content-center justify-content-md-end">
                      <span class="roboto camel">#ShoesForUnconventionalWomen</span>
                  </div>
                </section>
                <div class="row">
                    <div class="d-none d-md-block insta-feed"></div>
                    <div class="d-block d-md-none insta-feed2"></div>
                </div>

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

    <!-- <script type="text/javascript">
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
    </script> -->
</body>

</html>
