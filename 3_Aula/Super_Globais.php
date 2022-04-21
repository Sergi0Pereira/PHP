<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis Super Globais</title>
</head>

<body>
    <h1>Variaveis Super Globais</h1>
    <?php

    echo "<b>Localizaçao do ficheiro no servidor:</b> <br><br>". $_SERVER ['PHP_SELF']."<br>" . "<br>";

    echo "<b>IP do servidor: <br><br></b>" . $_SERVER['SERVER_ADDR'] . "<br>" . "<br>";

    echo "<b>Nome do servidor: <br><br></b>" .  $_SERVER['SERVER_NAME'] . "<br>" . "<br>";

    echo "<b>Software Usado pelo servidor: <br><br></b>" .  $_SERVER['SERVER_SOFTWARE'] . "<br>" . "<br>";

    // Desafio: Procurar e investigar sobre a superglobal session para utilizaçao no projecto final.
    ?>


</body>

</html>