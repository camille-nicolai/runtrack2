<?php
//compte de 1 a 100
for ($i = 1; $i <= 100; $i++) {
    //si le nombre est divisble par 3 mais pas par 5
    if ($i % 3 == 0 and $i % 5 != 0){

        echo "Fizz<br>";
    }
    
     //si le nombre est divisble par 5  mais pas par 3
    elseif ($i % 5 == 0 and $i % 3 != 0){

        echo "Buzz<br>";
    }
    //si le nombre est divisble par 5 et par 3
    elseif ($i % 3 == 0 and $i % 5 == 0){
        echo "FizzBuzz<br>";
    }
    
    else{echo "$i<br>";}
}
?>