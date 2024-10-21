<?php
    require 'modelo/conexion.php';

    session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['correo']))

    {
        $nombre_usuario = $_SESSION['username'];
        $correo_usuario = $_SESSION['correo'];
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="css/styles_pag.css">
</head>
<body>
<header>
    
    <div id="contenedor_princiapl">
        <h1>Zapateria la Sangileña</h1>
        <p>Nombre: <?php echo ' ' .$nombre_usuario;?></p>
        <p>Usuario: <?php echo ' ' .$correo_usuario;?></p>

</header>

<nav class="navbar">
<section id="inicio">
        <h3>Registros</h3>
        <a href="registrar_fabricante.php">Fabricante</a>
        <a href="registrar_articulo.php">Articulo</a>
</section>
<section id="inicio">
        <h3>Consultas</h3>
</section>
<section id="inicio">
        <h3>Actualizaciones</h3>
        </section>       
<section id="inicio">        
        <h3>Eliminaciones </h3>
        </section>
<section id="inicio">
        <h3>Cerrar Sesion</h3>
        <a href="modelo/cerrar_sesion.php">Salir</a>
        </section>
    </div>
    
</nav>


    <footer>
        <p>&copy;Mi Página Web. Todos los derechos reservados :o.</p>
    </footer>

    

</body>
</html>