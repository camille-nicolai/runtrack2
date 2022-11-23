<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>formulaire</title>
    <!--<link href="style1.css" rel="stylesheet" type="text/css">-->
    <?php

    var_dump($_POST);

    foreach($_POST as $key => $value){
        echo $_POST[$key];
    
    }
    ?>
  </head>

  <body>
    <section>
        <form action="" method="post">
            <label for="style-select">Style ?</label>
            <select name="style" id="style">
                <option value="">--choisis un Style--</option>
                <option value="<link href='style1.css' rel='stylesheet'>">Style 1</option>
                <option value="<link href='style2.css' rel='stylesheet'>">Style 2</option>
                <option value="<link href='style3.css' rel='stylesheet'>">Style 3</option>
                <input type="submit" value="envoyer">
            </select>
        </form>
        <p></p>
    </section>
  </body>
</html>