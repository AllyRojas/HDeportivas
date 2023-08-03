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
include("validarSesion.php");

$nicknameA = $_GET['nickname'];

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las nuevas habilidades desde el formulario
    $nuevaHab1 = $_POST["nueva_hab1"];
    $nuevaHab2 = $_POST["nueva_hab2"];
    $nuevaHab3 = $_POST["nueva_hab3"];

    // Actualizar las habilidades en la tabla
    $consultaId = "SELECT id FROM persona WHERE Nickname = '$_SESSION[nickname]' LIMIT 1";
    $resultado = mysqli_query($conexion, $consultaId);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);
        $idUsuario = $fila['id'];

        $actualizarHabilidades = "UPDATE persona SET hab1 = '$nuevaHab1', hab2 = '$nuevaHab2', hab3 = '$nuevaHab3' WHERE id = $idUsuario";

        if (mysqli_query($conexion, $actualizarHabilidades)) {
            echo "Habilidades actualizadas correctamente.";
            echo "<br> <a href='index4.php'> Volver a Mi Perfil </a></div>";
        } else {
            echo "Error al actualizar las habilidades: " . mysqli_error($conexion);
        }
    } else {
        echo "Error: Usuario no encontrado.";
    }

    // Cerrando conexión
    mysqli_close($conexion);
}
?>


</body>
</html>