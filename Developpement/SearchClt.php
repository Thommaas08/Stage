<!DOCTYPE html>
<html>
<!-- mettre a jour tous les noms de variabales quand la base de donnée sera fini -->
  <head>
    <meta charset="utf-8">
    <title>Recherche Client</title>
    <link rel="stylesheet" type="text/css" href="css/reboot.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
    <body>
  <?php include 'header.php' ?>
  <?php
    require'CoBDD.php';

    date_default_timezone_set('UTC');
    //Variables qui prend le résultat du formulaire pour un meilleur traitement
    $Name = $_POST['NameCLT'];
    $Prenom = $_POST['PrenomCLT'];
    $Communes =  $_POST['ListeCommunes'];
    $Date = $_POST['DateNaisA']."-".$_POST['DateNaisM']."-".$_POST['DateNaisJ'];
    $requete= "";

    //Création de la requête SQL pour la recherche, utilisation de AND afin d'optimiser la recherche
    if($Name !=NULL){
      $requete = "$requete"."Client.Nom like '".$Name."%' AND ";
    }
    if($Prenom!=NULL){
      $requete = $requete."Prenom like '%".$Prenom."%' AND ";
    }
    if($Date!="0000-00-00"){
      $requete = $requete."Date_Naissance='".$Date."' AND ";
    }
    if($Ville!=NULL){
      $requete = $requete."Refugies.Communes like '%".$Communes."%' AND ";

    $requete = substr($requete,0,-4); //On enlève les 4 derniers caractère ( AND)
  ?>
  <?php
  if((isset($_SESSION['id']))) {
  //Affichage des réfugiés
  try {
      $req = $bdd->query("SELECT *, Refugies.Nom AS NomRef, Refugies.ID AS RefID
        ,Refugies.Ville AS RefVille FROM Refugies,Camps WHERE $requete AND Refugies.ID_Camps = Camps.ID");
      while($data = $req->fetch())
          {?>
            <div class="ligne"> <!-- Création de la liste dynamique suivant le nombre de résultat de la requete SQL-->
              <section class="Text Left">
                <p class="Photo"><?php echo '<img src=img/Photo/'.$data['Photo'].' alt="" />'; ?></p>
                <div class="InfosRefG"><p><?php echo($data['Civilite'].' '); ?></p>
                  <p class=""><?php echo($data['NomRef'].' ');echo($data['Prenom']); ?></p>
                  <?php $age = date('Y') - $data['Date_Naissance'];
                        if (date('md') < date('md', strtotime($data['Date_Naissance']))) {
                          $age = $age;
                        }
                    ?>
                  <p class="InfosDate">Age : <?php echo($age)?> ans (<?php echo($data['Date_Naissance']) ?>)</p>

              </div>
              </section>
              <section class="Text Right">
                  <p class="InfosRefD">Nationalite : <?php echo($data['Nationalite']) ?></p>
                  <p class="InfosRefD">Ville d'origine : <?php echo($data['RefVille']) ?></p>
                  <p class="InfosRefD">Se situe dans le camp :  <?php echo($data['Nom']) ?></p>
                  <form class="FormBtn" method="post" action="DeleteRef.php" >
                    <input type="hidden" name="user_id" value= <?php echo $data['RefID']; ?> >
                    <input class="SubBtn"type="submit" name="Submit" value="Supprimer">
                  </form>
              </section>
            </div>
  <?php   }
  }
  catch (PDOException $e) {
      echo 'Échec : ' . $e->getMessage();
  }
  $req->closeCursor(); //Ferme le curseur du fetch()
} else {
  try {
      $req = $bdd->query("SELECT *, Refugies.Nom AS NomRef, Refugies.Ville AS RefVille FROM Refugies,Camps WHERE $requete AND Refugies.ID_Camps = Camps.ID");
      while($data = $req->fetch())
          {?>
            <div class="ligne"> <!-- Création de la liste dynamique suivant le nombre de résultat de la requete SQL-->
              <section class="Text Left">
                <p class="Photo"><?php echo '<img src=img/Photo/'.$data['Photo'].' alt="" />'; ?></p>
                <div class="InfosRefG"><p><?php echo($data['Civilite'].' '); ?></p>
                  <p class=""><?php echo($data['NomRef'].' ');echo($data['Prenom']); ?></p>
                  <?php $age = date('Y') - $data['Date_Naissance'];
                        if (date('md') < date('md', strtotime($data['Date_Naissance']))) {
                          $age = $age;
                        }
                    ?>
                  <p class="InfosDate">Age : <?php echo($age)?> ans (<?php echo($data['Date_Naissance']) ?>)</p>

              </div>
              </section>
              <section class="Text Right">
                  <p class="InfosRefD">Nationalite : <?php echo($data['Nationalite']) ?></p>
                  <p class="InfosRefD">Commune : <?php echo($data['RefVille']) ?></p>
                  <p class="InfosRefD">Se situe dans le camp :  <?php echo($data['Nom']) ?></p>
              </section>
            </div>
  <?php   }
  }
  catch (PDOException $e) {
      echo 'Échec : ' . $e->getMessage();
  }
  $req->closeCursor(); //Ferme le curseur du fetch()
} ?>
  </body>
</html>
