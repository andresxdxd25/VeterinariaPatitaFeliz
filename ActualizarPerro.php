<!DOCTYPE html>

<?php   

session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    header("location: index.html");
}
?>

<html>
	<head>
		<title>Actualizar datos</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	
    <form action="Actualizar_perro.php" method="GET">
        <h1>Detalles de la consulta</h1>
            Ingresar codigo del perro
            <Input id="texto" name = "codigo" type="text"></P>

            Ingresar Sintomas
            <Input id="texto" name = "sintomas" type="text"></P>
                   
            Subir Foto de Rayos X
            <Input Type = "file" name = "rayosx"></P>

            Subir examen de sangre
            <Input Type = "file" name = "exsangre"></P>

            Diagnostico
            <Input id="texto" type="text" name="diagnostico"></P>

            Medicamentos
            <Input id="texto" type="text" name="medicamentos"></P>

            Ingresar Costo de la consulta
            <Input id="texto" name = "costo" type="text"></P>

        <Input id="texto" name= "Actualizar" Type = Submit value = "Actualizar">
        <a href="ActualizarPerro.php">
                <input id="texto" type="button" value="Cancelar">
        <br>
    </form>

    <script src="./script.js"></script>
    </body>

</html>
