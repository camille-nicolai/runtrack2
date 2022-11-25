<?php

function occurences($str, $char)
{
      $i = 0;
      $o = 0;
      while (isset($str[$i]))
      {
            if ($char == $str[$i])
            {
                  $o++;
            }
            $i++;
      }
      return $o;
}

echo occurences('Bonjour','o');
echo phpinfo();

?>