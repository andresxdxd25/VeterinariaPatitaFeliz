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
//(nombre de la base de datos, $enlace) mysql_select_db("RelocaDB",$link);
//capturando datos
$v2 = $_REQUEST['Nombre'];
//conuslta SQL
$sql = "select * from Perro where Nombre like '".$v2."'";
$result = mysqli_query($conn, $sql);
//cuantos reultados hay en la busqueda
$num_resultados = mysqli_num_rows($result);
echo "<p>Número de perros encontrados: ".$num_resultados."</p>";
//mostrando informacion de los perros y detalle

for ($i=0; $i <$num_resultados; $i++) {
$row = mysqli_fetch_array($result); echo ($i+1);

echo " DNI : ".$row["DNI"];
echo " </br>Nombre : ".$row["Nombre"];
echo " </br>Raza : ".$row["Raza"];
echo " </br>Genero : ".$row["Genero"];
echo " </br>Nacio en : ".$row["FechaNacimiento"];


echo "</p>";
}
?>
