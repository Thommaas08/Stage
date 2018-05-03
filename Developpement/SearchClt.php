<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Recherche Bénéficiaire</title>
  <link rel="stylesheet" type="text/css" href="css/reboot.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
  <?php include 'Header.php' ?>
  <?php
  session_start();
  require 'ConnexionBDD.php';

  //Variables qui prend le résultat du formulaire pour un meilleur traitement
  $Nom = $_POST['Nom'];
  $Prenom = $_POST['Prenom'];
  $Commune =  $_POST['Commune'];
  $requete= "";

  //Création de la requête SQL pour la recherche
  if($Nom !=NULL){
    $requete = "$requete"."Nom like '".$Nom."%' AND ";
  }
  if($Prenom!=NULL){
    $requete = $requete."Prenom like '%".$Prenom."%' AND ";
  }
  if($Commune!=NULL){
    $requete = $requete."Commune like '%".$Commune."%' AND ";
  }

  $requete = substr($requete,0,-4);
  ?>
  <?php
  //Affichage des Bénéficiaire
  try {
    $req = $bdd->query("SELECT * ,Nom,Prenom,Commune FROM client WHERE $requete")  ;
    while($data = $req->fetch()){
      ?>
      <br>
      <div class="ligne">
        <section class="Text Left">

          <div class="InfosRefG"><p>Civilité :<?php echo($data['Civi']); ?></p>
          <p>Nom : <?php echo($data['Nom']);?> Prenom : <?php echo($data['Prenom']); ?></p>

          </div>

        </section>

        <p class="InfosRefD">Date Naissance : <?php echo ($data['DateNais']); ?></p>
        <p class="">Adresse : <?php echo($data['Adress']) ?>Commune:  <?php echo($data['Commune']) ?></p>
        <a href="Supprime.php?numclient=<?= $data['Id']?>">Supprimer</a>
        <a href="TestModif.php?numclient=<?= $data['Id']?>">Modifier</a>
      </div>

      <?php
    }

  }

  catch (PDOException $e) {
    echo 'Échec : ' . $e->getMessage();
  }

  $req->closeCursor(); //Ferme le curseur du fetch()
  ?>
  <br>
  <form class="" action="recherche.php" method="post">
    <input class="btnAddRef" type="submit" name="" value="RECHERCHER Bénéficiaire">
  </form>
</body>
</html>
