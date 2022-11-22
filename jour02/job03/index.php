<?php
//compte de 1 a 100
for ($i = 1; $i <= 100; $i++) {
   
    //si le nombre est entre 0 et 20
    if ($i >= 0 and $i <=20){
        //italique
        echo "<i>";
        echo $i;
        echo "</i><br>";
    }
    
    elseif ($i >= 25 and $i <=50 and $i !=42){
        echo "<u>";
        echo $i;
        echo "</u><br>";
    }
    
    elseif ($i === 42){
        echo "LaPlateforme_<br>";
    }

    else{echo "$i<br>";}
    }

?>