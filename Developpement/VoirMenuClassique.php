<?php require 'ConnexionBDD.php'; ?>
<?php
$pdoStat=$bdd -> prepare('SELECT * FROM menuclassique WHERE Id=:num');
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
  <link rel="stylesheet" type="text/css" href="css/MonStyle.css">
</head>
<body>
  <?php include 'Header.php'?>
  <div class="FORMAdd">
    <!-- Formulaire HTML pour ajouter un client -->
    <form enctype="multipart/form-data" class="ADDForm" action="RecherMenuCl.php" method="post">

      <section class="bloc left">
        <h1>Informations Menu Classique</h1>
        <input type="hidden" name="Id" value="<?= $client ['Id']  ?>">
      <p><label for="name"> <?= $client ['Nom_M'] ?>  <?= $client['Date_M'] ?> </label></p>
      <h1>Lundi</h1>
      <ul>
        <p><h3>Potage</h3>
          <label for="name"><?= $client['LundiPotage'] ?> </p>
            <p><h3>Entree</h3><label for="name"><?= $client['LundiEntree1'] ?></label>
              <label for="name"><?= $client['LundiEntree2'] ?></label>  <label for="name"> <?= $client['LundiEntree3'] ?></label>
            </p>
            <p><h3>Viande</h3>
              <label for="name"><?= $client['LundiViande1'] ?></label>  <label for="name"><?= $client['LundiViande2'] ?></label>
            </p>
            <p><h3>Legume</h3>
              <label for="name"><?= $client['LundiLegume1'] ?></label> <label for="name"> <?= $client['LundiLegume2'] ?></label>
            </p>
            <p><h3>Assiette</h3>
              <label for="name"><?php $client['LundiAss'] ?></label>
            </p>
            <p><h3>Laitage</h3>
              <label for="name"><?= $client['LundiLaitier1'] ?></label> <label for="name"><?= $client['LundiLaitier2'] ?></label>
              <label for="name"><?= $client['LundiLaitier3'] ?></label>
            </p>
            <p><h3>Dessert</h3>
              <label for="name"><?= $client['LundiDess1'] ?></label> <label for="name"><?= $client['LundiDess2'] ?></label>
            </p>
      </ul>

        </section>
        <section class="bloc right">
          <h1>Mardi</h1>
          <ul>
            <p><h3>Potage</h3>
              <label for="name"><?= $client['MardiPotage'] ?> </p>
                <p><h3>Entree</h3><label for="name"><?= $client['MardiEntree1'] ?></label>
                  <label for="name"><?= $client['MardiEntree2'] ?></label>  <label for="name"> <?= $client['MardiEntree3'] ?></label>
                </p>
                <p><h3>Viande</h3>
                  <label for="name"><?= $client['MardiViande1'] ?></label>  <label for="name"><?= $client['MardiViande2'] ?></label>
                </p>
                <p><h3>Legume</h3>
                  <label for="name"><?= $client['MardiLegume1'] ?></label> <label for="name"> <?= $client['MardiLegume2'] ?></label>
                </p>
                <p><h3>Assiette</h3>
                  <label for="name"><?php $client['MardiAss'] ?></label>
                </p>
                <p><h3>Laitage</h3>
                  <label for="name"><?= $client['MardiLaitier1'] ?></label> <label for="name"><?= $client['MardiLaitier2'] ?></label>
                  <label for="name"><?= $client['MardiLaitier3'] ?></label>
                </p>
                <p><h3>Dessert</h3>
                  <label for="name"><?= $client['MardiDess1'] ?></label> <label for="name"><?= $client['MardiDess2'] ?></label>
                </p>
          </ul>

        </section>
        <section class="bloc left">
          <h1>Mercredi</h1>
          <ul>
            <p><h3>Potage</h3>
              <label for="name"><?= $client['MercrediP'] ?> </p>
                <p><h3>Entree</h3><label for="name"><?= $client['MercrediEntree1'] ?></label>
                  <label for="name"><?= $client['MercrediEntree2'] ?></label>  <label for="name"> <?= $client['MercrediEntree3'] ?></label>
                </p>
                <p><h3>Viande</h3>
                  <label for="name"><?= $client['MercrediViande1'] ?></label>  <label for="name"><?= $client['MercrediViande2'] ?></label>
                </p>
                <p><h3>Legume</h3>
                  <label for="name"><?= $client['MercrediLegume1'] ?></label> <label for="name"> <?= $client['MercrediLegume2'] ?></label>
                </p>
                <p><h3>Assiette</h3>
                  <label for="name"><?php $client['MercrediAss'] ?></label>
                </p>
                <p><h3>Laitage</h3>
                  <label for="name"><?= $client['MercrediLaitier1'] ?></label> <label for="name"><?= $client['MercrediLaitier2'] ?></label>
                  <label for="name"><?= $client['MercrediLaitier3'] ?></label>
                </p>
                <p><h3>Dessert</h3>
                  <label for="name"><?= $client['MercrediDess1'] ?></label> <label for="name"><?= $client['MercrediDess2'] ?></label>
                </p>
          </ul>

        </section>
        <section class="bloc right">
          <h1>Jeudi</h1>
          <ul>
            <p><h3>Potage</h3>
              <label for="name"><?= $client['JeudiP'] ?> </p>
                <p><h3>Entree</h3><label for="name"><?= $client['JeudiEntree1'] ?></label>
                  <label for="name"><?= $client['JeudiEntree2'] ?></label>  <label for="name"> <?= $client['JeudiEntree3'] ?></label>
                </p>
                <p><h3>Viande</h3>
                  <label for="name"><?= $client['JeudiViande1'] ?></label>  <label for="name"><?= $client['JeudiViande2'] ?></label>
                </p>
                <p><h3>Legume</h3>
                  <label for="name"><?= $client['JeudiLegume1'] ?></label> <label for="name"> <?= $client['JeudiLegume2'] ?></label>
                </p>
                <p><h3>Assiette</h3>
                  <label for="name"><?php $client['JeudiAss'] ?></label>
                </p>
                <p><h3>Laitage</h3>
                  <label for="name"><?= $client['JeudiLaitier1'] ?></label> <label for="name"><?= $client['JeudiLaitier2'] ?></label>
                  <label for="name"><?= $client['JeudiLaitier3'] ?></label>
                </p>
                <p><h3>Dessert</h3>
                  <label for="name"><?= $client['JeudiDess1'] ?></label> <label for="name"><?= $client['JeudiDess2'] ?></label>
                </p>
          </ul>

        </section>
        <section class="bloc left">
          <h1>Vendredi</h1>
          <ul>
            <p><h3>Potage</h3>
              <label for="name"><?= $client['VendrediP'] ?> </p>
                <p><h3>Entree</h3><label for="name"><?= $client['VendrediEntree1'] ?></label>
                  <label for="name"><?= $client['VendrediEntree2'] ?></label>  <label for="name"> <?= $client['VendrediEntree3'] ?></label>
                </p>
                <p><h3>Viande</h3>
                  <label for="name"><?= $client['VendrediViande1'] ?></label>  <label for="name"><?= $client['VendrediViande2'] ?></label>
                </p>
                <p><h3>Legume</h3>
                  <label for="name"><?= $client['VendrediLegume1'] ?></label> <label for="name"> <?= $client['VendrediLegume2'] ?></label>
                </p>
                <p><h3>Assiette</h3>
                  <label for="name"><?php $client['VendrediAss'] ?></label>
                </p>
                <p><h3>Laitage</h3>
                  <label for="name"><?= $client['VendrediLaitier1'] ?></label> <label for="name"><?= $client['VendrediLaitier2'] ?></label>
                  <label for="name"><?= $client['VendrediLaitier3'] ?></label>
                </p>
                <p><h3>Dessert</h3>
                  <label for="name"><?= $client['VendrediDess1'] ?></label> <label for="name"><?= $client['VendrediDess2'] ?></label>
                </p>
          </ul>

        </section>
        <section class="bloc right">
          <h1>Samedi</h1>
          <ul>
            <p><h3>Potage</h3>
              <label for="name"><?= $client['SamediP'] ?> </p>
                <p><h3>Entree</h3><label for="name"><?= $client['SamediEntree1'] ?></label>
                  <label for="name"><?= $client['SamediEntree2'] ?></label>  <label for="name"> <?= $client['SamediEntree3'] ?></label>
                </p>
                <p><h3>Viande</h3>
                  <label for="name"><?= $client['SamediViande1'] ?></label>  <label for="name"><?= $client['SamediViande2'] ?></label>
                </p>
                <p><h3>Legume</h3>
                  <label for="name"><?= $client['SamediLegume1'] ?></label> <label for="name"> <?= $client['SamediLegume2'] ?></label>
                </p>
                <p><h3>Assiette</h3>
                  <label for="name"><?php $client['SamediAss'] ?></label>
                </p>
                <p><h3>Laitage</h3>
                  <label for="name"><?= $client['SamediLaitier1'] ?></label> <label for="name"><?= $client['SamediLaitier2'] ?></label>
                  <label for="name"><?= $client['SamediLaitier3'] ?></label>
                </p>
                <p><h3>Dessert</h3>
                  <label for="name"><?= $client['SamediDess1'] ?></label> <label for="name"><?= $client['SamediDess2'] ?></label>
                </p>
          </ul>

        </section>
        <section class="bloc left">
          <h1>Dimanche</h1>
          <ul>
            <p><h3>Potage</h3>
              <label for="name"><?= $client['DimancheP'] ?> </p>
                <p><h3>Entree</h3><label for="name"><?= $client['DimancheEntree1'] ?></label>
                  <label for="name"><?= $client['DimancheEntree2'] ?></label>  <label for="name"> <?= $client['DimancheEntree3'] ?></label>
                </p>
                <p><h3>Viande</h3>
                  <label for="name"><?= $client['DimancheViande1'] ?></label>  <label for="name"><?= $client['DimancheViande2'] ?></label>
                </p>
                <p><h3>Legume</h3>
                  <label for="name"><?= $client['DimancheLegume1'] ?></label> <label for="name"> <?= $client['DimancheLegume2'] ?></label>
                </p>
                <p><h3>Assiette</h3>
                  <label for="name"><?php $client['DimancheAss'] ?></label>
                </p>
                <p><h3>Laitage</h3>
                  <label for="name"><?= $client['DimancheLaitier1'] ?></label> <label for="name"><?= $client['DimancheLaitier2'] ?></label>
                  <label for="name"><?= $client['DimancheLaitier3'] ?></label>
                </p>
                <p><h3>Dessert</h3>
                  <label for="name"><?= $client['DimancheDess1'] ?></label> <label for="name"><?= $client['DimancheDess2'] ?></label>
                </p>
          </ul>

        </section>



        <input class="btnAddRef" type="submit" name="" value="Retour ">

      </form>
    </body>
    </html>
