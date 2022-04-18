<?php
    function validar_clave($clave,&$error_clave){
        if(strlen($clave) < 8){
            $error_clave = "La clave debe tener al menos 8 caracteres";
            return false;
        }
        if(strlen($clave) > 16){
            $error_clave = "La clave no puede tener más de 16 caracteres";
        return false;
        }
        if (!preg_match('`[a-z]`',$clave)){
            $error_clave = "La clave debe tener al menos una letra minúscula";
            return false;
        }
        if (!preg_match('`[A-Z]`',$clave)){
            $error_clave = "La clave debe tener al menos una letra mayúscula";
            return false;
        }
        if (!preg_match('`[0-9]`',$clave)){
            $error_clave = "La clave debe tener al menos un caracter numérico";
            return false;
        }
        if (!preg_match('`[0-9]`',$clave)){
            $error_clave = "La clave debe tener al menos un caracter numérico";
            return false;
        }
        if (!preg_match('`[#$%&/?]`',$clave)){
            $error_clave = "La clave debe tener al menos un caracter numérico";
            return false;
        }
        $error_clave = "";
        return true;
}
?>

<?php
//conexion a la Base de datos (Servidor,usuario,password)
$conn = mysqli_connect("localhost", "root","", "RelocaDB");
if (!$conn) {
    die("Error de conexion: " . mysqli_connect_error());
}
//(nombre de la base de datos, $enlace) mysql_select_db("Relocadb",$link);
//capturando datos
$e1 = $_REQUEST['usuario'];
$e2 = $_REQUEST['password'];
$e3 = $_REQUEST['rol'];

if(validar_clave($e2, $error_encontrado)){
    echo "PASSWORD VALIDO";
    $md5pass = md5($e2);
    //conuslta SQL

    $sql = "INSERT INTO usuarios (usuario, password , id_rol) ";
    $sql .= "VALUES ('$e1', '$md5pass', '$e3')";
    if (mysqli_query($conn, $sql)) {
        echo "<p id=>Ok, datos ingresados</p>";

    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    //Mensaje de conformidad
}
else{
    echo "PASSWORD INVALIDO";
}
?>