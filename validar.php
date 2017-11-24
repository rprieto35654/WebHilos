<?php
 
$usuario = $_POST['nnombre'];
$pass = $_POST['npassword'];
 
if(empty($usuario) || empty($pass)){
header("Location:  loguin.html");
exit();
}
 
$enlace = mysqli_connect("127.0.0.1", "root", "", "proyecto_ean");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

$result = mysqli_query($enlace,"SELECT * from usuarios where Username='" . $usuario . "'");
 
if($row = mysqli_fetch_array($result)){
if($row['Password'] == $pass){
session_start();
$_SESSION['usuario'] = $usuario;
header("Location: contenido.php");
}else{
header("Location: loguin.html");
exit();
}
}else{
header("Location:  loguin.html");
exit();
}
 
mysqli_close($enlace); 
?>
