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
        <div class="row mt-7 pb-3 mb-3">

          <div class="col-10 col-lg-7 mx-auto mb-5">
            <div class="sp-loading">
              <div class="spinner-border text-secondary" role="status">
                <span class="sr-only">Loading...</span>
              </div>
            </div>
            <div class="sp-wrap gallery w100">
              <a href="../img/shoe_1.jpg"><img class="w100" src="../img/shoe_1.jpg" alt=""></a>
              <!-- <a href="../img/shoe_2.jpg"><img class="w100" src="../img/shoe_2.jpg" alt=""></a> -->
            </div>
          </div>
          <br class="d-md-none">

          <div class="col-10 col-lg-5 mx-auto">
            <div class="row ">

              <div class="col-12 ml-0 mt-4 pl-0 pr-3">

                <h3 id="modelo" class="col text-nowrap monserrat-bold grey2 mt-3 font2.5em">MODELO FELICIANA</h2>
                <h3 id="precio" class="col monserrat grey2 my-3 font2.5em">$8000</h3>
                <p class="grey monserrat ml-3"><span class="black" > Capellada:</span> Cabretilla color nude con detalles en cobre rosado con agarre de cordón al tono.
                <span class="black" >Forro:</span> De piel muy suave color rosado
                <span class="black" >Altura de taco:</span> 4.5cm
                Cómoda plantilla de armado
                <span class="black" >Suela:</span> En cuero pintada al tono</p>

              </div>

            </div>
            <!-- Grilla de talles -->
            <div class="row">

              <div id="grilla" class=" col-12 pr-3">
                <h3 class="my-2 monserrat grey2 font1em">SELECCIONA TALLE</h3>
                <div class=" row mt-3 justify-content-around">
                    <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center" >31</h5>
                    <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center" >32</h5>
                    <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center" >33</h5>
                    <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center" >34</h5>
                    <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center" >35</h5>
                </div>
                <div class="row justify-content-around">
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center" >36</h5>
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center" >37</h5>
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center" >38</h5>
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center" >39</h5>
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center" >40</h5>

                </div>
                <div class="row justify-content-around">
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center" >41</h5>
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center" >42</h5>
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center" >43</h5>
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center" >44</h5>
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center" >45</h5>

                </div>

              </div>

            </div>
            <div class="row mt-3">

              <div class="col-12">
                <h5 class="monserrat grey2 my-3">COLORES DISPONIBLES</h5>
                <div class="row d-flex justify-content-around">
                  <div class="show-color">
                    <div class="w100" style="background-color: grey"></div>
                  </div>
                </div>

              </div>
            </div>
            <div class="row my-3 w-100">
              <!-- AGREGAR ICONOS todo-->
              <div class="col-6 mx-auto col-lg-6 my-3 px-3">
                <h3 id="botonTalles" class="monserrat grey2 mx-auto" >GUIA DE TALLES</h3>
              </div>
              <div class="col-12 mx-auto col-lg-6 my-3 px-3">
                <h3 id="botonCompra" class="monserrat grey2">COMPRAR</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-12 my-4 ">
                <p class="monserrat grey2"> Envíos y devoluciones <b>SIN CARGO</b> </p>
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
