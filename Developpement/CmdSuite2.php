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
  <title>Commande</title>
  <link rel="stylesheet" type="text/css" href="css/reboot.css">
  <link rel="stylesheet" type="text/css" href="css/MonStyle.css">
</head>
<body>
  <?php include 'Header.php'?>
  <div class="FORMAdd">
    <!-- Formulaire HTML pour ajouter un client -->
    <form enctype="multipart/form-data" class="ADDForm" action="#" method="POST" >

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

        </p>
      </section>
      <section class="bloc Right">
        <h1>Choix Menu</h1>


        <?php
        //Affichage des menu
        try {
          if($client['Regime']=="Normal"){
            $req = $bdd->query('SELECT Id,Nom_M,Date_M FROM menuclassique order by Date_M desc');
          }  elseif ($client['Regime']=="Sans Sel") {
            $req = $bdd->query('SELECT Id,Nom_M,Date_M FROM menussel order by Date_M desc');
          } elseif ($client['Regime']=="Sans Sucre") {
            $req = $bdd->query('SELECT Id,Nom_M,Date_M FROM menussucre order by Date_M desc');
          };
          while($data = $req->fetch()){
            ?>
            <br>

            <section class="Text right">


              <div class="InfosRefD">
                <p><?php echo($data['Nom_M']); ?>--<?php echo ($data['Date_M']); ?>    <a href="CmdSuite3.php?numMenu=<?= $data['Id']?>&?numclient=<?= $client['Id']?>">Suite</a></p>

              </div>

            </section>

              <?php
            }

          }

          catch (PDOException $e) {
            echo 'Échec : ' . $e->getMessage();
          }

          $req->closeCursor(); //Ferme le curseur du fetch()
          ?>

        </section>
      </form>
    </body>
    </html>
