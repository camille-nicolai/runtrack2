<?php
//le tableau
$tableau = array (200, 204, 173, 98, 171, 404, 459);

/*
boucle qui vérifie que la valeure n'est pas null fonction isset autorisé
tant que valeur pas null compteur +1
*/
for ($x = 1; $i <= 100; $x++) {
    $nomb = $tableau[$x-1];
    if (isset($nomb)){
        if ($nomb % 2 == 0){
            echo "$nomb est paire<br>";
        }
        else {
            echo "$nomb est impaire<br>";
        }
    }
    else{
        break;
    }
}
/*
//compte nombre d'éléments dans le tableau
//deja le faire marcher et ensuite compliquer en enlevant les fonctions systemes    
$nbpos=count($tableau);
//prend chaque chiffre jusqu'au nombre d'élément dans la liste
for ($i = 0; $i <= $nbpos-1; $i++) {
 
    $nombre = $tableau[$i];
    if ($nombre % 2 == 0){
        echo "$nombre est paire<br>";
    }
    else {
        echo "$nombre est impaire<br>";
    }
}*/
?>