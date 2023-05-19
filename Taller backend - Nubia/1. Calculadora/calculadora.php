<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/calculadora.css">
    <title>Calculadora</title>
</head>
<body>
    <div class="main">
        <h1 class="titulo-principal">CALCULADORA</h1>
        <img class="img-calculadora"src="img/calcular.png" alt="imagen calculadora">
        <div class="calculo">
            <form action="" method="POST">
                <div>
                    <label for="numero1">Número 1:</label>
                    <input class="input" type="number" name="n1" id="numero1" placeholder="Digite número 1" required>
                </div>
                <div>
                    <label for="numero2">Número 2:</label>
                    <input class="input" type="number" name="n2"  id="numero2" placeholder="Digite número 2" required>
                </div>
                <div>
                    <label for="Select1">Seleccione la operación:</label>
                    <select  class="input" name="tipo" id="Select1" required>
                    <option value="1">Suma</option>
                    <option value="2">Resta</option>
                    <option value="3">Multiplicación</option>
                    <option value="4">División</option>
                    </select>
                </div>
                <button class="input" type="submit" name="operar" >Operar</button>
            </form>

            <?php

            $n1 = $n2 = $tipo = $result = 0;
            
            if (isset($_POST['operar'])) {
                $n1 = $_POST['n1'];
                $n2 = $_POST['n2'];
                $tipo = $_POST['tipo'];

                switch ($tipo) {
                    case '1':
                        $result = $n1 + $n2;
                        break;
                    case '2':
                        $result = $n1 - $n2;
                        break;
                    case '3':
                        $result = $n1 * $n2;
                        break;
                    case '4':
                        $result = $n1 / $n2;
                        break;
                }
                echo "<h1>".$result."</h1>";
            }
            ?>
            </div>
    </div>
</body>
</html>