<?php
require 'conexion.php';
session_start();


$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];
$md5pass = md5($pass);

$query = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario = '".$nombre."' and password = '".$md5pass."'");
$nr = mysqli_num_rows($query);
$fila = mysqli_fetch_array($query);
if($nr == 1){
    $_SESSION['username'] = $nombre;
    if($fila[3]==1){
        header("Location: ../AdminPrincipal.php"); 
    }
    elseif($fila[3]==2){
        header("Location: ../UserPrincipal.php");
    }
    elseif($fila[3]==3){
        header("Location: ../VeterinarioPrincipal.php");
    }
    elseif($fila[3]==4){
        header("Location: ../ClientePrincipal.php");
    }
    
}
elseif($nr == 0){
    
    header("Location: ../index.html");

}

?>
