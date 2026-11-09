<?php 
    session_start();
    if(!isset($_SESSION["nomeutente"]))
        {
            header('Location: login.php');
            exit;
        }
?>