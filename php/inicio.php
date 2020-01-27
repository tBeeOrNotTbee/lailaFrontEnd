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
    <title>Lila Frank</title>
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

                <div class="row">
                    <div class="col-12 noPad">
                        <div class="carousel slide" data-ride="carousel" interval="0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="d-block w-100 carusel-img c1"></div>
                                </div>
                                <!-- <div class="carousel-item">
                                    <div class="d-block w-100 carusel-img c2"></div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-block w-100 carusel-img c3"></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-7">
                    <div class="col-12 text-center">
                        <h3 class="hastag smooth-stone">#shoesforunconventionalwomen</h3>
                        <p class="monserrat slogan grey">Creemos que las mujeres merecen tener el calzado que <br>
                            desean cuando lo desean, no importa que talla sean.</p>
                    </div>
                </div>

                <div class="row-catalog">
                    <div class="catalog-img-large" style="background-image: url(http://placehold.it/520x605);">
                        <a href="#" class="catalog-text roboto">
                            <span class="inside">sandals</span>
                        </a>
                    </div>
                    <div class="col d-flex flex-colum catalog-colum" style=" height: 605px; flex-direction: column; justify-content: space-between;">
                        <div class="catalog-img-box" style="background-image: url(http://placehold.it/520x605);">
                            <a href="#" class="catalog-text roboto">
                                <span class="inside">stilettos</span>
                            </a>
                        </div>
                        <div class="catalog-img-box" style="background-image: url(http://placehold.it/520x605);">
                            <a href="#" class="catalog-text roboto">
                                <span class="inside">flats</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row-catalog">
                    <div class="catalog-img-box-40" style="background-image: url(http://placehold.it/520x605);">
                        <a href="#" class="catalog-text roboto">
                            <span class="inside">tango</span>
                        </a>
                    </div>
                    <div class="catalog-img-box-55" style="background-image: url(http://placehold.it/520x605);">
                        <a href="#" class="catalog-text roboto">
                            <span class="inside">boots</span>
                        </a>
                    </div>
                </div>


                <section class="row history">
                    <div class="col-6 h80" style="background-image: url(http://placehold.it/520x605);">
                    </div>
                    <div class="col-6 h80 story-text">
                        <h3 class="smooth-stone grey">Historia</h3>
                        <h2 class="monserrat-bold">Estamos motivadas<br>
                            por el <span>deseo y un ideal</span>.</h2>
                        <p class="monserrat grey">Todos los integrantes de este equipo compartimos el
                            deseo de
                            hacerles realidad el sueño a esas mujeres que no pueden adquirir en forma
                            espontánea el calzado que desean. <br><br>
                            Trabajamos para incorporar a esas mujeres a la moda, a que puedan decidir,
                            darles alternativas, ponderarlas.</p>
                        <a href="#" class="button-story">ver historia</a>
                    </div>
                </section>


                <section class="row insta-title d-flex align-items-center">
                    <div class="col-4"><span class="roboto camel">@lailafrankshoes</span></div>
                    <div class="col-4 d-flex justify-content-center">
                        <h3 class="follow-us playfair-black-italic camel"><i class="fab fa-instagram insta-ico"></i>
                            follow us!</h3>
                    </div>
                    <div class="col-4 d-flex justify-content-end"><span class="roboto camel">#ShoesForUnconventionalWomen</span></div>
                </section>
                <div class="row">
                    <div class="insta-feed"></div>
                </div>

                <div class="row justify-content-center" style="clear:both">
                    <div class="col-12 newsletter">
                        <img src="../img/logo.svg" alt="Logo Laila Frank">
                        <h2 class="newsletter-title roboto-condensed grey">Suscribite al newsletter</h2>
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