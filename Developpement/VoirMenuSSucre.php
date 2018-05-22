<?php require 'ConnexionBDD.php'; ?>
<?php
$pdoStat=$bdd -> prepare('SELECT * FROM menussucre WHERE Id=:num');
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
    <form enctype="multipart/form-data" class="ADDForm" action="RecherMenuSSucre.php" method="post">

      <section class="bloc left">
        <h1>Lundi</h1>
        <p> Potage
          <label for="name"><?= $client['LundiPotage'] ?> </p>
            <p>Entree <label for="name"><?= $client['LundiEntree1'] ?></label>
            </p>
            <p>Viande
              <label for="name"><?= $client['LundiViande1'] ?></label>
            </p>
            <p>Legume
              <label for="name"><?= $client['LundiLegume1'] ?></label>
            </p>
            <p>Laitage
              <label for="name"><?= $client['LundiLaitier1'] ?></label>
            </p>
            <p>Dessert
              <label for="name"><?= $client['LundiDess1'] ?></label>
            </p>
          </section>
          <section class="bloc right">
            <h1>Mardi</h1>
            <p> Potage
              <label for="name"><?= $client['MardiPotage'] ?> </p>
                <p>Entree <label for="name"><?= $client['MardiEntree1'] ?></label>
                </p>
                <p>Viande
                  <label for="name"><?= $client['MardiViande1'] ?></label>
                </p>
                <p>Legume
                  <label for="name"><?= $client['MardiLegume1'] ?></label>
                </p>
                <p>Laitage
                  <label for="name"><?= $client['MardiLaitier1'] ?></label>
                </p>
                <p>Dessert
                  <label for="name"><?= $client['MardiDess1'] ?></label>
                </p>
          </section>
          <section class="bloc left">
            <h1>Mercredi</h1>
            <p> Potage
              <label for="name"><?= $client['MercrediP'] ?> </p>
                <p>Entree <label for="name"><?= $client['MercrediEntree1'] ?></label>
                </p>
                <p>Viande
                  <label for="name"><?= $client['MercrediViande1'] ?></label>
                </p>
                <p>Legume
                  <label for="name"><?= $client['MercrediLegume1'] ?></label>
                </p>
                <p>Laitage
                  <label for="name"><?= $client['MercrediLaitier1'] ?></label>
                </p>
                <p>Dessert
                  <label for="name"><?= $client['MercrediDess1'] ?></label>
                </p>
          </section>
          <section class="bloc right">
            <h1>Jeudi</h1>
            <p> Potage
              <label for="name"><?= $client['JeudiP'] ?> </p>
                <p>Entree <label for="name"><?= $client['JeudiEntree1'] ?></label>
                </p>
                <p>Viande
                  <label for="name"><?= $client['JeudiViande1'] ?></label>
                </p>
                <p>Legume
                  <label for="name"><?= $client['JeudiLegume1'] ?></label>
                </p>
                <p>Laitage
                  <label for="name"><?= $client['JeudiLaitier1'] ?></label>
                </p>
                <p>Dessert
                  <label for="name"><?= $client['JeudiDess1'] ?></label>
                </p>
          </section>
          <section class="bloc left">
            <h1>Vendredi</h1>
            <p> Potage
              <label for="name"><?= $client['VendrediP'] ?> </p>
                <p>Entree <label for="name"><?= $client['VendrediEntree1'] ?></label>
                </p>
                <p>Viande
                  <label for="name"><?= $client['VendrediViande1'] ?></label>
                </p>
                <p>Legume
                  <label for="name"><?= $client['VendrediLegume1'] ?></label>
                </p>
                <p>Laitage
                  <label for="name"><?= $client['VendrediLaitier1'] ?></label>
                </p>
                <p>Dessert
                  <label for="name"><?= $client['VendrediDess1'] ?></label>
                </p>
          </section>
          <section class="bloc right">
            <h1>Samedi</h1>
            <p> Potage
              <label for="name"><?= $client['SamediP'] ?> </p>
                <p>Entree <label for="name"><?= $client['SamediEntree1'] ?></label>
                </p>
                <p>Viande
                  <label for="name"><?= $client['SamediViande1'] ?></label>
                </p>
                <p>Legume
                  <label for="name"><?= $client['SamediLegume1'] ?></label>
                </p>
                <p>Laitage
                  <label for="name"><?= $client['SamediLaitier1'] ?></label>
                </p>
                <p>Dessert
                  <label for="name"><?= $client['SamediDess1'] ?></label>
                </p>
          </section>
          <section class="bloc left">
            <h1>Dimanche</h1>
            <p> Potage
              <label for="name"><?= $client['DimancheP'] ?> </p>
                <p>Entree <label for="name"><?= $client['DimancheEntree1'] ?></label>
                </p>
                <p>Viande
                  <label for="name"><?= $client['DimancheViande1'] ?></label>
                </p>
                <p>Legume
                  <label for="name"><?= $client['DimancheLegume1'] ?></label>
                </p>
                <p>Laitage
                  <label for="name"><?= $client['DimancheLaitier1'] ?></label>
                </p>
                <p>Dessert
                  <label for="name"><?= $client['DimancheDess1'] ?></label>
                </p>
          </section>

        <input class="btnAddRef" type="submit" name="" value="Retour ">

      </form>
    </body>
    </html>
