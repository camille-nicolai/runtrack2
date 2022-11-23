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
$i = 0;
foreach ($_POST as $key => $value) {
      if ($value != "")
      {
            $i++;
      }
}
echo "Le nombre d'argument POST envoyé est : " . $i;

?>