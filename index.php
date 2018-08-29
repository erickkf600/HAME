<!doctype html>
<html lang="pt-br">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
      <meta http-eqiv="X-UA-Compatible" content="IE=edge" />
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="shortcut icon" href="icone.png" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
      <title>HAME</title>
   </head>
   <body>
      <?php include "nav.php" ?>
      <div class="container">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner mt-3">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="img/banner01.jpg" alt="promoção">
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="img/banner02.jpg" alt="banner 2">
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
      <div class="container col-md-11 mt-5">
         <div class="row">
            <!-- ABRIR PHP AQUI -->
            <div class="product col-md-3">
               <div class="make3D">
                  <img src="img/vitrine/01.jpg" alt="" width="333" height="466" />
                  <div class="image_overlay"></div>
                  <p class="add_to_cart">Add Carrinho</p>
                  <p class="view_gallery">+ Detalhes</p>
                  <div class="stats-container">
                     <span class="product_price">$39</span>
                     <span class="product_name">FLUTED HEM DRESS</span>    
                     <p>Summer dress</p>
                     <div class="product-options">
                        <strong>TAMANHOS</strong>
                        <span>XS, S, M, L, XL, XXL</span>
                        <strong>CORES</strong>
                        <div class="colors">
                           <div class="c-blue"><span></span></div>
                           <div class="c-red"><span></span></div>
                           <div class="c-white"><span></span></div>
                           <div class="c-green"><span></span></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- FECHAR PHP -->
            <div class="product col-md-3">
               <div class="make3D">
                  <img src="img/vitrine/02.jpg" alt="" width="333" height="466" />
                  <div class="image_overlay"></div>
                  <p class="add_to_cart">Add Carrinho</p>
                  <p class="view_gallery">View gallery</p>
                  <div class="stats-container">
                     <span class="product_price">$39</span>
                     <span class="product_name">FLUTED HEM DRESS</span>    
                     <p>Summer dress</p>
                     <div class="product-options">
                        <strong>SIZES</strong>
                        <span>XS, S, M, L, XL, XXL</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="product col-md-3">
               <div class="make3D">
                  <img src="img/vitrine/03.jpg" alt="" width="333" height="466" />
                  <div class="image_overlay"></div>
                  <p class="add_to_cart">Add Carrinho</p>
                  <p class="view_gallery">View gallery</p>
                  <div class="stats-container">
                     <span class="product_price">$39</span>
                     <span class="product_name">FLUTED HEM DRESS</span>    
                     <p>Summer dress</p>
                     <div class="product-options">
                        <strong>SIZES</strong>
                        <span>XS, S, M, L, XL, XXL</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="product col-md-3">
               <div class="make3D">
                  <img src="img/vitrine/04.jpg" alt="" width="333" height="466" />
                  <div class="image_overlay"></div>
                  <p class="add_to_cart">Add Carrinho</p>
                  <p class="view_gallery">View gallery</p>
                  <div class="stats-container">
                     <span class="product_price">$39</span>
                     <span class="product_name">FLUTED HEM DRESS</span>    
                     <p>Summer dress</p>
                     <div class="product-options">
                        <strong>SIZES</strong>
                        <span>XS, S, M, L, XL, XXL</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <?php include "footer.php" ?>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="jquery/script.js"></script>
   </body>
</html>