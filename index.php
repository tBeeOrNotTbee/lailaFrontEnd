<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/lailaStyle.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts.css">
    <title>Lila Frank</title>
</head>

<body style="max-width: 100vw;">
    <div class="container-fluid">

        <!-- NAVBAR FULLSCREEN -->
        <!-- <div id="nav" class="container-fluid noPad contenedorAside h-100">
            <div class="row">
                <div class="col-xs-10 col-md-8 alto fondoCrema">
                    <div class="container">
                        <div class="row d-flex justify-content-end">
                            <div class="col-2 p-3 d-flex justify-content-end">
                                <div class="wrapper">
                                    <a class="close-button" onclick="closeNav()">
                                        <div class="in">
                                            <div class="close-button-block"></div>
                                            <div class="close-button-block"></div>
                                        </div>
                                        <div class="out">
                                            <div class="close-button-block"></div>
                                            <div class="close-button-block"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="backnav" class="col-sx-2 col-md-4 h100 noPad" href="javascript:void(0)" onclick="closeNav()"></div>
            </div>
        </div> -->


        <div class="row">

            <?php require_once('partials/nav.php'); ?>

            <div class="offset-1 col-11 main-content noPad">
                <!-- Contenido Principal -->
                <div class="container-fluid">
                    <?php require_once('partials/advert.php'); ?>

                    <div class="row">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 carusel-img c1" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 carusel-img c2" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 carusel-img c3" alt="Third slide">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center">
                            <h3 class="hastag think-pink">#ShoesForUnconventionalWomen</h3>
                            <p class="monserrat slogan">Creemos que las mujeres merecen tener el calzado que <br>
                                desean cuando lo desean, no importa que talla sean.</p>
                        </div>
                    </div>

                    <div class="row-catalog">
                        <div class="catalog-img-large" style="background-image: url(http://placehold.it/520x605);">
                            <a href="#" class="catalog-text roboto">
                                <span class="inside">sandals</span>
                            </a>
                        </div>
                        <div class="col d-flex flex-colum catalog-colum"
                            style=" height: 605px; flex-direction: column; justify-content: space-between;">
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
                            <h3 class="think-pink">Historia</h3>
                            <h2 class="monserrat-bold">Estamos motivadas<br>
                                por el <span>deseo y un ideal</span>.</h2>
                            <p class="monserrat">Todos los integrantes de este equipo compartimos el
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
                        <div class="col-4 d-flex justify-content-end"><span
                                class="roboto camel">#ShoesForUnconventionalWomen</span></div>
                    </section>
                    <div class="row">
                        <div class="insta-feed"></div>
                    </div>

                    <div class="row justify-content-center" style="clear:both">
                        <div class="col-12 newsletter">
                            <img src="img/" alt="Logo Laila Frank">
                            <h2 class="newsletter-title roboto-condensed">Suscribite al newsletter</h2>
                            <div class="newsletter-input">
                                <input class="input-line" type="text" class="form-control"
                                    placeholder="Ingresá tu email" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="button-line roboto-light" type="button">Ok</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php require_once('partials/footer.php'); ?>
                    </dicv>
                </div>
            </div>
        </div>


        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/navbar.js"></script>
        <script src="js/home.js"></script>
        <script src="js/jquery.instagramFeed.min.js"></script>

        <script type="text/javascript">
            (function ($) {
                $(window).on('load', function () {
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