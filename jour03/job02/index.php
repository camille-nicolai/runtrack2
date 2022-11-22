<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
echo "$str<br>";

//tant que la phrase ne dépasse pas 100 mots tout ira bien  (on peux toujours monter la quantité)
for ($i = 0; $i <= 100; $i++) {
    //un chiffre sur deux est impaire
    //donc chaque nombre paire fera une lettre sur deux
    if($i % 2 ==0){
        $lettre = $str[$i];
        echo $lettre;
    }
}

?>