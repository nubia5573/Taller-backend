<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Mayor o menor de edad</title>
</head>
<body>

    <div class="main">
        <h1 class="titulo-principal">CALCULAR MAYOR O MENOR</h1>
        <img class="img-edad"src="img/juventud.png" alt="imagen edad">
        <div class="calculo">
            <form action="" method="POST">
                <div class="inputs">
                    <label for="Input1">Edad</label>
                    <input class="input" type="number" name="edad"  id="Input1" placeholder="Digite su edad">
                </div>
                <button class="input" type="submit" name="verificar">Operar</button>
            </form>

            <?php

            $edad = 0;
            
            if (isset($_POST['verificar'])) {
                $edad = $_POST['edad'];

                if ($edad >= 18) {
                    echo "<h1>Es mayor de edad</h1>";
                }
                else if (18 > $edad && 0 < $edad) {
                    echo "<h1>Es menor de edad</h1>";
                }else{
                    echo "<h1>No valido</h1>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>