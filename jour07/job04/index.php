<?php

function calcule($a, $operation, $b)
{
      $result = 0;
      switch ($operation)
      {
            case '+':
                  $result = $a + $b;
                  break;
            case '-':
                  $result = $a - $b;
                  break;
            case '/':
                  $result = $a / $b;
                  break;
            case '*':
                  $result = $a * $b;
                  break;
            default:
                  echo "Erreur, opérateur invalide, choose [+,-,/,*]";
      }

      return $result;
}

echo calcule(10,'+',2) . "<br/>";
echo calcule(10,'-',2) . "<br/>";
echo calcule(10,'/',2) . "<br/>";
echo calcule(10,'*',2) . "<br/>";

?>