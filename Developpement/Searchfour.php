<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Recherche Bénéficiaire</title>
  <link rel="stylesheet" type="text/css" href="css/reboot.css">
  <link rel="stylesheet" type="text/css" href="css/MonStyle.css">
  <link rel="stylesheet" type="text/css" href="css/simplegrid.css">

</head>
<body>
  <?php include 'Header.php' ?>
  <?php
  session_start();
  require 'ConnexionBDD.php';

  //Variables qui prend le résultat du formulaire pour un meilleur traitement
  $date = $_POST['Date'];
  $Type = $_POST['TypeM'];
  $requete= "";

  //Création de la requête SQL pour la recherche
  if($date !=NULL){
    $requete = "$requete"."m_date like '".$date."%' AND ";
  }
  if($Type!=NULL){
    $requete = $requete."Type_M like '%".$Type."%' AND ";
  }


  $requete = substr($requete,0,-4);
  ?>
  <?php
  try {
    $req = $bdd->query("SELECT Nom_b,Prenom_b,LundiPotage,LundiEntree,LundiViande,LundiLegume FROM commande WHERE $requete AND Nom_b!='NULL'   ")  ;
    while($data = $req->fetch()){
      ?>
      <br>

      <div class="grid grid-pad">
        <div class="col-1-1">
           <div class="content">
               <p><?php echo($data['Nom_b']); ?>-<?php echo($data['Prenom_b']); ?> -<?php echo($data['LundiPotage']); ?>- <?php echo($data['LundiEntree']); ?> <br> </p><br>
           </div>
        </div>
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
  <form class="" action="#" method="post">
    <input class="btnAddRef" type="submit" name="" value="RECHERCHER Bénéficiaire">
  </form>
</body>
</html>
