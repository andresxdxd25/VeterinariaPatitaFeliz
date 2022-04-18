<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "RelocaDB";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn){
    die("No se pudo establecer la conexion: ".mysqli_connect_error());
}


?>