<?php

$precio = $_POST['precio'];
$nombre = $_POST['nombre'];
$taskOption = $_POST['taskOption'];

$servername = "localhost:90";
$username = "root";
$password = "";
$dbname = "dbmarketean";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO products(prd_name, prd_price, cat_id) VALUES ('$nombre','$precio','$taskOption')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    echo '
    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="REFRESH" content="0;url=productos.php?mensaje=exitoso"
        <title></title>
    </head>
    <body>
    
    </body>
    </html>
';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();

//ago que regrese a la pagina principar como retorno una ves e insertado los datos en la tabla favoritos


?>
