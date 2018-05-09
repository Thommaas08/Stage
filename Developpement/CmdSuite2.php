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
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <?php include 'Header.php'?>
  <div class="FORMAdd">
    <!-- Formulaire HTML pour ajouter un client -->
    <form >

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
      <select name="Menu" id="Menu">
                <?php require 'ConnexionBDD.php';
                if($client['Regime']="Normal"){
                  $req = $bdd->query('SELECT * FROM menuclassique');
                }
                if ($client['Regime']="Sans Sel") {
                  $req = $bdd->query('SELECT * FROM menussel');
                }
                if ($client['Regime']="Sans Sucre") {
                  $req = $bdd->query('SELECT * FROM menussucre');
                }


                while ($data = $req->fetch())
                {
                  ?>
                  <option> <?php echo $data['Nom_M'] ?> </option>
                  <?php
                }

                $req->closeCursor();

                ?>
              </select>


      </form>
    </body>
    </html>
