<?php
    require 'modelo/conexion.php';

    session_start();

    // Verificamos si la sesión tiene valores de usuario y correo
    if(isset($_SESSION['username']) && isset($_SESSION['correo'])) {
        $nombre_usuario = $_SESSION['username'];
        $correo_usuario = $_SESSION['correo'];
    } else {
        // Redirigimos al usuario a la página de inicio de sesión si no ha iniciado sesión
        header("Location: login.php");
        exit();
    }

    // Obtener los fabricantes para llenar la lista desplegable
    $fabricantes_query = "SELECT id_fabricante, nombre_fabricante FROM Fabricante";
    $resultado_fabricantes = mysqli_query($conexion, $fabricantes_query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Sangileña - Registrar Artículo</title>
    
</head>
<body>






    




    <div id="contenedor_principal">
        <h1>Zapatería La Sangileña</h1>
        <p>Nombre: <?php echo $nombre_usuario; ?></p>
        <p>Correo: <?php echo $correo_usuario; ?></p>
        
        <h3>Registro de artículo</h3>
        
        <div id="reg_articulo">
            <form action="modelo/reg_articulo.php" method="post">

                <label for="id_art">Id Articulo</label>
                <input type="text" name="id_art" id="id_art" placeholder="id del Artículo" step="0.01" required>
                <br>

                <label for="nombre_art">Nombre del Artículo:</label>
                <input type="text" name="nombre_art" id="nombre_art" placeholder="Nombre del Artículo" required>
                <br>
                
                <label for="precio_art">Precio del Artículo:</label>
                <input type="number" name="precio_art" id="precio_art" placeholder="Precio del Artículo" step="0.01" required>
                <br>
                
                <label for="fabricante">Fabricante:</label>
                <select name="id_fabricante" id="fabricante" required>
                    <option value="" disabled selected>Seleccione un fabricante</option>
                    <?php
                    // Llenar la lista desplegable con los fabricantes desde la base de datos
                    while($fila = mysqli_fetch_assoc($resultado_fabricantes)) {
                        echo '<option value="' . $fila['id_fabricante'] . '">' . $fila['nombre_fabricante'] . '</option>';
                    }
                    ?>
                </select>
                <br>
                
                <button type="submit">Registrar</button>
            </form>
        </div>
    </div>
</body>
</html>