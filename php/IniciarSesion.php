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

    session_start();
    $_SESSION['login'] = false;

    // Variables
    $nickname = $_POST["nickname"];
    $password = $_POST["contraseña"];

    // Evaluacion
    $consulta = "SELECT *
                FROM persona
                WHERE Nickname= '$nickname' ";
        
    $consulta = mysqli_query($conexion, $consulta);
    $consulta = mysqli_fetch_array($consulta);

    if ($consulta) {
        // Verificar contraseña utilizando password_verify()
        if ($password === $consulta['Password']) {
            $_SESSION['login'] = true;
            $_SESSION['nickname'] = $consulta['Nickname'];
            $_SESSION['nombre'] = $consulta['Nombre'];
            $_SESSION['apellidos'] = $consulta['Apellidos'];
            $_SESSION['edad'] = $consulta['Edad'];
            $_SESSION['hab1'] = $consulta['hab1'];
            $_SESSION['hab2'] = $consulta['hab2'];
            $_SESSION['hab3'] = $consulta['hab3'];

            header('Location: ../index4.php');
            exit; // Agregar exit para evitar ejecución adicional del código.
        } 
        else {
            echo "Contraseña incorrecta.";
            echo "<br> <a href='../index2.html' > Intentalo de nuevo. </a></div>";
        }
    } 
    else {
        echo "El usuario no existe.";
        echo "<br> <a href='../index2.html' > Intentalo de nuevo. </a></div>";
    }

    // Cerrando conexion
    mysqli_close($conexion);
?>
</body>
</html>