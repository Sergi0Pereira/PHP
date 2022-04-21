<?php define("CARROS", ["BMW", "MERCEDES"]) ?>
<?php define("PI", 3.141592653589); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Aula1_php.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

    <title>Aula 1</title>
</head>

<body>
    <h1>Aula 1
    </h1>


    <?php
    $txt = "Ola";
    $txt2 = $txt . " Mundo";
    $num1 = 25;
    $num2 = 25;
    $flag1 = true;
    $carros = array("Peugeot", "Mercades", "Fiat");

    echo  $txt2 . "<div class=title></div>";

    echo "A mostrar PHP ao " . "<strong>mundo</strong>" . "<br>" . "<br>";

    if ($num1 > $num2) {
        echo "O numero " . $num1 . " é maior que o " . $num2 . "<br>";
    } elseif ($num1 < $num2) {
        echo "O numero " . $num2 . " é maior que o " . $num1 . "<br>";
    } else {
        echo "Os valores sao iguais.";
    }
    $texto = "Ola Mundo";
    echo "tamanho strings: " . strlen($texto) . "<br>" . "<br>";
    echo "Numero palavras:" . str_word_count($texto) . "<br>";
    echo "string Invertida " . strrev($texto) . "<br>";
    echo "string Substituida " . str_replace("Olá", "Adeus", $texto) . "<br>";
    echo $num1 + $num2 . "<br>";
    $color = "azul";
    switch ($color) {
        case "vermelho":
            echo "cor Vermelha";
            break;
        case "verde":
            echo "cor verde";
            break;
        default:
            echo "cor nao reconhecida";
    }
    echo "<br>" . PI . "<br>" . "<br>";
    echo CARROS[0] . "<br>" . "<br>"; ?>
    <?php
    $num1 = 0;
    echo "Versao do while <br><br>";

    while ($num1 <= 5) {
        echo "O número é: " . $num1 . "<br>";
        $num1++;
    }
    $num2 = 0;
    "<br><br>";
    echo "Versao do/while> <br><br>";

    do {
        echo "O número é: " . $num2 . "<br>";
        $num2++;
    } while ($num2 <= 5);


    "<br><br>";
    echo "Ciclo for <br><br>";
    for ($i = 10; $i >= 0; $i--) {
        echo "o numero é: " . $i . "<br>";
    }
    ?>
</body>

</html>