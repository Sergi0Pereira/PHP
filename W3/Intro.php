<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>O meu Primeiro Ficheiro PHP</h1>
    <div style="font-size:20px;background-color:blue;color:white;width:1000px"> <?php
    echo "Olá Mundo"; // echo = print --- ; obrigatório --- Case Sensitive na definiçao das variáveis mas nao nas classes,funcoes (inclusive as definidas pelo usuario)
    $txt = " Assim começo a minha jornada em PHP no ano de ";
    $ano = 2022;

    // os nomes das variáveis ​​PHP diferenciam maiúsculas de minúsculas!
    ?>
        <p>
            <?php echo $txt . $ano; // o . faz com que as variaveis se somem
            ?>
        </p>
    </div>

</body>

</html>