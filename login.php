<?php

$dbhost = "bp4t3iyol9avlj9ttjpc-mysql.services.clever-cloud.com";
$dbuser = "ubtbakdph7lznj2q";
$dbpass = "2nBKxrpnfPfW7eiIyxFo";
$dbname = "bp4t3iyol9avlj9ttjpc";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
    die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
    echo "Bienvenido: " .$nombre;
    // Redireccionar a YouTube después de 2 segundos
    echo "<script>setTimeout(function(){ window.location.href = 'https://www.youtube.com'; }, 2000);</script>";
}
else if ($nr == 0) 
{
    //header("Location: login.html");
    //echo "No ingreso" 
}

?>
