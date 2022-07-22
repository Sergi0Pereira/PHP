<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3</title>
</head>

<body>
    <h1></h1>
    <h2>Funcao Array</h2>
    <?php
    $clubes = array("Porto", "Sporting", "Benfica"); // funcao array

    for ($i = 0; $i < count($clubes); $i++) { // count é um metodo que conta as posicoes do arreio.. neste caso 3
        echo  $clubes[$i] . "<br>";
    }
    "<br>";
    echo "Count é um metodo que conta as posicoes do arreio.Neste caso 3 posicoes.";
    ?>

    <br>
    <h2>Arrays associativos</h2>

    <?php

    $idades = array("Sergio" => 32, "joana" => 23);
    foreach ($idades as $Nome => $idade) {
        echo "Nome: " . $Nome . "<br>" . "Idade: " . $idade . "<br>";
    }
    ?>
    <br>
    <h2>Arrays MultiDimensionais</h2>
    <?php
    $carros = array(
        array("bmw", 22, 18),
        array("Mercedes", 23, 5),
        array("Saab", 32, 33),
        array("Smart", 10, 10)
    );

    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Linha Indice " . $row . "</b></p>";
        echo "<ul>";

        for ($col = 0; $col < 3; $col++) {
            echo "<li>" . $carros[$row][$col] . "</li>";
        }
        echo "</ul>";
    }
    ?>
    <br>
    <h2>Variaveis Super-Globais</h2>

    

    


</body>

</html>