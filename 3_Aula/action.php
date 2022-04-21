<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { // verifica se o metodo de enviado é o post (poderia ser o get)

    $nome = $_REQUEST['nome']; // atribui à variável $nome o valor da caixa de texto com name=fnome
    $email = $_REQUEST['email'];
    $website = $_REQUEST['website'];
    $genero = $_REQUEST['genero'];
    $comentario = $_REQUEST['comentario'];

    function limpadado($input)
    {
        if (!empty($input)) { //*Aqui verifica se o conteudo é vazio
              
            $input = trim($input);
            $input = stripslashes($input);
            $input = htmlspecialchars($input);
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

