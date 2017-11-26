<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <!-- Inicio cabecera -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>UNIHILO-PRODUCTOS</title>
    <link href="CSS/estilos.css" rel="stylesheet" type="text/css" />
    <!--Favicon-->
    <link rel="shorcut icon" href="favicon.ico" type="image/x-icon" />
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script>
        src = "../scripts.js"
    </script>
</head>
<!-- Fin cabecera -->

<body>
    <!-- Inicio cuerpo -->
    <div class="col-md-11" id="contenedor">
        <!-- Inicio contenedor -->
        <div class="col-md-12" id="header">
            <!-- Inicio logo-redes -->
            <div id="logo"><img src="IMAGEN/LOGO_HILOS.png" width="300" height="100" /></div>
            <div id="redes">
                <div class="icono-redes"><img src="IMAGEN/Google-Plus.png" width="32" height="32" /></div>
                <div class="icono-redes"> <img src="IMAGEN/Youtube.png" width="32" height="32" /></div>
                <div class="icono-redes"><img src="IMAGEN/Facebook.png" width="32" height="32" /></div>
                <div class="icono-redes"><img src="IMAGEN/Twitter-Bird.png" width="32" height="32" /></div>
                <div class="icono-redes"><img src="IMAGEN/Instagram.png" width="32" height="32" /></div>
            </div>
        </div>
        <!-- Fin logo-redes -->
        <div class="col-md-12" id="menu">
            <!-- Inicio menu -->
            <div class="col-md-2 opciones-menu"><a href="index.html">INICIO</a></div>
            <div class="col-md-2 opciones-menu"><a href="nosotros.html">NOSOTROS</a></div>
            <div class="col-md-2 opciones-menu"><a href="institucional.html">INSTITUCIONAL</a></div>
            <div class="col-md-2 opciones-menu"><a href="productos.html">PRODUCTOS</a></div>
            <div class="col-md-2 opciones-menu"><a href="presencia.html">PRESENCIA</a></div>
            <div class="col-md-1 opciones-menu"><a href="contacto.html">CONTACTO</a></div>
        </div>
        <!-- Fin menu -->
        <div class="col-md-12">
            <div class="col-md-12 flotante">
                <h1>Productos</h1>
            </div>

            <div>
            
                <form class="form-horizontal" role="form" action="productoInsertar.php" method="post" onsubmit="return validarCampos($('.obligatorio'))">
                    <!-- Nombre -->
                    <div class="form-group obligatorio">
                        <label for="nombre" class="col-sm-3">Nombre</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el Nombre">
                        </div>
                    </div>
                    <!-- Precio -->
                    <div class="form-group obligatorio">
                        <label for="precio" class="col-sm-3">Precio</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="precio" name="precio" placeholder="Ingrese el Precio">
                        </div>
                    </div>
                    <!-- Tipo -->
                    <div class="form-group obligatorio">
                        <label for="identificacion" class="col-sm-3">Tipo</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="taskOption">
                                <option>Seleccione Categoria </option>

                                
                        <?php
                        $servername = "localhost:3306";
                        $username = "root";
                        $password = "";
                        $dbname = "dbmarketean";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        } 

                        $sql = "SELECT * FROM categories WHERE 1";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo '<option value="'.$row["cat_id"].'">'.$row["cat_name"].'</option>';                                                             
                            }
                        } else {
                            //echo "0 results";
                        }
                        $conn->close();
                        ?>
                 
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success" name="btnIngresar">Crear</button>

                </form>
            </div>

            <div class="col-sm-6">
                </br>
                <table class="table">
                    <caption>Lista de Productos</caption>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Categoria</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row -->
                        <!-- llenar el listado de los usuarios -->

                        <?php
                        $servername = "localhost:3306";
                        $username = "root";
                        $password = "";
                        $dbname = "dbmarketean";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        } 

                        $sql = "SELECT * FROM products inner join categories on products.cat_id = categories.cat_id WHERE 1";
                        
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                        // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo " <td>" . $row["prd_name"]. "</td>";
                                echo " <td>" . $row["prd_price"]. "</td>";
                                echo " <td>" . $row["cat_name"]. "</td>";
                                echo " <td>
                                        <button type='button' class='btn btn-success verVehiculo' id='" . $row["prd_id"]. "'>Editar</button>
                                        &nbsp
                                        <a href='#' class='btn btn-info' name=''>
                                            <i class='fa fa-pencil-square-o' aria-hidden='true'></i>
                                        </a>
                                        &nbsp
                                        <a href='#'' class='btn btn-danger' name=''>X</a>
                                    </td>";
                                echo "</tr>";                                                               
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- Fin contenedor -->
    <div class="col-md-12">
        <!-- Inicio barra inferior -->
        <div class="col-md-3 flotante">
            <p>
                FIBRAS SINTETICAS, NATURALES, MEZCLAS
            </p>
        </div>
        <div class="col-md-3 flotante">
            <p>
                ISO 9001:2015
            </p>
        </div>
        <div class="col-md-3 flotante">
            <p>
                HILANDEROS POR EXCELENCIA
            </p>
        </div>
        <div class="col-md-3 flotante">
            <p>
                HILANDO VIDAS
            </p>
        </div>
    </div>
    <!-- Fin barra inferior -->

    
<script type="text/javascript">
    $('.verVehiculo').click(function(){                    
        $.ajax({            
            data: {"parametro" : $(this).attr('id')},            
            type: "GET",
            dataType: "json",
            url: "VehiculoLista.php",        
        }).done(function (data) {                        
            
            if (data.length === 0) {
                $('#panelVehiculo').hide()        
                $("#tablaVehiculo tbody").html("")                
                toastr.warning("No tiene Vehiculos Registrados");
            }
            else{
                $('#panelVehiculo').show()    
                $("#tablaVehiculo tbody").html("");
                $.each(data, function(i,item){                                         
                        $("#tablaVehiculo tbody").append('<tr><td>' + item.Id + '</td><td>' + item.Placa + '</td><td>' + item.Color + '</td><td>' + item.Tipo + '</td><td></td></tr>');
                })                
            }
            
        }).fail(function() {

        });                 
    })

    $(function(){
    
    //Take a url variable with regex
      $.get = function(key)   {  
        key = key.replace(/[\[]/, '\\[');  
        key = key.replace(/[\]]/, '\\]');  
        var pattern = "[\\?&]" + key + "=([^&#]*)";  
        var regex = new RegExp(pattern);  
        var url = unescape(window.location.href);  
        var results = regex.exec(url);  
        if (results === null) {  
            return null;  
        } else {  
            return results[1];  
        }  
    }  

    if ($.get("mensaje")=='exitoso') {
        toastr.success("Registro Guardado Exitosamente");
    }    
})
</script>

</body>
<!-- Fin cuerpo -->

</html>