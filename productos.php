<html>
<head>
   <title>UNIHILO</title>
   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
   <script src="js/jquery.min.js"></script>
</head>
<body>
   
    <!-- barra de navegacion --> 
    <?php include "php/navbar.php"; ?>
   
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h2>Ver Productos</h2>




            <!-- Button trigger modal -->
            <form class="form-inline" role="search" id="buscar">
               <div class="form-group">
                  <input type="text" name="s" class="form-control" placeholder="Buscar">
               </div>
               <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>
               <a data-toggle="modal" href="#newModal" class="btn btn-default">Agregar</a>
            </form>
            <br>
            <!-- Modal -->
            <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Agregar</h4>
                     </div>
                     <div class="modal-body">
                        <form role="form" method="post" id="agregar">
                           <div class="form-group">
                              <label for="prd_name">Nombre</label>
                              <input type="text" class="form-control" name="prd_name" required>
                           </div>
                           <div class="form-group">
                              <label for="prd_price">Precio</label>
                              <input type="number" class="form-control" name="prd_price" required>
                           </div>
                           <div class="form-group">
                              <label for="prd_category">Categoria</label>
                              <input type="text" class="form-control" name="prd_category" required>
                           </div>
                           <button type="submit" class="btn btn-default">Agregar</button>
                        </form>                       
                     </div>
                  </div>
                  <!-- /.modal-content -->
               </div>
               <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <div id="tabla"></div>
         </div>
      </div>
   </div>
   
   <?php include "php/footer.php"; ?>
   
   <script src="bootstrap/js/bootstrap.min.js"></script>
   
   <script>
 
      function loadTabla(){
        $('#editModal').modal('hide');
      
        $.get("./crud/tabla.php","",function(data){
          $("#tabla").html(data);
        })
      
      }
      
      loadTabla();

      $("#buscar").submit(function(e){
        e.preventDefault();
        $.get("./crud/busqueda.php",$("#buscar").serialize(),function(data){
          $("#tabla").html(data);
          $("#buscar")[0].reset();
        })
      });           
          
      $("#agregar").submit(function(e) {
        e.preventDefault();

        $.post("./crud/agregar.php", $("#agregar").serialize(), function(data) {})
            .done(function() {            
              loadTabla();
            })
            .fail(function() {
                alert("error");
            })
            .always(function() {
              $("#agregar")[0].reset();
              $('#newModal').modal('hide');
            });
        //alert("Agregado exitosamente!");          
      });          
   </script>
</body>
</html>