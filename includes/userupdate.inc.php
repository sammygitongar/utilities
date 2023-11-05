<?php
    
    if ($_SERVER['REQUEST_METHOD'] == "POST"){ //
        $fname = $_POST['fname'];
        $pwd = $_POST['pwd'];
        $email = $_POST['email'];

        try {
            require_once 'dbh.inc.php';

            $query = "UPDATE customers SET fname = :fname, pwd = :pwd, email = :email WHERE id =4";
            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":fname", $fname);
            $stmt->bindParam(":pwd", $pwd);
            $stmt->bindParam(":email", $email);

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