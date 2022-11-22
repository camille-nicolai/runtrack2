<?php
$str = "Dans L'espace, Personne ne vous entend crier";
echo "$str<br>";
//compteur mis a 0
$nbchar=0;

//boucle
for ($i = 0; $i <= 100; $i++) {
    //recup la lettre
    $lettre = $str[$i];
    
    //test si la lettre existe
    //originalement avec isset mais les resultat il considere des espace vide comme des charactere
    //liste completes du comportement de isset() et empty():
    //https://21douze.fr/isset-ou-pas-isset-jeudiconfession-php-n2-7140.html
    if (empty($lettre)){
       
        break;
        
    }
    else{
         //on ajoute 1 au compteur
         $nbchar++;
    }
}
//pour debug : la bonne réponse est 44
echo "<br>Il y a $nbchar charactères dans cette phrase";
?>