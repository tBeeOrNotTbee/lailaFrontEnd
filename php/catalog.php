<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/lailaStyle.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/catalog.css">
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

            <?php require_once('../partials/nav.php'); ?>

            <div class="offset-1 col-11 main-content noPad">
                <div class="container-fluid">
                    <!-- Contenido Principal -->
                    <?php require_once('../partials/advert.php'); ?>

                    <div class="row catalog-row">
                        <div class="col-6 d-flex flex-column justify-content-center">
                            <div class="catalog-sub-container">
                                <h2 class="playfair rosa catalog-sub">Say <span class="think-pink">hello</span><br>
                                    to your new favourites</h2>
                            </div>
                            <div id="product2L1" class="col-8 card border-0 rounded-0 thumbnail-big">
                                <div class="p-3">
                                    <div class="img-catalog"></div>
                                </div>
                                <div class="row d-flex justify-content-end" style="padding: 0 1.9rem;">
                                    <i class="far fa-heart" style="margin-right: 0!important"></i>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title roboto-light black thumbnail-title">Nombre Feliciana</h5>
                                    <p class="card-text roboto black thumbnail-price">$10.000</p>
                                    <div class="row d-flex justify-content-around">
                                        <div class="show-color">
                                            <div class="w100" style="background-color: blue"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 h100x">
                            <div class="container-fluid h100x">
                                <div class="row h100x d-flex align-content-between flex-wrap">

                                    <div id="product1" class="col-6 card border-0 rounded-0">
                                        <div class="p-3">
                                            <!-- THUMBNAIL CAROUSEL -->
                                            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-pause="true" data-interval="500" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_1.jpg" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_2.jpg" alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_3.jpg" alt="Third slide">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-end" style="padding: 0 1.9rem;">
                                            <i class="far fa-heart" style="margin-right: 0!important"></i>
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="card-title roboto-light black thumbnail-title">Nombre Feliciana</h5>
                                            <p class="card-text roboto black thumbnail-price">$10.000</p>
                                            <div class="row d-flex justify-content-around">
                                                <div class="show-color">
                                                    <div class="w100" style="background-color: blue"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="product2" class="col-6 card border-0 rounded-0">
                                        <div class="p-3">
                                            <!-- THUMBNAIL CAROUSEL -->
                                            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-pause="true" data-interval="500" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_1.jpg" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_2.jpg" alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_3.jpg" alt="Third slide">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-end" style="padding: 0 1.9rem;">
                                            <i class="far fa-heart" style="margin-right: 0!important"></i>
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="card-title roboto-light black thumbnail-title">Nombre Feliciana</h5>
                                            <p class="card-text roboto black thumbnail-price">$10.000</p>
                                            <div class="row d-flex justify-content-around">
                                                <div class="show-color">
                                                    <div class="w100" style="background-color: blue"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="product3" class="col-6 card border-0 rounded-0">
                                        <div class="p-3">
                                            <!-- THUMBNAIL CAROUSEL -->
                                            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-pause="true" data-interval="500" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_1.jpg" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_2.jpg" alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_3.jpg" alt="Third slide">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-end" style="padding: 0 1.9rem;">
                                            <i class="far fa-heart" style="margin-right: 0!important"></i>
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="card-title roboto-light black thumbnail-title">Nombre Feliciana</h5>
                                            <p class="card-text roboto black thumbnail-price">$10.000</p>
                                            <div class="row d-flex justify-content-around">
                                                <div class="show-color">
                                                    <div class="w100" style="background-color: blue"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="product4" class="col-6 card border-0 rounded-0">
                                        <div class="p-3">
                                            <!-- THUMBNAIL CAROUSEL -->
                                            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-pause="true" data-interval="500" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_1.jpg" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_2.jpg" alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_3.jpg" alt="Third slide">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-end" style="padding: 0 1.9rem;">
                                            <i class="far fa-heart" style="margin-right: 0!important"></i>
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="card-title roboto-light black thumbnail-title">Nombre Feliciana</h5>
                                            <p class="card-text roboto black thumbnail-price">$10.000</p>
                                            <div class="row d-flex justify-content-around">
                                                <div class="show-color">
                                                    <div class="w100" style="background-color: blue"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- SEGUNDA FILA DE CATALOGO -->



                    <div class="row catalog-row">
                        <div class="col-6 h100x">
                            <div class="container-fluid h100x">
                                <div class="row h100x d-flex align-content-between flex-wrap">

                                    <div id="product1" class="col-6 card border-0 rounded-0">
                                        <div class="p-3">
                                            <!-- THUMBNAIL CAROUSEL -->
                                            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-pause="true" data-interval="500" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_1.jpg" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_2.jpg" alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_3.jpg" alt="Third slide">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-end" style="padding: 0 1.9rem;">
                                            <i class="far fa-heart" style="margin-right: 0!important"></i>
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="card-title roboto-light black thumbnail-title">Nombre Feliciana</h5>
                                            <p class="card-text roboto black thumbnail-price">$10.000</p>
                                            <div class="row d-flex justify-content-around">
                                                <div class="show-color">
                                                    <div class="w100" style="background-color: blue"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="product2" class="col-6 card border-0 rounded-0">
                                        <div class="p-3">
                                            <!-- THUMBNAIL CAROUSEL -->
                                            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-pause="true" data-interval="500" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_1.jpg" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_2.jpg" alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_3.jpg" alt="Third slide">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-end" style="padding: 0 1.9rem;">
                                            <i class="far fa-heart" style="margin-right: 0!important"></i>
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="card-title roboto-light black thumbnail-title">Nombre Feliciana</h5>
                                            <p class="card-text roboto black thumbnail-price">$10.000</p>
                                            <div class="row d-flex justify-content-around">
                                                <div class="show-color">
                                                    <div class="w100" style="background-color: blue"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="product3" class="col-6 card border-0 rounded-0">
                                        <div class="p-3">
                                            <!-- THUMBNAIL CAROUSEL -->
                                            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-pause="true" data-interval="500" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_1.jpg" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_2.jpg" alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_3.jpg" alt="Third slide">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-end" style="padding: 0 1.9rem;">
                                            <i class="far fa-heart" style="margin-right: 0!important"></i>
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="card-title roboto-light black thumbnail-title">Nombre Feliciana</h5>
                                            <p class="card-text roboto black thumbnail-price">$10.000</p>
                                            <div class="row d-flex justify-content-around">
                                                <div class="show-color">
                                                    <div class="w100" style="background-color: blue"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="product4" class="col-6 card border-0 rounded-0">
                                        <div class="p-3">
                                            <!-- THUMBNAIL CAROUSEL -->
                                            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-pause="true" data-interval="500" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_1.jpg" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_2.jpg" alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item" style="transition: all 0.1s linear;">
                                                        <img class="d-block w-100" src="../img/shoe_3.jpg" alt="Third slide">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-end" style="padding: 0 1.9rem;">
                                            <i class="far fa-heart" style="margin-right: 0!important"></i>
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="card-title roboto-light black thumbnail-title">Nombre Feliciana</h5>
                                            <p class="card-text roboto black thumbnail-price">$10.000</p>
                                            <div class="row d-flex justify-content-around">
                                                <div class="show-color">
                                                    <div class="w100" style="background-color: blue"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-6 d-flex flex-column justify-content-center">
                            <div class="catalog-sub-container">
                                <h2 class="playfair camel catalog-sub">MUST <span class="think-pink">have</span></h2>
                            </div>
                            <div id="product2L1" class="col-8 card border-0 rounded-0 thumbnail-big">
                                <div class="p-3">
                                    <div class="img-catalog"></div>
                                </div>
                                <div class="row d-flex justify-content-end" style="padding: 0 1.9rem;">
                                    <i class="far fa-heart" style="margin-right: 0!important"></i>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title roboto-light black thumbnail-title">Nombre Feliciana</h5>
                                    <p class="card-text roboto black thumbnail-price">$10.000</p>
                                    <div class="row d-flex justify-content-around">
                                        <div class="show-color">
                                            <div class="w100" style="background-color: blue"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row d-flex justify-content-center see-more">
                        <a href="#" class="button-story">ver + productos</a>
                    </div>

                    <?php require_once('../partials/footer.php'); ?>
                </div>
            </div>
        </div>
    </div>


    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/navbar.js"></script>
    <script src="../js/home.js"></script>
    <script src="../js/jquery.instagramFeed.min.js"></script>
    <script src="../js/catalog.js"></script>

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