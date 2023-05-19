<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calcular edad</title>
</head>
<body>
    <div class="main">
        <h1 class="titulo-principal">CALCULAR EDAD EXACTA</h1>
        <img class="img-edad"src="img/pensando.png" alt="imagen edad">
        <div class="calculo">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Seleecione su fecha de nacimiento:</label>
                    <input type="date" name="f_n" class="input" id="exampleFormControlInput1">
                </div>
                <button type="submit" name="verificar" class="input">Envíar</button>
            </form>
            <?php
            if (isset($_POST['verificar'])) {
                $f_n = new DateTime($_POST['f_n']);
                $date2 = new DateTime(date("y-m-d"));
                $diff = $f_n->diff($date2);
                $edad_actual = $diff->y;
                $edad_meses = $diff->m;
                $edad_dias = $diff->d;

                echo "años: ".$edad_actual." meses: ".$edad_meses." dias: ".$edad_dias;
            }
            ?>
        </div>
    </div>
</body>
</html>