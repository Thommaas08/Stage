<?php require 'ConnexionBDD.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="GET" action="PageChoixM2.php?numMenu=<?= $data['Id']?>">
    <?php


    $req = $bdd->query('SELECT Id,Nom_M FROM menuclassique');


    while ($data = $req->fetch())
    {
      ?>

      <input type="radio" name="<?php $data['Id'] ?>" value=""/><?php echo $data['Nom_M'] ?>






      <?php
    }

    $req->closeCursor();

    ?>
  <input type="submit" value="OK"/>
</form>
  </body>
</html>
