<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Config</title>
</head>
<body>
    <?php
                define("DB_HOST", "localhost");
                define("DB_USER", "root");
                define("DB_PASS", "");    
                define("DB_NAME", "db_php");
                define("DSN", "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME);
                define("CONFIG_OP", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    ?>
</body>
</html>