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