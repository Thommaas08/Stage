<?php require 'ConnexionBDD.php'; ?>
<?php
$pdoStat=$bdd -> prepare('SELECT * FROM menuclassique WHERE Id=:num');
$pdoStat-> bindValue(':num',$_GET['numclient'],PDO::PARAM_INT);
$executeIsOk = $pdoStat-> execute();
$client = $pdoStat ->fetch();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Modif Menu Normal</title>
  <link rel="stylesheet" type="text/css" href="css/reboot.css">
  <link rel="stylesheet" type="text/css" href="css/MonStyle.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>
<body>
  <?php include 'header.php' ?>

  <form enctype="multipart/form-data" class="ADDForm" action="MajMenuCl.php" method="post">

    <head>
      <input type="hidden" name="Id" value="<?= $client['Id']  ?>">
      <br>
      <input class="inputText" type="text" name="Nom_M" value="<?= $client['Nom_M']  ?>" >
      <input class="inputText" type="text" name="Date_M"  value="<?= $client['Date_M']  ?>">
      <input class="btnAddRef" type="submit" name="" value="Enregistrer">
      <br>
    </head>
    <div class="FORMAddM">
      <section class="bloc left">

        <h1>lundi</h1>
        <input type="hidden" name="Id" value="<?= $client['Id']  ?>">
        <li> Potage
          <p><input type="text" name="LundiPotage" value="<?= $client['LundiPotage']  ?>"></p>
        </li>
        <li>Entrée <p><input type="inpuText" name="LundiEntree1" value="<?= $client['LundiEntree1']  ?>">
          <input type="text" name="LundiEntree2" value="<?= $client['LundiEntree2']  ?>">

            <input type="text" name="LundiEntree3" value="<?= $client['LundiEntree3']  ?>">
          </p>
        </li>
        <li> Plat garni : Viande
            <p><input type="text" name="LundiViande1" value="<?= $client['LundiViande1']  ?>">
          <input type="text" name="LundiViande2" value="<?= $client['LundiViande2']  ?>"></p>
           légumes
          <p><input type="text" name="LundiLegume1" value="<?= $client['LundiLegume1']  ?>">
        <input type="text" name="LundiLegume2" value="<?= $client['LundiLegume2']  ?>"></p>
        </li>
        <li> Assiette complète <p><input type="text" name="LundiAss" value="<?= $client['LundiAss']  ?>"></p></li>
        <li> Produit laitier<p> <input type="inpuText" name="LundiLaitier1" value="<?= $client['LundiLaitier1']  ?>">  <input type="text" name="LundiLaitier2" value="<?= $client['LundiLaitier2']  ?>"> <input type="text" name="LundiLaitier3" value="<?= $client['LundiLaitier3']  ?>"></p></li>
        <li>Dessert <p><input type="inpuText" name="LundiDess1" value="<?= $client['LundiDess1']  ?>">  <input type="text" name="LundiDess2" value="<?= $client['LundiDess2']  ?>"><input type="inpuText" name="LundiDess3" value="<?= $client['LundiDess3']  ?>"> </p></li>
      </section>
    </div>
    <div class="FORMAddM">
      <section class="bloc right">
        <h1>Mardi</h1>
        <li> Potage <input type="text" name="MardiPotage" value="<?= $client['MardiPotage']  ?>"></li>
        <li>Entrée <input type="inpuText" name="MardiEntree1" value="<?= $client['MardiEntree1']  ?>">  <input type="text" name="MardiEntree2" value="<?= $client['MardiEntree2']  ?>">  <input type="text" name="MardiEntree3" value="<?= $client['MardiEntree3']  ?>"></li>
        <li> Plat garni : Viande <input type="text" name="MardiViande1" value="<?= $client['MardiViande1']  ?>"><input type="text" name="MardiViande2" value="<?= $client['MardiViande2']  ?>"><br> légumes <input type="text" name="MardiLegume1" value="<?= $client['MardiLegume1']  ?>"><input type="text" name="MardiLegume2" value="<?= $client['MardiLegume2']  ?>"></li>
        <li> Assiette complète <p><input type="text" name="MardiAss" value="<?= $client['MardiAss']  ?>"></p></li>
        <li> Produit laitier <input type="inpuText" name="MardiLaitier1" value="<?= $client['MardiLaitier1']  ?>">  <input type="text" name="MardiLaitier2" value="<?= $client['MardiLaitier2']  ?>">  <input type="text" name="MardiLaitier3" value="<?= $client['MardiLaitier3']  ?>"></li>
        <li>Dessert <input type="inpuText" name="MardiDess1" value="<?= $client['MardiDess1']  ?>">  <input type="text" name="MardiDess2" value="<?= $client['MardiDess2']  ?>"><input type="text" name="MardiDess3" value="<?= $client['MardiDess3']  ?>">  </li>
      </section>
    </div><div class="FORMAddM">
      <section class="bloc left">
        <h1>Mercredi</h1>
        <li> Potage <input type="text" name="MercrediP" value="<?= $client['MercrediP']  ?>"></li>
        <li>Entrée <input type="inpuText" name="MercrediEntree1" value="<?= $client['MercrediEntree1']  ?>">  <input type="text" name="MercrediEntree2" value="<?= $client['MercrediEntree2']  ?>">  <input type="text" name="MercrediEntree3" value="<?= $client['MercrediEntree3']  ?>"></li>
        <li> Plat garni : Viande <input type="text" name="MercrediViande1" value="<?= $client['MercrediViande1']  ?>"><input type="text" name="MercrediViande2" value="<?= $client['MercrediViande2']  ?>"><br> légumes <input type="text" name="MercrediLegume1" value="<?= $client['MercrediLegume1']  ?>"><input type="text" name="MercrediLegume2" value="<?= $client['MercrediLegume2']  ?>"></li>
        <li> Assiette complète <input type="text" name="MercrediAss" value="<?= $client['MercrediAss'] ?>"></li>
        <li> Produit laitier <input type="inpuText" name="MercrediLaitier1" value="<?= $client['MercrediLaitier1']  ?>"> <input type="text" name="MercrediLaitier2" value="<?= $client['MercrediLaitier2']  ?>"> <input type="text" name="MercrediLaitier3" value="<?= $client['MercrediLaitier3']  ?>"></li>
        <li>Dessert <input type="inpuText" name="MercrediDess1" value="<?= $client['MercrediDess1']  ?>">  <input type="text" name="MercrediDess2" value="<?= $client['MercrediDess2']  ?>"><input type="text" name="MercrediDess3" value="<?= $client['MercrediDess3']  ?>">  </li>
      </section>
    </div><div class="FORMAddM">
      <section class="bloc left">
        <h1>Jeudi</h1>
        <li> Potage <input type="text" name="JeudiP" value="<?= $client['JeudiP']  ?>"></li>
        <li>Entrée <input type="inpuText" name="JeudiEntree1" value="<?= $client['JeudiEntree1']  ?>">  <input type="text" name="JeudiEntree2" value="<?= $client['JeudiEntree2']  ?>">  <input type="text" name="JeudiEntree3" value="<?= $client['JeudiEntree3']  ?>"></li>
        <li> Plat garni : Viande <input type="text" name="JeudiViande1" value="<?= $client['JeudiViande1']  ?>"><input type="text" name="JeudiViande2" value="<?= $client['JeudiViande2']  ?>"><br> légumes <input type="text" name="JeudiLegume1" value="<?= $client['JeudiLegume1']  ?>"><input type="text" name="JeudiLegume2" value="<?= $client['JeudiLegume2']  ?>"></li>
        <li> Assiette complète <input type="text" name="JeudiAss" value="<?=$client['JeudiAss'] ?>"></li>
        <li> Produit laitier <input type="inpuText" name="JeudiLaitier1" value="<?= $client['JeudiLaitier1']  ?>">  <input type="text" name="JeudiLaitier2" value="<?= $client['JeudiLaitier2']  ?>">  <input type="text" name="JeudiLaitier3" value="<?= $client['JeudiLaitier3']  ?>"></li>
        <li>Dessert <input type="inpuText" name="JeudiDess1" value="<?= $client['JeudiDess1']  ?>">  <input type="text" name="JeudiDess2" value="<?= $client['JeudiDess2']  ?>"> <input type="text" name="JeudiDess3" value="<?= $client['JeudiDess3']  ?>"></li>
      </section>
    </div><div class="FORMAddM">
      <section class="bloc left">
        <h1>Vendredi</h1>
        <li> Potage <input type="text" name="VendrediP" value="<?= $client['VendrediP']  ?>"></li>
        <li>Entrée <input type="inpuText" name="VendrediEntree1" value="<?= $client['VendrediEntree1']  ?>">  <input type="text" name="VendrediEntree2" value="<?= $client['VendrediEntree2']  ?>">  <input type="text" name="VendrediEntree3" value="<?= $client['VendrediEntree3']  ?>"></li>
        <li> Plat garni : Viande <input type="text" name="VendrediViande1" value="<?= $client['VendrediViande1']  ?>"><input type="text" name="VendrediViande2" value="<?= $client['VendrediViande2']  ?>"><br> légumes <input type="text" name="VendrediLegume1" value="<?= $client['VendrediLegume1']  ?>"><input type="text" name="VendrediLegume2" value="<?= $client['VendrediLegume2']  ?>"></li>
        <li> Assiette complète <input type="text" name="VendrediAss" value="<?= $client['VendrediAss'] ?>"></li>
        <li> Produit laitier <input type="inpuText" name="VendrediLaitier1" value="<?= $client['VendrediLaitier1']  ?>">  <input type="text" name="VendrediLaitier2" value="<?= $client['VendrediLaitier2']  ?>">  <input type="text" name="VendrediLaitier3" value="<?= $client['VendrediLaitier3']  ?>"></li>
        <li>Dessert <input type="inpuText" name="VendrediDess1" value="<?= $client['VendrediDess1']  ?>">  <input type="text" name="VendrediDess2" value="<?= $client['VendrediDess2']  ?>"><input type="text" name="VendrediDess3" value="<?= $client['VendrediDess3']  ?>">  </li>
      </section>
    </div><div class="FORMAddM">
      <section class="bloc left">
        <h1>Samedi</h1>
        <li> Potage <input type="text" name="SamediP" value="<?= $client['SamediP']  ?>"></li>
        <li>Entrée <input type="inpuText" name="SamediEntree1" value="<?= $client['SamediEntree1']  ?>">  <input type="text" name="SamediEntree2" value="<?= $client['SamediEntree2']  ?>">  <input type="text" name="SamediEntree3" value="<?= $client['SamediEntree3']  ?>"></li>
        <li> Plat garni : Viande <input type="text" name="SamediViande1" value="<?= $client['SamediViande1']  ?>"><input type="text" name="SamediViande2" value="<?= $client['SamediViande2']  ?>"><br> légumes <input type="text" name="SamediLegume1" value="<?= $client['SamediLegume1']  ?>"><input type="text" name="SamediLegume2" value="<?= $client['SamediLegume2']  ?>"></li>
        <li> Assiette complète <input type="text" name="SamediAss" value="<?= $client['SamediAss'] ?>"></li>
        <li> Produit laitier <input type="inpuText" name="SamediLaitier1" value="<?= $client['SamediLaitier1']  ?>">  <input type="text" name="SamediLaitier2" value="<?= $client['SamediLaitier2']  ?>">  <input type="text" name="SamediLaitier3" value="<?= $client['SamediLaitier3']  ?>"></li>
        <li>Dessert <input type="inpuText" name="SamediDess1" value="<?= $client['SamediDess1']  ?>">  <input type="text" name="SamediDess2" value="<?= $client['SamediDess2']  ?>"> <input type="text" name="SamediDess3" value="<?= $client['SamediDess3']  ?>"></li>
      </section>
    </div><div class="FORMAddM">
      <section class="bloc left">
        <h1>Dimanche</h1>
        <li> Potage <input type="text" name="DimancheP" value="<?= $client['DimancheP']  ?>"></li>
        <li>Entrée <input type="inpuText" name="DimancheEntree1" value="<?= $client['DimancheEntree1']  ?>">  <input type="text" name="DimancheEntree2" value="<?= $client['DimancheEntree2']  ?>">  <input type="text" name="DimancheEntree3" value="<?= $client['DimancheEntree3']  ?>"></li>
        <li> Plat garni : Viande <input type="text" name="DimancheViande1" value="<?= $client['DimancheViande1']  ?>"><input type="text" name="DimancheViande2" value="<?= $client['DimancheViande2']  ?>"><br> légumes <input type="text" name="DimancheLegume1" value="<?= $client['DimancheLegume1']  ?>"><input type="text" name="DimancheLegume2" value="<?= $client['DimancheLegume2']  ?>"></li>
        <li> Assiette complète <input type="text" name="DimancheAss" value="<?= $client['DimancheAss'] ?>"></li>
        <li> Produit laitier <input type="inpuText" name="DimancheLaitier1" value="<?= $client['DimancheLaitier1']  ?>">  <input type="text" name="DimancheLaitier2" value="<?= $client['DimancheLaitier2']  ?>">  <input type="text" name="DimancheLaitier3" value="<?= $client['DimancheLaitier3']  ?>"></li>
        <li>Dessert <input type="inpuText" name="DimancheDess1" value="<?= $client['DimancheDess1']  ?>">  <input type="text" name="DimancheDess2" value="<?= $client['DimancheDess2']  ?>"> <input type="text" name="DimancheDess3" value="<?= $client['DimancheDess3']  ?>"></li>
      </section>
    </div>
    <input class="btnAddRef" type="submit" name="" value="AJOUTER Menu">
  </form>

</body>
</html>
