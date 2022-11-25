<?php


if(isset($_COOKIE["Prenom"])){
   
}

?>

<form method="post" action="index.php">
    <input type="submit"  name="deconnexion" value ="deco">
</form>


<form method="post" action="index.php">
     Prénom<br>
    <input type="text" name="Prenom">
    <br><br>
    <input type="submit" value="Connexion">
</form>