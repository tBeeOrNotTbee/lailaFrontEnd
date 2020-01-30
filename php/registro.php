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

              <div class="form-group">
                <a href="inicio.php"> <img src="../img/logo.png" alt=""> </a>
              </div>

              <div class=""> Creá tu cuenta </div>

              <div class="mb-2">
                <button class="btn btn-outline-dark rounded-0 pl-5 pr-5" type="button" name="button">INGRESÁ CON TU EMAIL</button>
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

                  <button type="submit" class="btn button-story">Ingresar</button>

                  <div class="">
                    <h6> >VOLVER </h6>
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
