<!doctype html>
<html lang="en">

<head>

<style>
    table{
	background-color: white;
	text-align: left;
	border-collapse: collapse;
	width: 100%;
}

th, td{
	padding: 20px;
}

thead{
	background-color: #246355;
	border-bottom: solid 5px #0F362D;
	color: white;
}

tr:nth-child(even){
	background-color: #ddd;
}

tr:hover td{
	background-color: #369681;
	color: white;
}

</style>
    
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Nombre</th>
                            <th>Raza</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //conexion a la Base de datos (Servidor,usuario,password)
                        $dbhost = "mi-veterinariadb.mysql.database.azure.com";
			$dbuser = "superadmin@mi-veterinariadb";
			$dbpass = "Grupo07#";
			$dbname = "miveterinariadb";


			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, 3306);
                        if (!$conn) {
                        die("Error de conexion: " . mysqli_connect_error());
                        }
                        //(nombre de la base de datos, $enlace) mysql_select_db("RelocaDB",$link);
                        //capturando datos
                        $v2 = $_REQUEST['Nombre'];
                        //conuslta SQL
                        $sql = "select * from Perro where Nombre like '".$v2."'";
                        $result = mysqli_query($conn, $sql);
                        //cuantos resultados hay en la busqueda
                        $num_resultados = mysqli_num_rows($result);
                        echo "<p>Número de perros encontrados: ".$num_resultados."</p>";
                        //mostrando informacion de los perros y detalle
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row['Nombre']; ?></td>
                                <td><?php echo $row['Raza']; ?></td>
                                <td>
                                    <img width=200px heigth= 200px src="Fotos/<?php echo $row['DNI']?>.jpg">
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html> 
