<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Formulários com PHP</title>
</head>

<body>

    <header class="mt-3 mb-3">
        <h1>
            Informe um número
        </h1>
    </header>

    <main>

        <?php
        //capturando valores
        $valor = $_GET['v1'] ?? 1;
        ?>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1" class="form-label">Número: </label>
            <input type="number" name="v1" id="v1" value="<?= $valor ?>">

            <button type="submit" class="btn btn-primary mb-1" id="btn-send">Analizar</button>
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>
        <?php

            $raizQ = sqrt($valor);
            $raizC = pow($valor,(1/3));;

            echo "<p>Analisando o número <strong>$valor</strong></p>";
            echo "<p>A sua raiz quadrada é <strong>".number_format($raizQ, 3, ",", ".")."</strong></p>";
            echo "<p>A sua raiz cúbica é <strong>".number_format($raizC, 3, ",", ".")."</strong></p>";
            
        ?>
    </section>

</body>

</html>