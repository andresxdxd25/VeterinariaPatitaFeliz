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
		<title>Control Canino</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	
    <form  method="post" action="Registrar_Perro.php" >
        <h1>Sistema de Identificacion Perruno</h1>
        Ingresar Codigo
        <Input id="texto" name = "Codigo" Type Text></P>
        Ingresar Nombre
        <Input id="texto" name = "Nombre" Type Text></P>
        Fecha de Nacimiento
        <Input id="texto" name= "FechNac" Type = "Date"></P>
        Genero
        <Input name="Genero" type="Radio" Value=1> Macho
        <Input name= "Genero" Type = "Radio" Value=0> Hembra</P>
        Seleccione Raza
        <Select name = "Raza">
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
        <Input id="texto" name= "Registrar" Type = Submit value = "Registrar">
        <a href="RegistrarPerro.php"><input style="background-color:red"  id="texto" type="button" value="Cancelar"></a>
        <br>
        <a href="UserPrincipal.php"><input style="background-color:skyblue"  id="texto" type="button" value="Inicio"></a>

    </form>
    <script src="./script.js"></script>
    </body>

</html>

