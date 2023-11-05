<?php
    
    if ($_SERVER['REQUEST_METHOD'] == "POST"){ //
        $fname = $_POST['fname'];
        $pwd = $_POST['pwd'];
        $email = $_POST['email'];

        try {
            require_once 'dbh.inc.php';

            $query = "INSERT INTO customers (fname, pwd, email) VALUES (?, ?, ?);";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$fname, $pwd, $email]);

            $pdo = null;
            $stmt = null;

            header("Location: ../index.php");

            die();


        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }


    } else {
        header("Location: ../index.php");
    }