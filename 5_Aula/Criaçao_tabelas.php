<?php
define("server", "localhost"); // Uso de Variaveis constantes deve ser usado no momento de definiçao de campos essenciais para a base de dados.
define("user", "root");
define("pass", "");
define("dbname", "db_php");
//Criar a Ligaçao à base de Dados.

try {
    $conn = new PDO("mysql:host=" . server. ";dbname=" .dbname, user, pass); // Objecto que define o caminho e identificaçao da base de dados.

    // Definir o modo de erro e da exceçao.
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Define o modo de erro. O modo de erro é o que vai ser usado para tratar erros. O modo de erro é um atributo da classe PDO. 

    //Comando SQL

    $sql = "Select * from convidados;";
    "insert into convidados (nome,apelido,email) values ('Rui', 'Moreira','RuiMoreira@gmail.com');";
    
    
    
    
    /*"create table convidados(
	id int(6) auto_increment primary key,
    nome varchar(30) not null,
    apeliddo varchar(30) not null,
    email varchar(50),
    dataRegisto timestamp default current_timestamp on update current_timestamp
    );";*/

    //executa o comando SQL

    $statement = $conn->query($sql);

    $result = $statement-> fetchAll(); // result é um arreio associativo

    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>Nome</th>";
    echo  "<th>Apelido</th>";
    echo "<th>Email</th>";
    echo "<th>Data Registo </th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($result as $convidado){
        echo "<tr>";
        echo "<td>". $convidado["id"]."</td>";
        echo "<td>". $convidado["nome"] ."</td>";
        echo "<td>". $convidado["apelido"] ."</td>";
        echo "<td>". $convidado["email"] ."</td>";
        echo "<td>". $convidado["dataRegisto"]."</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
 
    }




    // echo "<h1Registo inserido com sucesso e com o id!. $conn-> lastInsertId() . </h1>";

catch (PDOException $e) {

    echo "<h1>Nao consegui efetuar a ligacao</h1>" . $e->getMessage(); // Mnesagem de erro gerada pelo PHP.
}
