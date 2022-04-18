<?php
//conexion a la Base de datos (Servidor,usuario,password)
$conn = mysqli_connect("localhost", "root","", "RelocaDB");
if (!$conn) {
    die("Error de conexion: " . mysqli_connect_error());
}
//(nombre de la base de datos, $enlace) mysql_select_db("Relocadb",$link);
//capturando datos
$v1 = $_REQUEST['Codigo'];
$v2 = $_REQUEST['Nombre'];
$v3 = $_REQUEST['FechNac'];
$v4 = $_REQUEST['Raza'];
$v5 = $_REQUEST['Genero'];
//$v6 = $_REQUEST['Foto'];
//$tamanoArchivo = $_FILES[$v6]["size"];
//$image = $_FILES['Foto']['tmp_name'];
//$imgContent = addslashes(file_get_contents($v6));
//$binariosImagen = fread($v6,$tamanoArchivo);
//conuslta SQL
$sql = "INSERT INTO Perro (DNI, Nombre, Raza, Genero, FechaNacimiento) ";
$sql .= "VALUES ('$v1', '$v2', '$v4', '$v5', '$v3')";
if (mysqli_query($conn, $sql)) {
    //echo "<p id=>Ok, datos ingresados</p>";

} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
//Mensaje de conformidad
?>