<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    
    <form action="verifica.php" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password"  placeholder="password">
        <input type="submit" placeholder="invia">
    </form>

    <?php 
    if(isset($_SESSION["errore"]))
    {
        echo "login non riuscito";
        unset($_SESSION["errore"]);
    }
    ?>

</body>
</html>