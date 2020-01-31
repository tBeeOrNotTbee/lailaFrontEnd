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
            <h1>TIEMPOS Y COSTOS DE ENVÍO</h1>
          </div>
          <?php require_once('../partials/navfooter.php'); ?>
          <div class="col-12 col-md-7 py-4">
            <p class="monserrat grey cero7em"><b class="black">Todas las opciones de envío dentro de Argentina son sin cargo. </b> <br><br>
              Los envíos al exterior superiores a IMPORTE  PRETENDIDO U$D (dólares estadounidenses) son sin cargo.
              En caso de haber solicitado un pedido por una compra inferior a ese importe, deberás comunicarte al ….TEL  O escribirnos al …..MAIL de lunes a viernes de HORARIO DE ATENCION para que se te cotice el envío y los cargos aduaneros</p> <br><br>
              <p class="monserrat grey cero7em"> <b class="black">Detallamos debajo, opciones de envío:</b> </p>
              <div class="col-12 table-responsive cero7em">
                <table class="table">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">ENVIOS NACIONALES</th>
                      <th scope="col">TIEMPOS DE ENTREGA</th>
                      <th scope="col">COSTOS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Envío simple a domicilio en Capital Federal</th>
                      <td>5 a 7 días hábiles</td>
                      <td>$ 0</td>
                    </tr>
                    <tr>
                      <th scope="row">Envío simple a domicilio en Prov. de Bs. As.</th>
                      <td>5 a 7 días hábiles</td>
                      <td>$ 0</td>
                    </tr>
                    <tr>
                      <th scope="row">Envío simple a domicilio interior del país</th>
                      <td>5 a 7 días hábiles</td>
                      <td>$ 0</td>
                    </tr>
                    <tr>
                      <th scope="row">Retiro en sucural OCA</th>
                      <td>5 a 7 días hábiles</td>
                      <td>$ 0</td>
                    </tr>
                    <tr>
                      <th scope="row">Retiro en Showroom</th>
                      <td>5 a 7 días hábiles</td>
                      <td>$ 0</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-12 table-responsive">
                <table class="table">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">ENVIOS INTERNACIONALES</th>
                      <th scope="col">TIEMPOS DE ENTREGA</th>
                      <th scope="col">COSTOS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th class="monserrat" scope="row">Envío simple a domicilio en Capital Federal</th>
                      <td class="monserrat">5 a 7 días hábiles</td>
                      <td class="monserrat">$ 0</td>
                    </tr>
                    <tr>
                      <th scope="row">Envío simple a domicilio en Prov. de Bs. As.</th>
                      <td>5 a 7 días hábiles</td>
                      <td>$ 0</td>
                    </tr>
                    <tr>
                      <th scope="row">Envío simple a domicilio interior del país</th>
                      <td>5 a 7 días hábiles</td>
                      <td>$ 0</td>
                    </tr>
                    <tr>
                      <th scope="row">Retiro en sucural OCA</th>
                      <td>5 a 7 días hábiles</td>
                      <td>$ 0</td>
                    </tr>
                  </tbody>
                </table>
              </div>
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
