<?php require 'ConnexionBDD.php'; ?>
<?php
$pdoStat=$bdd -> prepare('SELECT * FROM menuclassique WHERE Id=:num');
$pdoStat-> bindValue(':num',$_GET['numMenu'],PDO::PARAM_INT);
$executeIsOk = $pdoStat-> execute();
$client = $pdoStat ->fetch();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <input type="hidden" name="Id" value="<?= $client['Id']  ?>">
    <p><label for="name"><?= $client['Nom_M'] ?>  <?= $client['Date_M'] ?></p>
  </body>
</html>
