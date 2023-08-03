<?php
  include("php/conexion.php");
  include("php/validarSesion.php");

?>

<!DOCTYPE html>
<html lang="es">

  <head>
    <!-- Metadatos -->
    <meta charset="utf-8">
    <meta name="author" content="Ally Rojas">
    <meta name="description" content="App de habilidades deportivas">
    <meta name="keywords" content="HTML, CSS, JavaScript, Bootstrap">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Titulo -->
    <title>Habilidades deportivas / Perfil </title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="imagenes/emoji-sunglasses.svg">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- CSS -->
    <link href="style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
  </head>
  <body>

    <!-- Barra de navegacion -->
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-toggler">
            <a class="navbar-brand" href="#">
                <img src="imagenes/award.svg" width="50" alt="Logo de la página web">
            </a>
            <ul class="navbar-nav d-flex justify-content-center align-items-center">
                <li class="nav-item">
                    <button class="nav-link" onclick="redirectTo('php/CerrarSesion.php')">Cerrar sesión</button>
                </li>
            </ul>
        </div>
      </div>
    </nav>

    <!-- Perfil básico -->
    <section id="perfil">
      <img src="imagenes/user.png" width="150" height="150">
      <h1><?php echo "$_SESSION[nombre] $_SESSION[apellidos]" ?> </h1>
      <p>Una persona enérgica y entusiasta con una fuerte motivación para practicar deporte regularmente, muestra entusiasmo y dedicación hacia la actividad física. Es probable que busque oportunidades para mantenerse activo y disfrute de los beneficios que el deporte brinda a su bienestar físico y mental.</p>
    </section>
    <section id="habilidadUser">
      <h1>Mis habilidades</h1>

      <?php
      $consulta= "Select *
                  From persona p
                  Where hab1";
        $datos = mysqli_query($conexion, $consulta);
      ?>
      <section class="habilidad1">
        <h2><?php echo $_SESSION['hab1']?> </h2>
      </section>
      <section class="habilidad2">
        <h2><?php echo $_SESSION['hab2']?> </h2>
      </section>
      <section class="habilidad3">
        <h2><?php echo $_SESSION['hab3']?> </h2>
      </section>

      <!-- Botón para actualizar habilidades -->
        <button class="nav-link" onclick="redirectTo('index5.html')">Actualizar habilidades</button>
      </section>
    

    <!-- footer -->
    <footer class="seccion-oscura d-flex flex-column align-items-center justify-content-center"> 
      <img class="footer-logo" src="imagenes/ICON_dino_juego_art.png" alt="Logo del portafolio">
      <p class="footer-texto text-center">El deporte es la puerta a una vida más saludable,<br> llena de pasión y superación personal.</p>
      <div class="derechos-de-autor"> <a href="https://tecnolochicas.mx/priva/">Aviso de privacidad</a></div>
      <div class="derechos-de-autor">Creado por Ally Rojas (2023) &#169;</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="main.js"></script>
    </body>
</html>