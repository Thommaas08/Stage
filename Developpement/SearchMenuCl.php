<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Recherche menu classique</title>
  <link rel="stylesheet" type="text/css" href="css/reboot.css">
  <link rel="stylesheet" type="text/css" href="css/MonStyle.css">

</head>
<body>
  <?php include 'Header.php' ?>
  <?php
  session_start();
  require 'ConnexionBDD.php';

  //Variables qui prend le résultat du formulaire pour un meilleur traitement
  $Nom = $_POST['NomMenu'];
  $date = $_POST['DATE'];
  $requete= "";

  //Création de la requête SQL pour la recherche
  if($Nom !=NULL){
    $requete = "$requete"."Nom_M like '".$Nom."%' AND ";
  }
  if($date!=NULL){
    $requete = $requete."Date_M like '%".$date."%' AND ";
  }

  $requete = substr($requete,0,-4);
  ?>
  <?php
  //Affichage des menu
  try {
    $req = $bdd->query("SELECT * ,Nom_M,Date_M FROM menuclassique WHERE $requete")  ;
    while($data = $req->fetch()){
      ?>
      <br>
      <div class="ligne">
        <section class="Text Left">

          <div class="InfosRefG">
          <p><?php echo($data['Nom_M']); ?>  </p>
          <p><?php echo ($data['Date_M']); ?></p>

          </div>

        </section>


        <a href="VoirMenuClassique.php?numMenu=<?= $data['Id']?>">Voir </a>
        <a href="ModifMenuCl.php?numclient=<?= $data['Id']?>"> Modifier </a>
        <a href="SupMenuCl.php?numclient=<?= $data['Id']?>"> Supprimer</a>

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
  <form class="" action="RecherMenuCl.php" method="post">
    <input class="btnAddRef" type="submit" name="" value="Recherche menu">
  </form>
</body>
</html>
