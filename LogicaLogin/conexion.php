<?php
$dbhost = "mi-veterinariadb.mysql.database.azure.com";
$dbuser = "superadmin@mi-veterinariadb";
$dbpass = "Grupo07#";
$dbname = "miveterinariadb";


$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, 3306);
if (!$conn){
    die("No se pudo establecer la conexion: ".mysqli_connect_error());
}


?>
