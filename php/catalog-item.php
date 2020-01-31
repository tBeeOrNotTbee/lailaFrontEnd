<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="../css/all.min.css">
  <link rel="stylesheet" href="../css/fonts.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/smoothproducts.css">
  <link rel="stylesheet" href="../css/brook.css">
  <link rel="stylesheet" href="../css/lailaStyle.css">
  <link rel="stylesheet" href="../css/catalog.css">
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

          <div class="col-10 col-md-7 mx-auto mx-md-0 mb-5 d-none d-md-flex">
            <div class="sp-loading">
              <div class="spinner-border text-secondary" role="status">
                <span class="sr-only">Loading...</span>
              </div>
            </div>
            <div class="sp-wrap gallery m-0">
              <a href="../img/shoe_1.jpg"><img class="w100" src="../img/shoe_1.jpg" alt=""></a>
              <a href="../img/shoe_2.jpg"><img class="w100" src="../img/shoe_2.jpg" alt=""></a>
            </div>
          </div>

          <div class="d-md-none col-10 col-md-7 mx-auto mx-md-0 mb-5 d-flex">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="../img/shoe_1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../img/shoe_2.jpg" alt="Second slide">
                </div>
              </div>
            </div>
          </div>

          <br class="d-md-none">

          <div class="col-10 col-md-4 mx-auto mx-md-0">
            <div class="row">
              <div class="col-12 ml-0 mt-4 mt-md-0 pl-0 pr-3 cero7em">

                <h3 id="modelo" class="col text-nowrap monserrat-bold grey2 catalog-item-title">MODELO FELICIANA</h2>
                  <h3 id="precio" class="col monserrat grey2 my-3 catalog-item-title">$8000</h3>
                  <p class="grey monserrat ml-3 text-center text-md-left"><span class="black"> Capellada:</span> Cabretilla color nude con detalles en cobre rosado con agarre de cordón al tono.
                    <span class="black">Forro:</span> De piel muy suave color rosado
                    <span class="black">Altura de taco:</span> 4.5cm
                    Cómoda plantilla de armado
                    <span class="black">Suela:</span> En cuero pintada al tono</p>

              </div>

            </div>
            <!-- Grilla de talles -->
            <div class="row">

              <div id="grilla" class="col-12 pr-3 px-3">
                <h2 class="my-2 monserrat grey2 catalog-item-title2 text-center text-md-left">SELECCIONA TALLE</h2>
                <div class=" row mt-3 justify-content-around px-3">
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">31</h5>
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">32</h5>
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">33</h5>
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">34</h5>
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">35</h5>
                </div>
                <div class="row justify-content-around px-3">
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">36</h5>
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">37</h5>
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">38</h5>
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">39</h5>
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">40</h5>

                </div>
                <div class="row justify-content-around px-3">
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">41</h5>
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">42</h5>
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">43</h5>
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">44</h5>
                  <h5 class="col-2 monserrat grey2 border border-dark p-2 text-center cero8em">45</h5>

                </div>

              </div>

            </div>
            <div class="row mt-3">

              <div class="col-12">
                <h5 class="monserrat grey2 my-3 catalog-item-title2 text-center text-md-left">COLORES DISPONIBLES</h5>
                <div class="row d-flex justify-content-center justify-content-md-start">
                  <div class="show-color ml-3">
                    <div class="w100" style="background-color: grey"></div>
                  </div>
                </div>

              </div>
            </div>
            <div class="d-none row my-3 d-md-flex flex-column flex-md-row justify-content-center justify-content-md-between px-3">
              <!-- AGREGAR ICONOS todo-->
              <a id="botonTalles" class="monserrat grey2 cero7em" data-toggle="modal" data-target="#tallesModal">GUÍA DE TALLES</a>
              <a class="button-story" href="#">COMPRAR <i class="fas fa-shopping-bag"></i></a>
            </div>
            <div class="d-md-none row my-3 mx-auto mt-5 w-75 d-flex flex-column justify-content-center">
              <!-- AGREGAR ICONOS todo-->
              <a id="botonTalles" class="monserrat grey2 cero7em text-center" data-toggle="modal" data-target="#tallesModal">GUÍA DE TALLES</a>
              <a class="button-story mt-3 text-center" href="#">COMPRAR <i class="fas fa-shopping-bag"></i></a>
            </div>
            <div class="row">
              <div class="col-12 my-4 ">
                <p class="monserrat grey2 cero8em text-center text-md-left"> Envíos y devoluciones <b>SIN CARGO</b> </p>
              </div>
            </div>

          </div>

        </div>

        <?php require_once('../partials/footer.php'); ?>
      </div>
    </main>

  </div>

  <!-- Modal -->
  <div class="modal fade" id="tallesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog rounded-0" style="max-width: 50vw!important" role="document">
      <div class="modal-content rounded-0">
        <div class="modal-header border-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="../img/guia_talles_desk.png" alt="" class="w-100 img-fluid mb-3">
          <p>Los calzados realizados con materiales nobles como el cuero o la cabretilla seden con el uso.</p>
            <p>En cuanto a materiales como el charol, es un material más duro que el anterior, así que si sos un medio punto en un talle, conviene selecciones el talle más alto que calces.</p>
            <p>El calzado stiletto, en punta, suele ser de talle acotado en la misma, para lo cual es bueno puedas optar si sos un medio punto por el talle más alto, para que tu pie se sienta más cómodo.</p>
            <p>No es lo más recomendable, seleccionar el calzado anteriormente mencionado, en lo que se denomina dedo griego (que sería que el segundo dedo del pie es más largo que el primero) dado que el mismo rozara con la punta indefectiblemente al esta estar en ángulo, para comodidad del mismo, seleccionar calzado de punta más bien redonda.</p>
            <p>Si tienes un pie angosto y necesitas algo que te contenga bien el mismo para no descalzarlo sería bueno selecciones calzado que tenga tiras o cordones que crucen el empeine.</p>
            <p>Si tu pie es ancho y con un empeine alto, te conviene seleccionar un calzado de horma más bien ancha para que el pie quede contenido pero cómodo.</p>
            <p>Si tienes un tobillo ancho, podes optar por calzado sin tira de talón o que la misma sea bien angosta, para estilizarlo.</p>
            <p>Si utilizas platillas ortopédicas en el calzado, es recomendable para tu comodidad, adquirir el talle siguiente al que calzas usualmente, así las mismas pueden ingresar con facilidad como así también tu pie y el mismo podrá estar cómodo.</p>
            <p>Si usualmente soles tener la ubicación del dedo gordo, más arriba que lo normal, no selecciones calzados con punteras de charol, dado que el mismo es más rígido y va a
            <p>incomodarte, puede ser que selecciones algo abierto en la punta o bien si es cerrado que sea con cuero o cabretilla que son materiales más blandos.</p>
          </p>
        </div>
      </div>
    </div>
  </div>




  <!-- <script src="js/modernizr-3.6.0.min.js"></script> -->
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/plugins.js"></script>
  <script src="../js/main.js"></script>
  <script src="../js/home.js"></script>
  <script src="../js/smoothproducts.min.js"></script>

  <script type="text/javascript">
    /* wait for images to load */
    $(window).on("load", function() {
      $('.sp-wrap').smoothproducts();
    });
  </script>
</body>

</html>