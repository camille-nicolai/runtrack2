<html>
<body>
<form action="" method="post" class="formulaire">
      <label for="nom">Nom : </label>
      <input type="text" name="nom" id="nom">

      <label for="prenom">Prenom : </label>
      <input type="text" name="prenom" id="prenom">

      <input type="submit" value="Envoyer">
</form>
</body>
</html>

<?php

echo "<table border='1'><tr><th>Argument</th><th>Valeur</th></tr>";

foreach ($_POST as $key => $value)
{
      echo ("<tr><td>" . $key . "</td><td>" . $value . "</td></tr>");
}

echo "</table>";

?>