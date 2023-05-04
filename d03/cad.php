<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Desafio 2</title>
</head>

<body>

    <header class="mt-3 mb-3">
        <h1>
            Resultado final
        </h1>
    </header>

    <main>
        <?php
        
        $real = $_GET["real"];
        $dolar = $real / 5.05;

        //forma tradicional, fazendo na mão a formatação das moedas
        /*
        echo "<p>Seus R$". number_format($real, 2, ",", ".") ." valem <strong>US$". number_format($dolar, 2, ",", ".") ."</strong></p>"; */

        
        //forma de fazer a formatação de moedas automaticamente
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "Seus ". numfmt_format_currency($padrao, $real, "BRL")." valem <strong>". numfmt_format_currency($padrao, $dolar, "USD")."</strong>";
        ?>

    </main>

    <form action="index.php" method="get">
        <button type="submit" class="btn btn-primary mb-3" id="btn-send">Voltar</button>
    </form>

</body>

</html>