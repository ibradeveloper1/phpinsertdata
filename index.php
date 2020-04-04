<?php
    include_once 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="signup.inc.php" method="POST">
    <input type="text" name="first" placeholder="Firstname"><br>
    <input type="text" name="last" placeholder="Lastname"><br>
    <input type="text" name="email" placeholder="E-mail"><br>
    <input type="text" name="uid" placeholder="Username"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <button type="submit" name="submit">Sign Up</button>
</form>
    
    <?php

        $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ();";
        mysqli_query($conn, $sql);

    ?>

</body>
</html>