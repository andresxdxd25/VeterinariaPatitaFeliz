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
$image = $_REQUEST['rayosx'];
$v1 = $_REQUEST['codigo'];
$v2 = $_REQUEST['sintomas'];
$v3 = $_REQUEST['diagnostico'];
$v4 = $_REQUEST['medicamentos'];
//$imgContent = addslashes(file_get_contents($image));
$v5 = $_REQUEST['exsangre'];
$v6 = $_REQUEST['costo'];

//consulta SQL
$sql = "UPDATE perro SET sintomas='$v2', diagnostico='$v3', medicamentos='$v4',
                exsangre='$v5', costoconsulta='$v6' WHERE DNI='$v1'; ";
if (mysqli_query($conn, $sql)) {
    echo "<p id=>Ok, datos ingresados</p>";

} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
//Mensaje de conformidad
?>
