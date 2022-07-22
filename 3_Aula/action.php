<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { // verifica se o metodo de enviado é o post (poderia ser o get). Se for, entra no if.

    $nome = $_REQUEST['nome']; // recebe o valor do campo nome do formulario. O campo nome é o name do input.
    $email = $_REQUEST['email'];  // recebe o valor do campo email do formulario. O campo email é o name do input.
    $website = $_REQUEST['website'];
    $genero = $_REQUEST['genero'];
    $comentario = $_REQUEST['comentario'];

    function limpadado($input)
    {
        if (!empty($input)) { // se o campo nao estiver vazio, entra no if.
              
            $input = trim($input); // remove os espaços em branco do inicio e do fim.
            $input = stripslashes($input); // remove as barras invertidas do campo.
            $input = htmlspecialchars($input); // converte caracteres especiais para entidades HTML. 
        }
        return $input;
    }

    function verficarVazio($input)
    {
        foreach ($input as $key => $val) { 
            if (empty($val)) {
                echo "O campo " . $key . " nao foi preenchido <br><br>";
            } else {
                limpadado($val); 
                echo "O campo " . $key . " tem o valor de: " . $val . " <br><br>"; 
            }
        }
    }
    verficarVazio($_REQUEST);

}
header("refresh:5;url=Formulario.php"); // Faz um refresh de 5 segundos e depois vai para o url indicado
?>

