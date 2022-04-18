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
	
    <form action="Consultar_perro1.php" method="GET">
        <h1>Sistema de Identificacion Perruno</h1>
        <p>Ingresar Nombre a buscar</p>
        <p><Input id="texto" Type = Text name = "Nombre" ></p>
        <Input id="texto" Type = Submit value = "Buscar">
        <br>
        <br>
        <a href="UserPrincipal.php"><input style="background-color:skyblue"  id="texto" type="button" value="Inicio"></a>
        </form>

    </body>

</html>