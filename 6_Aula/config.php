<?php
// Definir as constantes a utilizar
define("DB_HOST", "localhost"); // host do banco de dados. localhost = local do servidor. 
define("DB_USER", "root"); // nome do utilizador do banco de dados. root = nome do utilizador padrão. 
define("DB_PASS", ""); // palavra-passe do utilizador do banco de dados.
define("DB_NAME", "db_php"); // nome do banco de dados. db_php = nome do banco de dados. 
define("DSN", "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME); // Data Source Name é o nome do banco de dados. mysql:host = tipo de banco de dados. DB_HOST = host do banco de dados. DB_NAME = nome do banco de dados.
define("CONFIG_OP", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // configuração de opções do PDO. ATTR_ERRMODE = opção de erro. ERRMODE_EXCEPTION = opção de erro.

//Inciar uma sessao
session_start();



try {
    $conn = new PDO(DSN, DB_USER, DB_PASS, CONFIG_OP); // cria uma conexão com o banco de dados. DSN = Data Source Name. DB_USER = nome do utilizador do banco de dados. DB_PASS = palavra-passe do utilizador do banco de dados. CONFIG_OP = configuração de opções do PDO.
} catch (PDOException $e) {
    echo $conn . "<br>" . $e->getMessage(); // imprime a conexão com o banco de dados e a mensagem de erro.
}
