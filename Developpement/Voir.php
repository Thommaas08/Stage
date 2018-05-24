<?php require 'ConnexionBDD.php'; ?>
<?php
$pdoStat=$bdd -> prepare('SELECT * FROM client WHERE Id=:num');
$pdoStat-> bindValue(':num',$_GET['numclient'],PDO::PARAM_INT);
$executeIsOk = $pdoStat-> execute();
$client = $pdoStat ->fetch();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Renseigment</title>
  <link rel="stylesheet" type="text/css" href="css/reboot.css">
  <link rel="stylesheet" type="text/css" href="css/MonStyle.css">
</head>
<body>
  <?php include 'Header.php'?>
  <div class="FORMAdd">
    <!-- Formulaire HTML pour ajouter un client -->
    <form enctype="multipart/form-data" class="ADDForm" action="Recherche.php" method="post">

      <section class="bloc left">
        <h1>Informations Bénéficiaire</h1>
        <input type="hidden" name="Id" value="<?= $client['Id']  ?>">
      <p><label for="name"><?= $client['Civi'] ?>  <?= $client['Nom'] ?> <?= $client['Prenom'] ?> </label></p>
          <p>
             <label for="name"><?= $client['Adress'] ?>  <?= $client['AdressComp'] ?></label>
             <label for="name"><?= $client['CodePostal'] ?>  <?= $client['Commune'] ?></label>
           </p>
         <p>
           <label for="name"><?= $client['Regime'] ?></label>
           <label for="name"><?= $client['DateNais'] ?></label>
           <label for="name"><?= $client['Telephone'] ?></label>
         </p>
      </section>

      <section class="bloc right">
        <h1>Informations Complémentaires</h1>
        <label for="name">Civilité</label>
        <?= $client['ContactCivi']?>

        <label for="name">Personne a contacter</label>
        <?=  $client['Contact'] ?>
        <label for="name">Prénom</label>
        <?=  $client['ContactPre'] ?>
        <label for="name">Lien parenté</label>
        <?=  $client['Contact'] ?>
        <label for="name">Numéro de téléphone </label>
        <?= $client['Contact'] ?>
        <label for="name">Adresse mail </label>
        <?=$client['ContactMail'] ?>
        <br>

        <input class="btnAddRef" type="submit" name="" value="Retour ">

      </form>
    </body>
    </html>
