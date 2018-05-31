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
        <?php $id=$client['Id'] ?>
        <ul>
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
        </ul>

         <div class="grid grid-pad">
           <div class="col-1-1">
              <div class="content">
                  <h1>Historique des Commande </h1>
                  <?php
                  $req = $bdd->query("SELECT * FROM commande WHERE Id_b = $id   ");
                  while ($data = $req->fetch())
                  {
                    ?>
                    <ul>
                      <p><input type="radio" name="<?php $data['Id_C'] ?>" value=""/> <?php echo $data['Id_C'] ?>
                        <a href="Voir.php?numclient=<?= $data['Id_C']?>"> Voir </a>
                        <a href="TestModif.php?numclient=<?= $data['Id_C']?>"> Modifier </a>
                        <a href="Supprime.php?numclient=<?= $data['Id_C']?> "> Supprimer</a></p>
                    </ul>

                    <?php
                  }
                  $req->closeCursor();
                  ?>



              </div>
           </div>
         </div>
      </section>


      <section class="bloc right">
        <h1>Informations Complémentaires</h1>
        <ul>
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
        </ul>

      </form>
    </body>
    </html>
