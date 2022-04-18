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
    <div align="right">
            <a href="LogicaLogin/salir.php">
                    <input id="cerrar" type="button" value="Cerrar sesion"></a>
    </div>
    <form action="Cliente_principal.php" method="GET">
        <h1>Sistema de consulta canino</h1>
        <p>Ingresar nombre a buscar</p>
        <p><Input id="texto" Type = Text name = "Nombre" ></p>
        <Input id="texto" Type = Submit value = "Buscar">
        <br>
        <a href="RegistrarExtraviado.php"><input style="background-color:skyblue"  id="texto" type="button" value="Registrar perro extraviado"></a>
        <br>
        <a href="Encontrados.php"><input style="background-color:skyblue"  id="texto" type="button" value="Ver lista de extraviados"></a>
        </form>       
        </form>
    </body>

</html>
