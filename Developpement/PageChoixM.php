<?php require 'ConnexionBDD.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $req = $bdd->query("SELECT * FROM commande WHERE Id_b='1' ");
    while ($data = $req->fetch())
    {
      ?>
      <input type="radio" name="<?php $data['Id_C'] ?>" value=""/><?php echo $data['Id_C'] ?>
      <?php
    }
    $req->closeCursor();
    ?>
  <input type="submit" value="OK"/>
  </body>
</html>
