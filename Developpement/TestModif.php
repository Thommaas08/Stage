
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
  <title>Form modification </title>
  <link rel="stylesheet" type="text/css" href="css/reboot.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <?php include 'Header.php'?>
  <div class="FORMAdd">
    <!-- Formulaire HTML pour ajouter un client -->
    <form enctype="multipart/form-data" class="ADDForm" action="MajBene.php" method="post">

      <section class="bloc left">
        <h1>Informations Bénéficiaire</h1>
        <input type="hidden" name="Id" value="<?= $client['Id']  ?>">
        <label for="name">Civilité</label>
        <input type="radio" name="mon_champ" value="Monsieur"/>Monsieur
        <input type="radio" name="mon_champ" value="Madame"/>Madame

        <label for="name">Nom</label>
        <input class="inputText" type="text" name="Nom"  value="<?= $client['Nom'] ?>">
        <label for="name">Prenom</label>
        <input class="inputText" type="text" name="Prenom"  value="<?= $client['Prenom'] ?>">

        <label for="name">Adresse</label>
        <input class="inputText" type="text" name="Adresse"  value="<?= $client['Adress'] ?>">

        <label for="name">Commune</label>
        <input class="inputText" type="text" name="Commune"  value="<?= $client['Commune'] ?>">

        <label for="name">Regime</label>
        <input type="radio" name="mon_Menu" />Normal
        <input type="radio" name="mon_Menu" />Sans Sel
        <input type="radio" name="mon_Menu" />Sans Sucre

        <label for="name">Date de naissance</label>
        <input class="inputText" type="date" name="DateNais"  value="<?= $client['DateNais'] ?>">
        <label for="name">Numero de téléphone </label>
        <input class="inputText" type="text" name="Telephone"  value="<?= $client['Telephone'] ?>">


      </section>

      <section class="bloc right">
        <h1>Informations Complémentaires</h1>
        <label for="name">Civilité</label>
        <input type="radio" name="mon_champ1" value="Monsieur"/> Monsieur
        <input type="radio" name="mon_champ1" value="Madame"/> Madame

        <label for="name">Personne a contacter</label>
        <input class="inputText" type="text" name="Contact"  value="<?= $client['Contact'] ?>">
        <label for="name">Numero de téléphone </label>
        <input class="inputText" type="text" name="TelContact"  value="<?= $client['TelContact'] ?>">
        <br>

        <input class="btnAddRef" type="submit" name="" value="Enregistrer Modifications">

      </form>
    </body>
    </html>
