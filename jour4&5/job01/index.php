<form action="" method="get">
    
        <label for="name">Nom :</label><br>
        <input type="text" name="name" id="nom"><br>
        <br>
        <label for="prenom">prénom :</label><br>
        <input type="text" name="prenom" id="prenom"><br>
        <br>
        <label for="mail">e-mail :</label><br>
        <input type="text" name="mail" id="user_mail"><br>
        <br>
        <input type="submit" value="envoyer"><br>
    
</form>

<?php
        //init conteur
        $count=0;
        //pour chaque GET en argument
        foreach ($_GET as $args => $value) {
                $len=0;
                for ($i = 0; (isset($value[$i])); $i++) {
                        $len++; 
                }
                if ($len > 0) {
                        $count++;
                }
        }
        
        echo 'Le nombre d’argument GET envoyé est : ' , $count;

?>