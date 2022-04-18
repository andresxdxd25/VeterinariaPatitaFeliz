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
		<title>Veterinario</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
        <div align="right">
            <a href="LogicaLogin/salir.php">
                    <input id="cerrar" type="button" value="Cerrar sesion"></a>
        </div>
        <h1>Actualizar registro</h1>
        
        <img src="https://i0.wp.com/zoovetesmipasion.com/wp-content/uploads/2017/10/vets-with-animals-background_1264-129.jpg?resize=616%2C616" weight="300px" height="300px">
        
        <form>
            <a href="ActualizarPerro.php">
                <input id="texto" type="button" value="Actualizar Perro">
            </a>
            <a href="ConsultarPerro.php">
                <input id="texto" type="button" value="Consultar Perro"></a>
            <br>
        </form>
    </body>

</html>
