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
	
    <form action="Registrar_Extraviado.php" method="GET">
        <h1>Registre el perro que ha encontrado</h1>
        Ingresar la direccion donde se encuentra el perrito
        <Input id="texto" name = "direccion" Type Text></P>
        Seleccione Raza
        <Select name = "raza">
            <Option value = "Pitbull"> Pitbull
            <Option value = "Bulldog"> Bulldog
            <Option value = "Shichu"> Shichu
            <Option value = "Pequines"> Pequines
            <Option value = "San Bernardo"> San Bernardo
            <Option value = "Chiguahua"> Chiguahua
            <Option value = "Husky"> Husky Siberiano
        </Select></P>
            Subir Foto
            <Input Type = "file" class="form-control-file" name = "Foto"></P>
        <Input id="texto" name= "registrar" Type = Submit value = "Registrar">
        <a href="RegistrarExtraviado.php">
                <input id="texto" type="button" value="Cancelar">
        <br>
    </form>

    </body>

</html>
