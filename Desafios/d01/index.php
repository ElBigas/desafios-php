<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Desafio 1</title>
</head>

<body>

    <header class="mt-3 mb-3">
        <h1>
            Informe um número
        </h1>
    </header>

    <section>
        <form action="cad.php" method="get">
            <label for="number" class="form-label">Número: </label>
            <input type="number" name="number" id="idNumber" placeholder="Número">

            <button type="submit" class="btn btn-primary mb-3" id="btn-send">Calcular</button>
        </form>
    </section>

</body>

</html>