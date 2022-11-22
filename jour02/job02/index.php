<?php
//compte de 1 a 1337
for ($i = 1; $i <= 1337; $i++) {
    //si le nombre est 44
    if ($i === 26 or $i === 37 or $i === 88 or $i === 1111 or $i === 3233){
        echo "<br>";
    }
    //sinon (pas 42) ecrit le chiffre courrant
    else{echo "$i<br>";}
    }

?>