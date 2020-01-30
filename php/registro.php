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


        <!-- CONTENIDO PRINCIPAL -->

        <div class="container mb-5 mt-5">
          <div class="d-flex justify-content-center">

            <div class="col-md-4">
              <div class="text-center">

                <div class="d-none d-md-block col-12 mb-4">
                  <img src="../img/logo_shop.png" alt="">
                </div>

                <div class="mb-2 monserrat font-weight-bold cero8em"> Creá tu cuenta</div>

                <div class="mb-2">
                  <button class="btn btn-outline-dark rounded-0 pl-5 pr-5 cero7em" type="button" name="button"> <i class="far fa-envelope"></i> INGRESÁ CON TU EMAIL</button>
                </div>

                <div class="card p-4 align-center">
                  <form>
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email">
                    </div>

                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Nombre">
                    </div>

                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Apellido">
                    </div>

                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="DNI">
                    </div>

                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Contraseña">
                    </div>

                    <button type="submit" class="btn button-story rounded-0">Ingresar</button>

                    <div class="w100 d-flex justify-content-end">
                      <span class="mt-3 shop-link"><a href="#" class="shop-card-text monserrat text-uppercase grey2 cero7em" style="font-size: 0.8em">> volver</a></span>
                    </div>

                  </form>
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