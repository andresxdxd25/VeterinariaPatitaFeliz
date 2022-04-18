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
                    <input style="background-color:red"  id="cerrar" type="button" value="Cerrar sesion"></a>
        </div>
        <h1>Sistema de registro y consulta canino</h1>
        <img src="https://i0.wp.com/zoovetesmipasion.com/wp-content/uploads/2017/10/vets-with-animals-background_1264-129.jpg?resize=616%2C616" weight="300px" height="300px">
        <form>
            <a href="RegistrarPerro.php">
                <input id="texto" type="button" value="Registrar Perro">
            </a>
            <a href="ConsultarPerro.php">
                <input id="texto" type="button" value="Consultar Perro"></a>
            <br>
            <br>            
        </form>
    </body>

</html>
