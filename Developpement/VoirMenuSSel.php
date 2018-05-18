<?php require 'ConnexionBDD.php'; ?>
<?php
$pdoStat=$bdd -> prepare('SELECT * FROM menussel WHERE Id=:num');
$pdoStat-> bindValue(':num',$_GET['numMenu'],PDO::PARAM_INT);
$executeIsOk = $pdoStat-> execute();
$client = $pdoStat ->fetch();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Renseigment</title>
  <link rel="stylesheet" type="text/css" href="css/reboot.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <?php include 'Header.php'?>
  <div class="FORMAdd">
    <!-- Formulaire HTML pour ajouter un client -->
    <form enctype="multipart/form-data" class="ADDForm" action="RecherMenuSSel.php" method="post">

      <section class="bloc left">
        <h1>Informations Menu Classique</h1>
        <input type="hidden" name="Id" value="<?= $client ['Id']  ?>">
      <p><label for="name"> <?= $client ['Nom_M'] ?>  <?= $client['Date_M'] ?> </label></p>
          <p>
             <label for="name"><?= $client['LundiPotage'] ?>  <?= $client['LundiEntree1'] ?></label>
             <label for="name"><?= $client['LundiEntree2'] ?>  <?= $client['LundiEntree3'] ?></label>
           </p>
         <p>

         </p>
      </section>

        <input class="btnAddRef" type="submit" name="" value="Retour ">

      </form>
    </body>
    </html>
