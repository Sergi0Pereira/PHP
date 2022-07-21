<html>

<body>


    <?php

    // superglobal significa que estão sempre acessíveis, independentemente do escopo - e você pode acessá-las de qualquer função, classe ou arquivo sem precisar fazer nada de especial. Escopo significa que podem ser acessadas apenas dentro do código.  

    // As variáveis ​​superglobais do PHP são: $GLOBALS, $_SERVER, $_REQUEST, $_GET, $_POST, $_FILES, $_COOKIE, $_SESSION, $_ENV.

    // $GLOBALS = variáveis globais. $GLOBALS["nome"] = variável global.
    // é uma variável super global do PHP que é usada para acessar variáveis ​​globais de qualquer lugar no script PHP (também de dentro de funções ou métodos).

    // Exemplo

    $x = 75;
    $y = 25;
    function addition()
    {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; // se a variavel z nao for global ela nao sera acessivel (PHP Warning:  Undefined variable $z))
    }
    addition();
    echo $z . "<br>";


    // $_SERVER = variáveis do servidor. $_SERVER["HTTP_HOST"] = variável do servidor.
    // é uma variável super global do PHP que contém informações sobre cabeçalhos, caminhos e localizações de script.

    /*
A tabela a seguir lista os elementos mais importantes que podem entrar em $_SERVER:

Element/Code	Description
$_SERVER['PHP_SELF'] Retorna o nome do arquivo atual. O nome do arquivo atual é o nome do script que está sendo executado atualmente.
$_SERVER['GATEWAY_INTERFACE'] Retorna o nome da interface de gateway que está sendo usado. Normalmente, isso é "CGI/1.1".
$_SERVER['SERVER_ADDR']	Returns the IP address of the host server
$_SERVER['SERVER_NAME']	Returns the name of the host server (such as www.w3schools.com)
$_SERVER['SERVER_SOFTWARE']	Returns the server identification string (such as Apache/2.2.24)
$_SERVER['SERVER_PROTOCOL']	Returns the name and revision of the information protocol (such as HTTP/1.1)
$_SERVER['REQUEST_METHOD']	Returns the request method used to access the page (such as POST)
$_SERVER['REQUEST_TIME']	Returns the timestamp of the start of the request (such as 1377687496)
$_SERVER['QUERY_STRING']	Returns the query string if the page is accessed via a query string
$_SERVER['HTTP_ACCEPT']	Returns the Accept header from the current request
$_SERVER['HTTP_ACCEPT_CHARSET']	Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
$_SERVER['HTTP_HOST']	Returns the Host header from the current request
$_SERVER['HTTP_REFERER']	Returns the complete URL of the current page (not reliable because not all user-agents support it)
$_SERVER['HTTPS']	Is the script queried through a secure HTTP protocol
$_SERVER['REMOTE_ADDR']	Returns the IP address from where the user is viewing the current page
$_SERVER['REMOTE_HOST']	Returns the Host name from where the user is viewing the current page
$_SERVER['REMOTE_PORT']	Returns the port being used on the user's machine to communicate with the web server
$_SERVER['SCRIPT_FILENAME']	Returns the absolute pathname of the currently executing script
$_SERVER['SERVER_ADMIN']	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
$_SERVER['SERVER_PORT']	Returns the port on the server machine being used by the web server for communication (such as 80)
$_SERVER['SERVER_SIGNATURE']	Returns the server version and virtual host name which are added to server-generated pages
$_SERVER['PATH_TRANSLATED']	Returns the file system based path to the current script
$_SERVER['SCRIPT_NAME']	Returns the path of the current script
$_SERVER['SCRIPT_URI']	Returns the URI of the current 

Exemplo:
    
    
    
*/
    echo "Ficheiro atual: " . $_SERVER['PHP_SELF'] . "\n"; // retorna o nome do arquivo atual. O nome do arquivo atual é o nome do script que 
    // está sendo executado atualmente.
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nome: <input type="text" name="nome"> <br><br>
        Idade: <input type="text" name="idade"> <br> <br>
        Password: <input type="password" name="pass"> <br> <br>
        <input type="submit">
    </form>
    <?php
    /*
    $_REQUEST = variáveis de requisição. $_REQUEST["nome"] = variável de requisição.
    
    é uma variável super global do PHP que é usada para coletar dados após enviar um formulário HTML.

     O elemento form é um container para diferentes tipos de elementos de entrada, como: campos de texto, caixas de seleção, botões de opção, botões de envio etc. 
     
    Exemplo
    */

    $dados = fopen("dados.txt", "a") or die("Unable to open file!"); // w = write - cria o arquivo se não existir. Se existir, sobrescreve. a = append - adiciona ao final do arquivo. 
    if ($_SERVER["REQUEST_METHOD"] == "POST") { // se o método de requisição for post então o formulário foi enviado.   

        $name = $_REQUEST['nome']; // $_REQUEST é uma variável super global do PHP que é usada para coletar dados após enviar um formulário HTML.
        $idade = $_REQUEST['idade']; 
        $pass = $_REQUEST['pass'];
         
        if (empty($name)) { // se o campo nome estiver vazio então...
            echo "Name is empty.<br>"; // imprime "Name is empty"
        } else { // se o campo nome não estiver vazio então...
            fwrite($dados, $name ); // escreve o nome no ficheiro dados.txt (fwrite = escrever) e imprime "Name is written"
           
        }

        if (empty($idade)) { // se o campo nome estiver vazio então...
            echo "Idade is empty.<br>"; // imprime "Name is empty"
        } else { // se o campo nome não estiver vazio então...
            fwrite($dados, $idade); // escreve o nome no ficheiro dados.txt (fwrite = escrever) e imprime "Name is written"
          
        }

        if (empty($pass)) { // se o campo nome estiver vazio então...
            echo "Password is empty.<br>"; // imprime "Name is empty"
        } else { // se o campo nome não estiver vazio então...
            fwrite($dados, $pass ); // escreve o nome no ficheiro dados.txt (fwrite = escrever) e imprime "Name is written"
            fclose($dados); // fecha o ficheiro dados.txt
        }


      
    }
    ?>



    <?php
    // $_GET = variáveis de requisição GET. $_GET["nome"] = variável de requisição GET.
    // $_POST = variáveis de requisição POST. $_POST["nome"] = variável de requisição POST.
    // $_FILES = variáveis de requisição FILES. $_FILES["nome"] = variável de requisição FILES.
    // $_COOKIE = variáveis de requisição COOKIE. $_COOKIE["nome"] = variável de requisição COOKIE.
    // $_SESSION = variáveis de sessão. $_SESSION["nome"] = variável de sessão.
    // $_ENV = variáveis de ambiente. $_ENV["nome"] = variável de ambiente.

    ?>


</body>

</html>