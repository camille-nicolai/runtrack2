<html>
<head>
</head>
<body>
<form action="" method="get" class="formulaire">
      <label for="str">Str : </label>
      <input type="text" name="str" id="str">
      <select name="fonction">
      	<option>Gras</option>
      	<option>Cesar</option>
      	<option>Plateforme</option>
      </select>
      <input type="submit" value="Envoyer">
</form>

<?php

function myLower($str)                                
{                                                     
      $i = 0;
      $MajAlphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $MinAlphabet = 'abcdefghijklmnopqrstuvwxyz';

      while (isset($str[$i]))
      {
            for ($j=0; $j<=26;$j++)
            {
                  if ($str[$i] == $MajAlphabet[$j])
                  {
                        $str[$i] = $MinAlphabet[$j];
                  }
            }
            $i++;
      }
      return $str;
}

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

function lengthOf($str)
{
      $i = 0;
      while (isset($str[$i]))
      {
            $i++;
      }
      return $i-1; 
}

function cutByWord($str)           
{                                   
      $i = 0;
      $j = 0;

      while (isset($str[$i]))
      {
            if ($str[$i] != " ")
            {
                  $array[$j] = $array[$j] . $str[$i];
            }
            else
            {
                  $j++;
            }
            $i++;
      }
      return $array;
}

function gras($str)
{
      $k = 0;
      $array = cutByWord($str);

      while (isset($array[$k]))
      {
            if (occurences('ABCDEFGHIJKLMNOPQRSTUVWXYZ', $array[$k][0] ))  
            {                                                              
                  $array[$k] = "<b>" . $array[$k] . "</b>";               
            }
            $nstring = $nstring . $array[$k] . " ";                     
            $k++;                                                      
      }

      return $nstring;
}

function cesar($str, $decalage = 2)
{
      $i = 0;
      $k = 0;
      $lowStr = myLower($str);
      $Alphabet = 'abcdefghijklmnopqrstuvwxyz';

      while (isset($lowStr[$i]))
      {
            for($j=0;$j<=25;$j++)
            {
                  if ($lowStr[$i] == $Alphabet[$j])   
                  {                                   
                        $k = $j + $decalage;          
                        while ($k > 25)              
                        {                            
                              $k -= 26;
                        }
                        $lowStr[$i] = $Alphabet[$k];  
                        break;                        
                  }
            }
            $i++;
      }
      return $lowStr;

}

function plateforme($str)
{
      $i = 0;
      $array = cutByWord($str);

      while (isset($array[$i]))
      {     
            if ($array[$i][lengthOf($array[$i])] == 'e' && $array[$i][lengthOf($array[$i])-1] == 'm')
            {     
                  $array[$i] = $array[$i] . "_";
            }
            $nstring = $nstring . $array[$i] . " "; 
            $i++;
      }
      return $nstring;
}

if (isset($_GET['str']))
{
      switch ($_GET['fonction'])
      {
            case 'Gras':
                  echo gras($_GET['str']);
                  break;
            case 'Cesar':
                  echo cesar($_GET['str']);
                  break;
            case 'Plateforme':
                  echo plateforme($_GET['str']);
                  break;
            default:
                  echo "Erreur";
      }
}


?>
</body>
</html>