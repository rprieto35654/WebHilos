<?php
   session_start();
   ?>
<html>
   <head>
      <title>UNIHILO</title>
      <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
   </head>
   <body>
      <?php include "php/navbar.php"; ?>
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h1>Nuestra Presencia en el Mercado</h1>
            </div>
         </div>
         <br>
         <div class="row featurette">
            <div class="col-md-7">               
               <p class="lead">Somos una de las pocas hilanderias a nivel nacional contamos con un 40% del mercado nacional nuestras principales regiones son Antioquia, Cundinamarca, Valle, Costa Atlantica.</p>
            </div>
            <div class="col-md-5">
               <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="IMAGEN/presencia_nacional.jpg" data-holder-rendered="true">
            </div>
         </div>
         <div class="row featurette">
            <div class="col-md-7 col-md-push-5">               
               <p class="lead">Contamos con mercado internacional para nuestras fibras y productos como NOILS a la region de Sur America y algunos paises de Europa.</p>
            </div>
            <div class="col-md-5 col-md-pull-7">
               <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="IMAGEN/presencia_sur_america.jpg" data-holder-rendered="true">
            </div>
         </div>
      </div>
      <?php include "php/footer.php"; ?>
   </body>
</html>