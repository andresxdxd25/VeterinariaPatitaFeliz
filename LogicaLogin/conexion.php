<?php
$dbhost = "mi-veterinariadb.mysql.database.azure.com";
$dbuser = "superadmin@mi-veterinariadb";
$dbpass = "Grupo07#";
$dbname = "mi-veterinariadb";


$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn){
    die("No se pudo establecer la conexion: ".mysqli_connect_error());
}


?>
