<?php



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

else{

echo 'si conecto';

}

$conn->close();

//ago que regrese a la pagina principar como retorno una ves e insertado los datos en la tabla favoritos

?>

