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
            Resultado do processamento
        </h1>
    </header>

    <main>
        <?php
        //retorna uma variável "array(2) { ["name"]=> string(7) "Emanuel" ["lastName"]=> string(11) "Evangelista" }"
        // var_dump($_GET) //super global que recebe o que foi recebido de index.php

        $name = $_GET["name"] ?? "Sem nome"; //recebe o 'name' recebido de index.php 
        $lastName = $_GET["lastName"] ?? "desconhecido"; //recebe o 'lastName' recebido de index.php 

        echo "<p>É um prazer te conhecer <strong>$name $lastName</strong>! Este é o meu site</p>";
        ?>
    </main>

    <form action="index.php" method="get">
        <button type="submit" class="btn btn-primary mb-3" id="btn-send">Voltar</button>
    </form>

</body>

</html>