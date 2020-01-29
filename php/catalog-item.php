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
            <div class="row d-flex">

              <div class="col-12 ml-0 pl-0 pr-3">

                <h2>Modelo Feliciana</h2>
                <h3>$8000</h3>
                <p><b>Capellada:</b> Cabretilla color nude con detalles en cobre rosado con agarre de cordón al tono.</p>
                <p><b>Forro:</b> De piel muy suave color rosado</p>
                <p><b>Altura de taco:</b> 4.5cm</p>
                <p>Cómoda plantilla de armado</p>
                <p><b>Suela:</b> En cuero pintada al tono</p>

              </div>

            </div>
            <!-- Grilla de talles boba temporal -->
            <div class="row">

              <div class=" col-12  ml-0 pl-0 pr-3">
                <h3>Selecciona talle</h3>
                <div class="noPad ml-0 row justify-content-around">
                    <h5 class="col-2 list-group-item border border-dark p-2 pr-0" >31</h5>
                    <h5 class="col-2 list-group-item border border-dark p-2" >32</h5>
                    <h5 class="col-2 list-group-item border border-dark p-2" >33</h5>
                    <h5 class="col-2 list-group-item border border-dark p-2" >34</h5>
                    <h5 class="col-2 list-group-item border border-dark p-2" >35</h5>

                    <h5 class="col-2 list-group-item border border-dark p-2" >36</h5>
                    <h5 class="col-2 list-group-item border border-dark p-2" >37</h5>
                    <h5 class="col-2 list-group-item border border-dark p-2" >38</h5>
                    <h5 class="col-2 list-group-item border border-dark p-2" >39</h5>
                    <h5 class="col-2 list-group-item border border-dark p-2" >40</h5>

                    <h5 class="col-2 list-group-item border border-dark p-2" >41</h5>
                    <h5 class="col-2 list-group-item border border-dark p-2" >42</h5>
                    <h5 class="col-2 list-group-item border border-dark p-2" >43</h5>
                    <h5 class="col-2 list-group-item border border-dark p-2" >44</h5>
                    <h5 class="col-2 list-group-item border border-dark p-2" >45</h5>

                </div>
              </div>

            </div>
            <div class="row">

              <div class="col-12">
                <h5>COLORES DISPONIBLES</h5>
                <div class="row d-flex justify-content-around">
                  <div class="show-color">
                    <div class="w100" style="background-color: blue"></div>
                  </div>
                </div>

              </div>
            </div>
            <div class="row d-flex w-100">
              <!-- AGREGAR ICONOS todo-->
              <div class="col-6">
                <h3>GUIA DE TALLES</h3>
              </div>
              <div class="col-6">
                <h3>COMPRAR</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                Envíos y devoluciones sin cargo
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
