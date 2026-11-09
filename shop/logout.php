<?php 
    session_start();    
    
    if(!isset($_SESSION["nomeutente"]))
    {
        header('Location: login.php');
        exit;
    }

    if(isset($_POST["conferma"]))
    {
        session_unset();
        header('Location: login.php');
        exit;
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
</head>
<body>
    <h4>Vuoi davvero uscire <?php echo $_SESSION["nomeutente"]; ?> ?</h4>

    <form action="logout.php" method="post">
        <input type="submit" name="conferma" value="true">        
    </form>
    <br>
    <a href='dashboard.php'>dashboard.php</a>
</body>
</html>