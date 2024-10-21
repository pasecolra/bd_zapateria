<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Listado fabricantes</title>
</head>
<body>
    <div class = "consultas">
        <h2>Fabricantes</h2>
        <?php
    require 'conexion.php';

    session_start();

    if(isset($_SESSION['correo']))
    {
        //$id_fab = $_POST['id_fab'];
        //$nombre_fab = $_POST['nombre_fab'];

        $query = "SELECT id_fabricante, nombre_fabricante FROM Fabricante";

        $resultado = mysqli_query($conexion, $query) or trigger_error("Error en la consulta ". mysqli_error($conexion));

        //Encabezado tabla resultados
echo "<table border= '1' align = 'center'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Nombre</th>";
echo "</tr>";

// Mostrar consulta a la bd, en la tabla html
while($fila = mysqli_fetch_array($resultado))
{
echo "<tr>";
echo "<td>";
echo $fila['id_fabricante'];
echo "</td>";
echo "<td>";
echo $fila['nombre_fabricante'];
echo "</td>";
echo "</tr>";
}

echo "</table>";
echo "<br>";

echo "<div id='home'><a href='../pagina_principal.php'>Home</a></div>";
}


    ?>
    </div>
    
</body>
</html>