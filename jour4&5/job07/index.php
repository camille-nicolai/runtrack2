<html>
<body>
<form action="" method="get" class="formulaire">
      <label for="largeur">Largeur : </label>
      <input type="text" name="largeur" id="largeur">

      <label for="hauteur">Hauteur : </label>
      <input type="text" name="hauteur" id="hauteur">

      <input type="submit" value="Envoyer">
</form>
</body>
</html>

<pre>
<?php

if (isset($_GET['largeur']) && isset($_GET['hauteur']))
{

      $x = 1;
      $h = $_GET['hauteur'];

      while ($x <= $_GET['hauteur'])
      {
           
            for($i=0 ; $i <= $_GET['hauteur']-$x ; $i++)
            {
                  echo "&nbsp;";
            }
            echo "/";

            for ($j=0 ; $j < $_GET['hauteur']-$h ; $j++)
            {
                  echo "_";
            }
            if ($_GET['hauteur']-$x == 0)
            {
                  echo "\\"; 
            }
            else
            {
                  echo "\\<br/>";
            }
            $x++;
            $h -= 2;
      }





      echo "<br/>";


      for ($i=1 ; $i<$_GET['hauteur'] ; $i++)
      {
            echo "|";
            for ($j=0; $j<$_GET['largeur'] ; $j++)
            {
                  echo "&nbsp;";
            }
            echo "|<br/>";

      }
      echo "|";
      for ($i=0 ; $i<$_GET['largeur'] ; $i++)
      {
            echo "_";
      }
      echo "|<br/>";
}
?>
</pre>