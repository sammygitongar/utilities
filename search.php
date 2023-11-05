<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST"){ //
        $userSearch = $_POST['usersearch'];
      try {
            require_once 'includes/dbh.inc.php';

            $query = "SELECT * FROM comments WHERE username = :usersearch";

            $stmt = $pdo->prepare($query);

            $stmt->bindparam("usersearch", $userSearch);
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $pdo = null;
            $stmt = null;

            // header("Location: index.php");

        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }


    } else {
        header("Location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Results</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="search.css">
</head>
<body>
    <h3>Search results:</h3>

    <?php
        if(empty($results)){
            echo "<div>";
            echo "<p>There are no results</p>";
            echo "</div>";
        }
            else{
                var_dump($results);
            }
    ?>
    
</body>
</html>