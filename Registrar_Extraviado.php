<?php
//conexion a la Base de datos (Servidor,usuario,password)
$dbhost = "mi-veterinariadb.mysql.database.azure.com";
$dbuser = "superadmin@mi-veterinariadb";
$dbpass = "Grupo07#";
$dbname = "miveterinariadb";


$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, 3306);
if (!$conn) {
    die("Error de conexion: " . mysqli_connect_error());
}
//(nombre de la base de datos, $enlace) mysql_select_db("Relocadb",$link);
//capturando datos
$v1 = $_REQUEST['direccion'];
$v2 = $_REQUEST['raza'];

$sql = "INSERT INTO encontrado (direccion, raza) ";
$sql .= "VALUES ('$v1', '$v2')";
if (mysqli_query($conn, $sql)) {
    echo "<p id=>Ok, datos ingresados</p>";

} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
//Mensaje de conformidad
?>
