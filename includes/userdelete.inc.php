<?php
    
    if ($_SERVER['REQUEST_METHOD'] == "POST"){ //
        $fname = $_POST['fname'];
        $pwd = $_POST['pwd'];

        try {
            require_once 'dbh.inc.php';

            $query = "DELETE FROM customers WHERE fname = :fname AND pwd = :pwd";
            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":fname", $fname);
            $stmt->bindParam(":pwd", $pwd);

            $stmt->execute();

            $pdo = null;
            $stmt = null;

            header("Location: ../updateform.php");

            die();


        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }


    } else {
        header("Location: ../updateform.php");
    }