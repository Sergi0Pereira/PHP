<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
</head>

<body>
    <?php
    $num1 = 0;
    echo "While<br>";
    echo "<br>";

    while ($num1 <= 5) {
        echo "O número é: " . $num1 . "<br>";
        $num1++;
    }
    echo "<br>";
    $num2 = 0;
    "<br><br>";
    echo "Do/while<br>";
    echo "<br>";
    do {
        echo "O número é: " . $num2 . "<br>";
        $num2++;
    } while ($num2 <= 5);


    echo "<br><br>";
    echo "Ciclo for<br>";
    echo "<br>";
    for ($i = 10; $i >= 0; $i--) {
        echo "o numero é: " . $i . "<br>";
    }
    echo "</br>";
    echo "Arrays" . "<br><br>";
    $cores = array("red", "green", "blue", "yellow");

    for ($i = 0; $i <= 3; $i++) {
        echo $cores[$i] . "<br>";
    }
    echo "<br>";

    echo "Associative Arrays <br><br>";
    $idades = array("Pedro" => 35, "Joao" => 25, "José" => 40);
    "<br><br>";
    foreach ($idades as $chave => $valor) {
        echo "$chave = $valor<br>";
    }
    echo "<br>";
    echo "Funcoes<br><br>";
    function Ola($primNome, $ultNome)
    {
        echo "Ola! " . $primNome . " " . $ultNome . " <br>";
    }

    Ola("Sérgio", "Pereira");
    Ola("António", "Silva");

    echo "<br>";
    $num5=5;
    $num6=3;
    $res=0;
    echo "Funcoes<br><br>";
    function Soma($valor1, $valor2)
    {
        return $valor1 + $valor2 ." <br>";
    }
    echo "O valor da sua soma é: " . Soma($num5, $num6)."<br>";
    echo "O valor da sua soma é: " . Soma(4,6);

    ?>

</body>

</html>