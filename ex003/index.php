<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <h1>Tipos primitivos em PHP</h1>

    <?php 
        /* 0x = hexadecimanl 0b = binário 0 = Octal */

        $num = 300;
        echo 'O valor da variável n é $num ';

        $v = 'Emanuel';
        var_dump($v);

        //coerção, alterou o tipo da variável para inteiro
        $num = (integer) 3e2; // 3 x 10(2)
        echo "O valor de num é $num";

        $num = (float) "900";
        var_dump($num);

        //true = 1 / false = ''
        $casado = true;
        var_dump($casado);
        echo "O valor para casado é $casado";

        $vet = [1, true, "Manu", 1.1];
        var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $s = new Pessoa;
        var_dump($s);
    ?>

</body>
</html>