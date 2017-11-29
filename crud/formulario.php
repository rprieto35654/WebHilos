<?php
  include "conexion.php";   
  $user_id=null;
  $sql1= "select * from products where id = ".$_GET["id"];
  $query = $con->query($sql1);
  $products = null;
  if($query->num_rows>0){
    while ($r=$query->fetch_object())
    {
      $products=$r;
      break;
    }   
  }
?>

<?php if($products!=null):?>

<form role="form" id="actualizar">
  <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" value="<?php echo $products->prd_name; ?>" name="prd_name" required>
  </div>
  <div class="form-group">
      <label for="prd_price">Precio</label>
      <input type="number" class="form-control" value="<?php echo $products->prd_price; ?>" name="prd_price" required>
  </div>
  <div class="form-group">
      <label for="address">Categoria</label>
      <input type="text" class="form-control" value="<?php echo $products->prd_category; ?>" name="prd_category" required>
  </div>
  <input type="hidden" name="id" value="<?php echo $products->id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>

<script>
    $("#actualizar").submit(function(e) {
        e.preventDefault();
        $.post("./crud/actualizar.php", $("#actualizar").serialize(), function(data) {}).done(function() {
                loadTabla();
            })
            //alert("Agregado exitosamente!");
            //$("#actualizar")[0].reset();
        $('#editModal').modal('hide');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
        loadTabla();
    });
</script>
<?php else:?>
<p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>