<!-- There are several ways to connect to a database:
    mysql connection: It is obsolete - do not use
    improved mysql(called mysqli) - has extra sql injection protection
    php data object (pdo connections) - Used in this instance -->
<?php

    $dsn = "mysql:host=localhost;dbname=learning_db";
    $dbusername = "root";
    $dbpassword = "";

    try{
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }  catch (PDOException $e) {
        echo "Connection failed: ". $e->getMessage();
    };