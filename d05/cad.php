<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Desafio 5</title>
</head>

<body>

    <header class="mt-3 mb-3">
        <h1>
            Analisador de número real
        </h1>
    </header>

    <main>
        <?php

        $number = $_GET["real"] ?? 0;

        $int = (int)$number;
        $fra = $number - $int;

        ?>

        <p>Analisando o número <strong><?php echo number_format($number, 3, ",", ".") ?></strong> informado pelo usuário:</p>

        <ul>
            <li>
                <p>A parte inteira do número é <strong><?php echo number_format($int, 0, ",", ".") ?></strong></p>
            </li>
            <li>
                <p>A parte fracionária do número é <strong><?php echo number_format($fra, 3, ",", ".") ?></strong></p>
            </li>
        </ul>

    </main>

    <form action="index.php" method="get">
        <button type="submit" class="btn btn-primary mb-3" id="btn-send">Voltar</button>
    </form>

</body>

</html>