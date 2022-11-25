<?php

function bonjour($jour)
{
      if ($jour)
      {
            echo "Bonjour<br/>";
      }
      else
      {
            echo "Bonsoir<br/>";
      }
}

bonjour(True);
bonjour(False);

?>