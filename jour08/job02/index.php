<?php

var_dump($_POST);

if(isset($_POST['reset'])){
    $_COOKIE['nbvisites'] = 0;
    var_dump($_COOKIE);
}
            
if(isset($_COOKIE['nbvisites'])){
    $_COOKIE['nbvisites']++;
    echo 'Nombre de visites : '.$_COOKIE['nbvisites'];
    var_dump($_COOKIE);
}
else{
    setcookie('nbvisites',0, time()+3600);
    //$_COOKIE['nbvisites'];
}

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