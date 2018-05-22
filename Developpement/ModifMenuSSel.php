<?php require 'ConnexionBDD.php'; ?>
<?php
$pdoStat=$bdd -> prepare('SELECT * FROM menussel WHERE Id=:num');
$pdoStat-> bindValue(':num',$_GET['numclient'],PDO::PARAM_INT);
$executeIsOk = $pdoStat-> execute();
$client = $pdoStat ->fetch();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Modif Menu Sans Sel</title>
  <link rel="stylesheet" type="text/css" href="css/reboot.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>
<body>
  <?php include 'header.php' ?>
  <form enctype="multipart/form-data" class="ADDForm" action="#" method="post">
<head>
  <br>
    <input class="inputText" type="text" name="NomMenu" value="<?= $client['Nom_M']  ?>" >
    <input class="inputText" type="text" name="DateM" value="<?= $client['Date_M']  ?>">
    <input class="btnAddRef" type="submit" name="" value="AJOUTER Menu">
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

            <input type="text" name="lEntre3" value="<?= $client['LundiEntree3']  ?>">
          </p>
        </li>
        <li> Plat garni : Viande
            <p><input type="text" name="lviande1" value="<?= $client['LundiViande1']  ?>">
          <input type="text" name="lviande2" value="<?= $client['LundiViande2']  ?>"></p>
           légumes
          <p><input type="text" name="llegume1" value="<?= $client['LundiLegume1']  ?>">
        <input type="text" name="llegume2" value="<?= $client['LundiLegume2']  ?>"></p>
        </li>
        <li> Produit laitier<p> <input type="inpuText" name="llaitage1" value="<?= $client['LundiLaitier1']  ?>">  <input type="text" name="llaitage2" value="<?= $client['LundiLaitier2']  ?>"> <input type="text" name="llaitage3" value="<?= $client['LundiLaitier3']  ?>"></p></li>
        <li>Dessert <p><input type="inpuText" name="ldessert1" value="<?= $client['LundiDess1']  ?>">  <input type="text" name="ldessert2" value="<?= $client['LundiDess2']  ?>"> </p></li>
      </section>
    </div>
    <div class="FORMAddM">
      <section class="bloc right">
        <h1>Mardi</h1>
        <li> Potage <input type="text" name="Mp" value="<?= $client['MardiPotage']  ?>"></li>
        <li>Entrée <input type="inpuText" name="MEntre1" value="<?= $client['MardiEntree1']  ?>">  <input type="text" name="MEntre2" value="<?= $client['MardiEntree2']  ?>">  <input type="text" name="MEntre3" value="<?= $client['MardiEntree3']  ?>"></li>
        <li> Plat garni : Viande <input type="text" name="Mviande1" value="<?= $client['MardiViande1']  ?>"><input type="text" name="Mviande2" value="<?= $client['MardiViande2']  ?>"><br> légumes <input type="text" name="Mlegume1" value="<?= $client['MardiLegume1']  ?>"><input type="text" name="Mlegume2" value="<?= $client['MardiLegume2']  ?>"></li>
        <li> Produit laitier <input type="inpuText" name="Mlaitage1" value="<?= $client['MardiLaitier1']  ?>">  <input type="text" name="Mlaitage2" value="<?= $client['MardiLaitier2']  ?>">  <input type="text" name="Mlaitage3" value="<?= $client['MardiLaitier3']  ?>"></li>
        <li>Dessert <input type="inpuText" name="Mdessert1" value="<?= $client['MardiDess1']  ?>">  <input type="text" name="Mdessert2" value="<?= $client['MardiDess2']  ?>">  </li>
      </section>
    </div><div class="FORMAddM">
      <section class="bloc left">
        <h1>Mercredi</h1>
        <li> Potage <input type="text" name="MerP" value="<?= $client['MercrediP']  ?>"></li>
        <li>Entrée <input type="inpuText" name="MerEntre1" value="<?= $client['MercrediEntree1']  ?>">  <input type="text" name="MerEntre2" value="<?= $client['MercrediEntree2']  ?>">  <input type="text" name="MerEntre3" value="<?= $client['MercrediEntree3']  ?>"></li>
        <li> Plat garni : Viande <input type="text" name="Merviande1" value="<?= $client['MercrediViande1']  ?>"><input type="text" name="Merviande2" value="<?= $client['MercrediViande2']  ?>"><br> légumes <input type="text" name="Merlegume1" value="<?= $client['MercrediLegume1']  ?>"><input type="text" name="Merlegume2" value="<?= $client['MercrediLegume2']  ?>"></li>
        <li> Produit laitier <input type="inpuText" name="Merlaitage1" value="<?= $client['MercrediLaitier1']  ?>"> <input type="text" name="Merlaitage2" value="<?= $client['MercrediLaitier2']  ?>"> <input type="text" name="Merlaitage3" value="<?= $client['MercrediLaitier3']  ?>"></li>
        <li>Dessert <input type="inpuText" name="Merdessert1" value="<?= $client['MercrediDess1']  ?>">  <input type="text" name="Merdessert2" value="<?= $client['MercrediDess2']  ?>">  </li>
      </section>
    </div><div class="FORMAddM">
      <section class="bloc left">
        <h1>Jeudi</h1>
        <li> Potage <input type="text" name="Jp" value="<?= $client['JeudiP']  ?>"></li>
        <li>Entrée <input type="inpuText" name="JeuEntre1" value="<?= $client['JeudiEntree1']  ?>">  <input type="text" name="JeuEntre2" value="<?= $client['JeudiEntree2']  ?>">  <input type="text" name="JeuEntre3" value="<?= $client['JeudiEntree3']  ?>"></li>
        <li> Plat garni : Viande <input type="text" name="Jeuviande1" value="<?= $client['JeudiViande1']  ?>"><input type="text" name="Jeuviande2" value="<?= $client['JeudiViande2']  ?>"><br> légumes <input type="text" name="Jeulegume1" value="<?= $client['JeudiLegume1']  ?>"><input type="text" name="Jeulegume2" value="<?= $client['JeudiLegume2']  ?>"></li>
        <li> Produit laitier <input type="inpuText" name="Jeulaitage1" value="<?= $client['JeudiLaitier1']  ?>">  <input type="text" name="Jeulaitage2" value="<?= $client['JeudiLaitier2']  ?>">  <input type="text" name="Jeulaitage3" value="<?= $client['JeudiLaitier3']  ?>"></li>
        <li>Dessert <input type="inpuText" name="Jeudessert1" value="<?= $client['JeudiDess1']  ?>">  <input type="text" name="Jeudessert2" value="<?= $client['JeudiDess2']  ?>"> </li>
      </section>
    </div><div class="FORMAddM">
      <section class="bloc left">
        <h1>Vendredi</h1>
        <li> Potage <input type="text" name="VP" value="<?= $client['VendrediP']  ?>"></li>
        <li>Entrée <input type="inpuText" name="VEntre1" value="<?= $client['VendrediEntree1']  ?>">  <input type="text" name="VEntre2" value="<?= $client['VendrediEntree2']  ?>">  <input type="text" name="VEntre3" value="<?= $client['VendrediEntree3']  ?>"></li>
        <li> Plat garni : Viande <input type="text" name="Vviande1" value="<?= $client['VendrediViande1']  ?>"><input type="text" name="Vviande2" value="<?= $client['VendrediViande2']  ?>"><br> légumes <input type="text" name="Vlegume1" value="<?= $client['VendrediLegume1']  ?>"><input type="text" name="Vlegume2" value="<?= $client['VendrediLegume2']  ?>"></li>
        <li> Produit laitier <input type="inpuText" name="Vlaitage1" value="<?= $client['VendrediLaitier1']  ?>">  <input type="text" name="Vlaitage2" value="<?= $client['VendrediLaitier2']  ?>">  <input type="text" name="Vlaitage3" value="<?= $client['VendrediLaitier3']  ?>"></li>
        <li>Dessert <input type="inpuText" name="Vdessert1" value="<?= $client['VendrediDess1']  ?>">  <input type="text" name="Vdessert2" value="<?= $client['VendrediDess2']  ?>">  </li>
      </section>
    </div><div class="FORMAddM">
      <section class="bloc left">
        <h1>Samedi</h1>
        <li> Potage <input type="text" name="SP" value="<?= $client['SamediP']  ?>"></li>
        <li>Entrée <input type="inpuText" name="SEntre1" value="<?= $client['SamediEntree1']  ?>">  <input type="text" name="SEntre2" value="<?= $client['SamediEntree2']  ?>">  <input type="text" name="SEntre3" value="<?= $client['SamediEntree3']  ?>"></li>
        <li> Plat garni : Viande <input type="text" name="Sviande1" value="<?= $client['SamediViande1']  ?>"><input type="text" name="Sviande2" value="<?= $client['SamediViande2']  ?>"><br> légumes <input type="text" name="Slegume1" value="<?= $client['SamediLegume1']  ?>"><input type="text" name="Slegume2" value="<?= $client['SamediLegume2']  ?>"></li>
        <li> Produit laitier <input type="inpuText" name="Slaitage1" value="<?= $client['SamediLaitier1']  ?>">  <input type="text" name="Slaitage2" value="<?= $client['SamediLaitier2']  ?>">  <input type="text" name="Slaitage3" value="<?= $client['SamediLaitier3']  ?>"></li>
        <li>Dessert <input type="inpuText" name="Sdessert1" value="<?= $client['SamediDess1']  ?>">  <input type="text" name="Sdessert2" value="<?= $client['SamediDess2']  ?>"></li>
      </section>
    </div><div class="FORMAddM">
      <section class="bloc left">
        <h1>Dimanche</h1>
        <li> Potage <input type="text" name="DP" value="<?= $client['DimancheP']  ?>"></li>
        <li>Entrée <input type="inpuText" name="DEntre1" value="<?= $client['DimancheEntree1']  ?>">  <input type="text" name="DEntre2" value="<?= $client['DimancheEntree2']  ?>">  <input type="text" name="DEntre3" value="<?= $client['DimancheEntree3']  ?>"></li>
        <li> Plat garni : Viande <input type="text" name="Dviande1" value="<?= $client['DimancheViande1']  ?>"><input type="text" name="Dviande2" value="<?= $client['DimancheViande2']  ?>"><br> légumes <input type="text" name="Dlegume1" value="<?= $client['DimancheLegume1']  ?>"><input type="text" name="Dlegume2" value="<?= $client['DimancheLegume2']  ?>"></li>
        <li> Produit laitier <input type="inpuText" name="Dlaitage1" value="<?= $client['DimancheLaitier1']  ?>">  <input type="text" name="Dlaitage2" value="<?= $client['DimancheLaitier2']  ?>">  <input type="text" name="Dlaitage3" value="<?= $client['DimancheLaitier3']  ?>"></li>
        <li>Dessert <input type="inpuText" name="Ddessert1" value="<?= $client['DimancheDess1']  ?>">  <input type="text" name="Ddessert2" value="<?= $client['DimancheDess2']  ?>"></li>
      </section>
    </div>
    <br><br>
    <input class="btnAddRef" type="submit" name="" value="AJOUTER Menu">
</form>

</body>
</html>
