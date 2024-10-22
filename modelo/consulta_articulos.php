<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles_pag.css">
    <title>Listado Articulos</title>




    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
    }
    .consultas {
        width: 80%;
        margin: 0 auto;
        text-align: center;
    }
    h2 {
        color: #333;
    }
    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    table th, table td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ddd;
    }
    table th {
        background-color: #4CAF50;
        color: white;
    }
    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    table tr:hover {
        background-color: #ddd;
    }
    a {
        display: inline-block;
        padding: 10px 15px;
        margin-top: 20px;
        background-color: #4CAF50;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }
    a:hover {
        background-color: #45a049;
    }
</style>


















</head>
<body>
    <header>
    <div class = "consultas">
        <h2>Articulo</h2>
    </header>
        <?php
    require 'conexion.php';

    session_start();

    if(isset($_SESSION['correo']))
    {
        //$id_fab = $_POST['id_fab'];
        //$nombre_fab = $_POST['nombre_fab'];

        $query = "SELECT id_articulo, nombre_articulo, precio_artculo FROM Articulo";

        $resultado = mysqli_query($conexion, $query) or trigger_error("Error en la consulta ". mysqli_error($conexion));

        //Encabezado tabla resultados
echo "<table border= '1' align = 'center'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Nombre</th>";
echo "<th>Precio</th>";
echo "</tr>";

// Mostrar consulta a la bd, en la tabla html
while($fila = mysqli_fetch_array($resultado))
{
    echo "<tr>";
    echo "<td>";
    echo $fila['id_articulo'];
    echo "</td>";
    echo "<td>";
    echo $fila['nombre_articulo'];
    echo "</td>";
    echo "<td>";
    echo $fila['precio_artculo'];
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