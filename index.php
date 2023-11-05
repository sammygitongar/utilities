<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Adder</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php
    include 'includes/dbh.inc.php';
?>

<body>

    <h3>Signup</h3>


    <form action="includes/formhandler.inc.php" method="post">
            <input type="text" name="fname" placeholder="Username" id="">
            <input type="password" name="pwd" placeholder="Password" id="">
            <input type="email" name="email" placeholder="Email">
            <button>Signup</button>
    </form>
</body>


</body>
</html>



