<?php 
    session_start(); 
    if(!isset($_SESSION["username"]))
    {
        header('Location: login.php');
        exit;
    }

    $a1=  array ("id"=> "1", "descrizione"=> "trek", "prezzo"=> 9, "quantita"=> 0);
    $a2= array ("id"=> "2", "descrizione"=> "canyon", "prezzo"=> 7, "quantita"=> 0);
    $a3= array ("id"=> "3", "descrizione"=> "scott", "prezzo"=> 9, "quantita"=> 0);
    $a4= array ("id"=> "4", "descrizione"=> "specialised", "prezzo"=> 12, "quantita"=> 0);
    $a5= array ("id"=> "5", "descrizione"=> "colnago", "prezzo"=> 20, "quantita"=> 0);

    $listino = array ("1"=> $a1, "2"=> $a2, "3"=> $a3, "4"=> $a4, "5"=> $a5);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catalogo</title>
</head>
<body>

    <form action="checkout.php" method="post">
    <table>
        <tr>
            <th>id</th>
            <th>descrizione</th>
            <th>prezzo</th>
            <th>quantita</th>
        </tr>        
            <?php foreach ($listino as $c => $v) { ?>

                <tr>
                
                    <td><?php echo $v['id']; ?></td>
                    <td><?php echo $v['descrizione']; ?></td>
                    <td><?php echo $v['prezzo']; ?></td>
                    <td><input type="number" name="q<?php echo $v['id']; ?>"></td>
                
                </tr>;

            <?php } ?>

        
        

    </table>
    <input type="submit"  placeholder="invia"> 
    </form>
    <a href='logout.php'>logout.php</a>
</body>
</html>