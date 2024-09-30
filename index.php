<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zapateria</title>
</head>
<body>
    <h1>Zapateria la sangil</h1>

    <div id="div_inicio_sesion">
        <form  action="modelo/loguear.php" method="post">
            <input type="text" name="usuario" id="" placeholder = "Usuario" require>
            <br>
            <input type = "password" name="clave" id="" placeholder = "Contraseña" require>
            <br>
            <button type = "submit">Ingresar</button>
        </form> 
    </div>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #9BF557;
            color: #8824F2;
        }

        h1 {
            color: #3D24F2;
        }

        p {
            line-height: 1.5;
        }

        a {
            color: #8824F2;
        }
    </style>
</body>
</html>