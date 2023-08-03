<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("conexion.php");

        //Variables
        $correo = $_POST["correo"];
        $nickname = $_POST["nickname"];
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $password = $_POST["contraseña"];
        $edad = $_POST["edad"];

        $hab1 = $_POST["hab1"];
        $hab2 = $_POST["hab2"];
        $hab3 = $_POST["hab3"];


        // Nickname ya existente

        $consultaId = "SELECT Nickname
                        FROM persona
                        WHERE Nickname= '$nickname' ";

        $consultaId = mysqli_query($conexion, $consultaId);
        $consultaId = mysqli_fetch_array($consultaId);

        if(!$consultaId){
            $sql = "INSERT INTO persona VALUES ( '$nickname', '$nombre', '$apellidos', '$edad', '$correo', '$password','$hab1', '$hab2', '$hab3')"; 
            if(mysqli_query($conexion, $sql)) {
                echo "Tu cuenta ha sido creada.";
                echo "<br> <a href='../index2.html' > Iniciar Sesion </a></div>";
            }
            else{
                echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
            }
        }
        else{
            echo "El Nickname ya existe.";
            echo "<a href='../index.html'> Intentalo de nuevo. </a> </div>";
        }

        //Cerrando conexion
        mysqli_close($conexion);
    ?>
</body>
</html>