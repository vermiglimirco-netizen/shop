<?php session_start(); ?>
    
<?php 
   
    $usrnm="mirco";
    $pswrd="1234";

    $usrnmin=$_POST["username"];
    $pswrdin=$_POST["password"];

    if($usrnmin==$usrnm && $pswrdin==$pswrd)
    {
        $_SESSION["username"]=$username;
        unset($_SESSION["errore"]);
        header('Location: catalogo.php');
        exit;
    }
    else
    {
        $_SESSION["errore"]=true;
        header('Location: login.php');
        exit;
    }
        


    
?>