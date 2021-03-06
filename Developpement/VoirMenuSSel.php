<?php require 'ConnexionBDD.php'; ?>
<?php
$pdoStat=$bdd -> prepare('SELECT * FROM menussel WHERE Id=:num');
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
    <form enctype="multipart/form-data" class="ADDForm" action="RecherMenuSSel.php" method="post">

      <section class="bloc left">
        <h1>Informations Menu Classique</h1>
        <input type="hidden" name="Id" value="<?= $client ['Id']  ?>">
        <p><label for="name"> <?= $client ['Nom_M'] ?>  <?= $client['Date_M'] ?> </label></p>
        <h1>Lundi</h1>
        <ul>
          <li> <h3>Potage</h3>
            <label for="name"><?= $client['LundiPotage'] ?> </li>
          <li><h3>Entree</h3> <label for="name"><?= $client['LundiEntree1'] ?></label>
                <label for="name"><?= $client['LundiEntree2'] ?></label>  <label for="name"> <?= $client['LundiEntree3'] ?></label></li>

            <li> <h3>Plat garni</h3>  Viande<p>
                <label for="name"><?= $client['LundiViande1'] ?></label>  <label for="name"><?= $client['LundiViande2'] ?></label>
              </p>
              Légume<p>
                <label for="name"><?= $client['LundiLegume1'] ?></label> <label for="name"> <?= $client['LundiLegume2'] ?></label>
              </p></li>
            <li> <h3>Produit Laitier</h3>
                <label for="name"><?= $client['LundiLaitier1'] ?></label> <label for="name"><?= $client['LundiLaitier2'] ?></label>
                <label for="name"><?= $client['LundiLaitier3'] ?></label></li>

            <li>Dessert
                <label for="name"><?= $client['LundiDess1'] ?></label> <label for="name"><?= $client['LundiDess2'] ?></label>
              </li>
        </ul>

          </section>
          <section class="bloc right">
            <h1>Mardi</h1>
            <ul>
              <li>  <h3>Potage</h3>
                  <label for="name"><?= $client['MardiPotage'] ?> </li>
                    <li><h3>Entree</h3> <label for="name"><?= $client['MardiEntree1'] ?></label>
                      <label for="name"><?= $client['MardiEntree2'] ?></label>  <label for="name"> <?= $client['MardiEntree3'] ?></label>
                    </li>
                    <li> <h3>Plat garni</h3>  Viande<p>
                      <label for="name"><?= $client['MardiViande1'] ?></label>  <label for="name"><?= $client['MardiViande2'] ?></label>
                    </p>
                    Légumes<p>
                      <label for="name"><?= $client['MardiLegume1'] ?></label> <label for="name"> <?= $client['MardiLegume2'] ?></label>
                    </p></li>
                    <li><h3>Produit Laitier</h3>
                      <label for="name"><?= $client['MardiLaitier1'] ?></label> <label for="name"><?= $client['MardiLaitier2'] ?></label>
                      <label for="name"><?= $client['MardiLaitier3'] ?></label>
                    </li>
                    <li><h3>Dessert</h3>
                      <label for="name"><?= $client['MardiDess1'] ?></label> <label for="name"><?= $client['MardiDess2'] ?></label>
                    </li>
            </ul>

          </section>
          <section class="bloc left">
            <h1>Mercredi</h1>
            <ul>
            <li>  <h3>Potage</h3>
                <label for="name"><?= $client['MercrediP'] ?> </li>
                  <li><h3>Entree</h3> <label for="name"><?= $client['MercrediEntree1'] ?></label>
                    <label for="name"><?= $client['MercrediEntree2'] ?></label>  <label for="name"> <?= $client['MercrediEntree3'] ?></label>
                  </li>
                  <li><h3>Plat garni</h3> Viande<p>
                    <label for="name"><?= $client['MercrediViande1'] ?></label>  <label for="name"><?= $client['MercrediViande2'] ?></label>
                  </p>
                  Légumes<p>
                    <label for="name"><?= $client['MercrediLegume1'] ?></label> <label for="name"> <?= $client['MercrediLegume2'] ?></label>
                  </p></li>
                  <li><h3>Produit Laitier</h3>
                    <label for="name"><?= $client['MercrediLaitier1'] ?></label> <label for="name"><?= $client['MercrediLaitier2'] ?></label>
                    <label for="name"><?= $client['MercrediLaitier3'] ?></label>
                  </li>
                  <li><h3>Dessert</h3>
                    <label for="name"><?= $client['MercrediDess1'] ?></label> <label for="name"><?= $client['MercrediDess2'] ?></label>
                  </li>
            </ul>

          </section>
          <section class="bloc right">
            <h1>Jeudi</h1>
            <ul>
              <li>  <h3>Potage</h3>
                  <label for="name"><?= $client['JeudiP'] ?> </li>
                    <li><h3>Entree</h3> <label for="name"><?= $client['JeudiEntree1'] ?></label>
                      <label for="name"><?= $client['JeudiEntree2'] ?></label>  <label for="name"> <?= $client['JeudiEntree3'] ?></label>
                    </li>
                    <li><h3>Plat garni</h3> Viande<p>
                      <label for="name"><?= $client['JeudiViande1'] ?></label>  <label for="name"><?= $client['JeudiViande2'] ?></label>
                    </p>
                    Légumes<p>
                      <label for="name"><?= $client['JeudiLegume1'] ?></label> <label for="name"> <?= $client['JeudiLegume2'] ?></label>
                    </p></li>
                    <li><h3>Produit Laitier</h3>
                      <label for="name"><?= $client['JeudiLaitier1'] ?></label> <label for="name"><?= $client['JeudiLaitier2'] ?></label>
                      <label for="name"><?= $client['JeudiLaitier3'] ?></label>
                    </li>
                    <li><h3>Dessert</h3>
                      <label for="name"><?= $client['JeudiDess1'] ?></label> <label for="name"><?= $client['JeudiDess2'] ?></label>
                    </li>
            </ul>

          </section>
          <section class="bloc left">
            <h1>Vendredi</h1>
            <ul>
              <li><h3>Potage</h3>
                <label for="name"><?= $client['VendrediP'] ?> </li>
                  <li><h3>Entree</h3> <label for="name"><?= $client['VendrediEntree1'] ?></label>
                    <label for="name"><?= $client['VendrediEntree2'] ?></label>  <label for="name"> <?= $client['VendrediEntree3'] ?></label>
                  </li>
                  <li><h3>Plat garni</h3> Viande<p>
                    <label for="name"><?= $client['VendrediViande1'] ?></label>  <label for="name"><?= $client['VendrediViande2'] ?></label>
                  </p>
                  Légumes<p>
                    <label for="name"><?= $client['VendrediLegume1'] ?></label> <label for="name"> <?= $client['VendrediLegume2'] ?></label>
                  </p></li>
                  <li><h3>Produit Laitier</h3>
                    <label for="name"><?= $client['VendrediLaitier1'] ?></label> <label for="name"><?= $client['VendrediLaitier2'] ?></label>
                    <label for="name"><?= $client['VendrediLaitier3'] ?></label>
                  </p></li>
                  <li><h3>Dessert</h3>
                    <label for="name"><?= $client['VendrediDess1'] ?></label> <label for="name"><?= $client['VendrediDess2'] ?></label>
                  </p></li>
            </ul>

          </section>
          <section class="bloc right">
            <h1>Samedi</h1>
            <ul>
              <li><h3>Potage</h3>
                <label for="name"><?= $client['SamediP'] ?> </li>
                  <li><h3>Entree</h3> <label for="name"><?= $client['SamediEntree1'] ?></label>
                    <label for="name"><?= $client['SamediEntree2'] ?></label>  <label for="name"> <?= $client['SamediEntree3'] ?></label>
                  </p>
                  <li><h3>Plat garni</h3> Viande<p>
                    <label for="name"><?= $client['SamediViande1'] ?></label>  <label for="name"><?= $client['SamediViande2'] ?></label>
                  </p>
                  Légumes<p>
                    <label for="name"><?= $client['SamediLegume1'] ?></label> <label for="name"> <?= $client['SamediLegume2'] ?></label>
                  </p></li>
                  <li><h3>Produit Laitier</h3>
                    <label for="name"><?= $client['SamediLaitier1'] ?></label> <label for="name"><?= $client['SamediLaitier2'] ?></label>
                    <label for="name"><?= $client['SamediLaitier3'] ?></label>
                  </li>
                  <li><h3>Dessert</h3>
                    <label for="name"><?= $client['SamediDess1'] ?></label> <label for="name"><?= $client['SamediDess2'] ?></label>
                  </li>
            </ul>
          </section>
          <section class="bloc left">
            <h1>Dimanche</h1>
            <ul>
              <li><h3>Potage</h3>
                <label for="name"><?= $client['DimancheP'] ?> </li>
                  <li><h3>Entree</h3> <label for="name"><?= $client['DimancheEntree1'] ?></label>
                    <label for="name"><?= $client['DimancheEntree2'] ?></label>  <label for="name"> <?= $client['DimancheEntree3'] ?></label>
                  </li>
                  <li><h3>Plat garni</h3> Viande<p>
                    <label for="name"><?= $client['DimancheViande1'] ?></label>  <label for="name"><?= $client['DimancheViande2'] ?></label>
                  </p>
                  Légumes<p>
                    <label for="name"><?= $client['DimancheLegume1'] ?></label> <label for="name"> <?= $client['DimancheLegume2'] ?></label>
                  </p></li>
                  <li><h3>Produit Laitier</h3>
                    <label for="name"><?= $client['DimancheLaitier1'] ?></label> <label for="name"><?= $client['DimancheLaitier2'] ?></label>
                    <label for="name"><?= $client['DimancheLaitier3'] ?></label>
                  </li>
                  <li><h3>Dessert</h3>
                    <label for="name"><?= $client['DimancheDess1'] ?></label> <label for="name"><?= $client['DimancheDess2'] ?></label>
                  </li>
            </ul>

          </section>

          <input class="btnAddRef" type="submit" name="" value="Retour ">

        </form>
      </body>
      </html>
