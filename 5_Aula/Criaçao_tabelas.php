<?php
define("server", "localhost"); // Uso de Variaveis constantes deve ser usado no momento de definiçao de campos essenciais para a base de dados.
define("user", "root");
define("pass", "");
define("dbname", "db_php");
//Criar a Ligaçao à base de Dados.

try {
    $conn = new PDO("mysql:host=" . server. ";dbname=" .dbname, user, pass); // Objecto que define o caminho e identificaçao da base de dados.

    // Definir o modo de erro e da exceçao.
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Comando SQL

    $sql = 
    "insert into convidados (nome,apelido,email) values ('Joao','Melo','Joaomelo@gmail.com');";
    
    
    
    
    /*"create table convidados(
	id int(6) auto_increment primary key,
    nome varchar(30) not null,
    apeliddo varchar(30) not null,
    email varchar(50),
    dataRegisto timestamp default current_timestamp on update current_timestamp
    );";*/

    //executa o comando SQL

    $conn->exec($sql);

   



    echo "<h1>Base de Dados criada com sucesso!</h1>";
} catch (PDOException $e) {

    echo "<h1>Nao consegui efetuar a ligacao</h1>" . $e->getMessage(); // Mnesagem de erro gerada pelo PHP.
}
