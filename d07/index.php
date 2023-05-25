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
            Informe seu salário
        </h1>
    </header>

    <main>

        <?php
        //capturando valores
        $valor1 = $_GET['v1'] ?? 0;
        $salario = $_GET['v1'] ?? 0;
        ?>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1" class="form-label">Salário: </label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>">

            <p>Considerando o salário mínimo de <strong>R$1380,00</strong></p>

            <button type="submit" class="btn btn-primary mb-1" id="btn-send">Calcular</button>
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>
        <?php

            $resultado =  0;
            $cont = 0;

            while($valor1 > 1380) {
                $valor1 = $valor1 - 1380;
                $resultado = $valor1;
                $cont = $cont + 1;
            };

            echo "<p>Quem recebe um salário de <strong>R$$salario</strong> ganha <strong>$cont salários mínimos</strong> + <strong>R$$resultado,00.</strong></p>";
        ?>
    </section>

</body>

</html>