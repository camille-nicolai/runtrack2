<?php

session_start();

if(isset($_POST['reset'])){
    $_SESSION['nbvisites'] = 0;
    var_dump($_SESSION);
}

            
if(isset($_SESSION['nbvisites'])){
    $_SESSION['nbvisites']++;
    echo 'Nombre de visites : '.$_SESSION['nbvisites'];
    var_dump($_SESSION);
}
else{
    $_SESSION['nbvisites'] = 0;
}

var_dump($_POST);



?>

<!DOCTYPE html>
<html>
    <head>
        <title>visites</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <form action="" method="post">
            <input type="submit" value="Reset" name='reset'> 
        </form>
    </body>
</html>