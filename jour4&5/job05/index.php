<html>
<body>
<form action="" method="post" class="formulaire">
      <label for="username">Username : </label>
      <input type="text" name="username" id="username">

      <label for="password">Password : </label>
      <input type="text" name="password" id="password">

      <input type="submit" value="Envoyer">
</form>
</body>
</html>

<?php

if (isset($_POST['username']) && isset($_POST['password']))
{

if ($_POST['username'] == 'john' && $_POST['password'] == 'rambo')
{
      echo "C'est pas ma guerre";
}
else
{
      echo "Votre pire cauchemar";
}
}
?>