<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Metodo GET</title>
</head>
<body>

    <div class="main">
        <h1 class="titulo-principal">FORMULARIO DATOS BASICOS</h1>
        <img class="img-edad"src="img/personas.png" alt="imagen edad">
        <div class="calculo">
            <?php
                $edad = 0;
            
                if (isset($_GET['verificar'])) {
                    $nombre = $_GET['nombre'];
                    $apellido = $_GET['apellido'];
                    $cedula = $_GET['cc'];
                
                    echo "Nombre : ".$nombre."<br>";
                    echo "Apellido : ".$apellido."<br>";
                    echo "Cédula : ".$cedula."<br>";
                }
            ?>
        </div>
    </div>
</body>
</html>