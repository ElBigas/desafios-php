<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Desafio 1</title>
</head>

<body>

    <header class="mt-3 mb-3">
        <h1>
            Resultado final
        </h1>
    </header>

    <main>
        <?php
        

        $number = $_GET["number"] ?? "Sem número";
        $lastName = $_GET["lastName"] ?? "desconhecido";

        echo "<p>O número escolhido foi <strong>$number</strong></p>";
        echo "<p>Seu antecessor é <strong>$number - 1</strong></p>";        
        echo "<p>Seu sucessor é <strong>$number + 1</strong></p>";
        ?>
    </main>

    <form action="index.php" method="get">
        <button type="submit" class="btn btn-primary mb-3" id="btn-send">Voltar</button>
    </form>

</body>

</html>