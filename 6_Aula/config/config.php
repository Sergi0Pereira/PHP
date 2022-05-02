<?php
                define("DB_HOST", "localhost");
                define("DB_USER", "root");
                define("DB_PASS", "");    
                define("DB_NAME", "db_php");
                define("DSN", "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME);
                define("CONFIG_OP", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

try {
    $conn = new PDO(DSN, DB_USER, DB_PASS, CONFIG_OP);
} catch (PDOException $e) {
    echo $conn . "<br>" . $e->getMessage();
}
?>
