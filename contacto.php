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
               <h1>Contacto Comercial</h1>
            </div>
         </div>
         <br>
         <div class="row-">
            <div class="col-md-4">
               <p>Para Hilanderias Universal es muy importante tener contacto con nuestros clientes y futuros clientes por ello atenderemos sus inquietudes de acuerdo al departamento comercial.</p>
               <address>                    
                  comercial@hilanderiasuniversal.com.co<br>                    
                  <abbr title="Phone">PBX:</abbr> +57 1 555-3722
               </address>
            </div>
            <div class="col-md-8">
               <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" 
               marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
            </div>
         </div>         
      </div>
      <?php include "php/footer.php"; ?>
   </body>
</html>