<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Formulários com PHP</title>
</head>

<body>

    <header class="mt-3 mb-3">
        <h1>
            Somador de valores
        </h1>
    </header>

    <main>

        <?php
        //capturando valores
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;

        ?>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1" class="form-label">Valor 1: </label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>">

            <label for="v2" class="form-label">Valor 2: </label>
            <input type="number" name="v2" id="v2" value="<?= $valor2 ?>">

            <button type="submit" class="btn btn-primary mb-3" id="btn-send">Somar</button>
        </form>
    </main>

    <section>
        <h2>Resultado da soma</h2>
        <?php
            $soma = $valor1 + $valor2;
            echo "A soma entre $valor1 e $valor2 é igual a $soma";
        ?>
    </section>

</body>

</html>