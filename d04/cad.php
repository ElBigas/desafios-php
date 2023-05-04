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
            Conversor de moedas v2.0
        </h1>
    </header>

    <main>

        <?php

        /* variaveis que irão setar as datas de inicio e fim da busca da API
        * substitui na url da API as variaveis para poder estar sempre atualizado 
        * para o dia atual do sistema
        */

        $inicio = date('m-d-Y', strtotime("-7 days")); 
        $final = date('m-d-Y');

        //variavel que recebe a URL da api
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$final.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $cotacao = $dados["value"][0]["cotacaoCompra"];

        //agora mantem o mesmo do exercicio anterior, apenas altera a divisão para a 
        //variavel '$cotacao', que é o que retorna da API do banco central
        
        $real = $_GET["real"];
        $dolar = $real / $cotacao;

        //forma tradicional, fazendo na mão a formatação das moedas

        /*
        echo "<p>Seus R$". number_format($real, 2, ",", ".") ." valem <strong>US$". number_format($dolar, 2, ",", ".") ."</strong></p>"; 
        */
        
        //forma de fazer a formatação de moedas automaticamente
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "Seus ". numfmt_format_currency($padrao, $real, "BRL")." valem <strong>". numfmt_format_currency($padrao, $dolar, "USD")."*</strong>
        
        <br />
        <br />
        ";
        
        ?>

        <p>*Cotação obtida diretamente do site do <a target="_blank" href="https://dadosabertos.bcb.gov.br/">Banco Central do Brasil</a></p>

    </main>

    <form action="index.php" method="get">
        <button type="submit" class="btn btn-primary mb-3" id="btn-send">Voltar</button>
    </form>

</body>

</html>