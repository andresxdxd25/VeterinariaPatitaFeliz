<!DOCTYPE html>

<?php   

session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    header("location: login.html");
}
?>

<html>
	<head>
		<title>Control Canino</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	
    <form action="Registrar_empleado.php" method="GET">
        <h1>Sistema de Registro de usuarios</h1>
        Ingresar Usuario
        <Input id="texto" name = "usuario" Type Text></P>
        Ingresar Password
        <Input id="texto" name = "password" Type="Password"></P>
        Seleccione el Rol:
        <Select name = "rol">
            <Option value = "1"> Administrador 
            <Option value = "2"> Empleado
            <Option value = "3"> Veterinario
        </Select></P>
        <br>
        <br>
        <Input id="texto" name= "registrar" Type = Submit value = "Registrar">
        <Input id="texto" Type = Submit value = "Cancelar"></P>
        <br>
        <a href="AdminPrincipal.php"><input id="texto" type="button" value="Inicio"></a>

    </form>

    </body>

</html>

