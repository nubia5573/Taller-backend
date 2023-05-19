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
            <form action="method_get_2.php" method="GET">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre</label>
                    <input type="text" name="nombre" class="input" id="exampleFormControlInput1" placeholder="Digite su Nombre">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Apellido</label>
                    <input type="text" name="apellido" class="input" id="exampleFormControlInput1" placeholder="Digite su Apellido">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Cédula</label>
                    <input type="text" name="cc" class="input" id="exampleFormControlInput1" placeholder="Digite su Cédula">
                </div>
                <button class="input" type="submit" name="verificar" class="btn btn-outline-info">Envíar</button>
            </form>
        </div>
    </div>
</body>
</html>