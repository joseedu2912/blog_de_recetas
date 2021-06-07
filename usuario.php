<?php

include("db_conn.php");
session_start();
if(!isset($_SESSION['usuario'])){
header ("Location: index.php");
}

$iduser = $_SESSION['usuario'];


$sql = "SELECT usuario, nombre, apellidoP, apellidoM, edad, genero FROM u WHERE usuario = '$iduser'";
$resultado = $conn->query($sql);
$row = $resultado->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuario</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <header class="header">
        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="principal.html">
                    <h1 class="logo_nombre no-margin centrar-texto logo_bold">Latinoamerica y sus Recetas</h1>
                    <!--con la etiqueta se puede modificar el estilos de un tecto sin alterar la estructura-->
                </a>
                <nav class="navegacion">

                    <a href="reporteerrores.html" class="navegacion__enlace">Resporte de Errores</a>
                    <a href="nosotros.html" class="navegacion__enlace">Sobre nosotros</a>
                    <a href="cerrar_cuenta.php" class="navegacion__enlace">Cerrar cuenta</a>
                </nav>
            </div>
            <div class="header__texto">
                <h2 class="no-margin">Mantener la Cultura Gastronomica Latinoamericana</h2>
                <p class="no-margin">Las Mejores Recetas que Puedes Encontrar</p>
            </div>
    </header>
    <main>
        <section class="seccion-perfil-usuario">

            <div class="perfil-usuario-body">
                <div class="perfil-usuario-bio">
                    <h3 class="titulo">DATOS DE USUARIO</h3>
             <p>
               Nombre:  <?php echo utf8_decode($row['nombre']); ?>    
               <br>
               Apellido Paterno:  <?php echo utf8_decode($row['apellidoP']); ?>
               <br>
               Apellido Materno:  <?php echo utf8_decode($row['apellidoM']); ?>
               <br>
               Correo de ususario:  <?php echo utf8_decode($row['usuario']); ?>   
               <br>
               Edad:  <?php echo utf8_decode($row['edad']); ?>  
               <br>
               Genero:  <?php echo utf8_decode($row['genero']); ?>     
</p>


                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="principal.html">
                    <h1 class="logo_nombre no-margin centrar-texto logo_bold">Latinoamerica y sus Recetas</h1>
                    <!--con la etiqueta se puede modificar el estilos de un tecto sin alterar la estructura-->
                </a>
                <nav>

                    <a href="nosotros.html" class="navegacion__enlace">Sobre Nosotros</a>
                    <a href="reporteerrores.html" class="navegacion__enlace">Resporte de Errores</a>
                </nav>
            </div>
        </div>

    </footer>
</body>

</html>