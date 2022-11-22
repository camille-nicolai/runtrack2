<?php
//compte de 2 a 1000    (1 ne compte pas vraiment)
for ($i = 2; $i <= 1000; $i++) {
    //reset etat de $premier
    $premier=true;
    //compteur x commence a 2 calcule pas avec 1 est max $1-1    car nombre premier divisable que par 1 et lui meme
    for ($x = 2; $x <= $i-1; $x++) {


        $test=$i%$x;
        //apres chaque test si le nombre est divisible (entre 1 est lui meme) , il n'est donc pas premier 
        if ($test===0){
            //le nombre n'est pas premier
            $premier=false;
            //on met fin a la boucle
            break;
        }

}
//si le nombre est premier on l'écrit
if ($premier==true){
    echo "$i<br>";
}
}
?>