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
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>
<body>
  <?php include 'header.php' ?>

  <form enctype="multipart/form-data" class="ADDForm" action="MajMenuCl.php" method="post">

    <head>
      <input type="hidden" name="Id" value="<?= $client['Id']  ?>">
      <br>
      <input class="inputText" type="text" name="NomMenu" value="<?= $client['Nom_M']  ?>" >
      <input class="inputText" type="text" name="DateM"  value="<?= $client['Date_M']  ?>">
      <input class="btnAddRef" type="submit" name="" value="Enregistrer">
      <br>
    </head>
    <div class="FORMAddM">
      <section class="bloc left">

        <h1>lundi</h1>
        <li> Potage
          <p><input type="text" name="lP" value="<?= $client['LundiPotage']  ?>"></p>
        </li>
        <li>Entrée <p><input type="inpuText" name="lEntre1" value="<?= $client['LundiEntree1']  ?>">
          <input type="text" name="lEntre2" value="<?= $client['LundiEntree2']  ?>">
            <input type="text" name="lEntre3" value="<?= $client['LundiEntree3']  ?>">
          </p>
        </li>
        <li> Plat garni : Viande
            <p><input type="text" name="lviande1" value="">
          <input type="text" name="lviande2" value=""></p>
           légumes
          <p><input type="text" name="llegume1" value="">
        <input type="text" name="llegume2" value=""></p>
        </li>
        <li> Assiette complète <p><input type="text" name="LAsc" value=""></p></li>
        <li> Produit laitier<p> <input type="inpuText" name="llaitage1" value="">  <input type="text" name="llaitage2" value=""> <input type="text" name="llaitage3" value=""></p></li>
        <li>Dessert <p><input type="inpuText" name="ldessert1" value="">  <input type="text" name="ldessert2" value="">  <input type="text" name="ldessert3" value=""></p></li>
      </section>
    </div>
    <div class="FORMAddM">
      <section class="bloc right">
        <h1>Mardi</h1>
        <li> Potage <input type="text" name="Mp" value=""></li>
        <li>Entrée <input type="inpuText" name="MEntre1" value="">  <input type="text" name="MEntre2" value="">  <input type="text" name="MEntre3" value=""></li>
        <li> Plat garni : Viande <input type="text" name="Mviande1" value=""><input type="text" name="Mviande2" value=""><br> légumes <input type="text" name="Mlegume1" value=""><input type="text" name="Mlegume2" value=""></li>
        <li> Assiette complète <input type="text" name="MAsc" value=""></li>
        <li> Produit laitier <input type="inpuText" name="Mlaitage1" value="">  <input type="text" name="Mlaitage2" value="">  <input type="text" name="Mlaitage3" value=""></li>
        <li>Dessert <input type="inpuText" name="Mdessert1" value="">  <input type="text" name="Mdessert2" value="">  <input type="text" name="Mdessert3" value=""></li>
      </section>
    </div><div class="FORMAddM">
      <section class="bloc left">
        <h1>Mercredi</h1>
        <li> Potage <input type="text" name="MerP" value=""></li>
        <li>Entrée <input type="inpuText" name="MerEntre1" value="">  <input type="text" name="MerEntre2" value="">  <input type="text" name="MerEntre3" value=""></li>
        <li> Plat garni : Viande <input type="text" name="Merviande1" value=""><input type="text" name="Merviande2" value=""><br> légumes <input type="text" name="Merlegume1" value=""><input type="text" name="Merlegume2" value=""></li>
        <li> Assiette complète <input type="text" name="MerAsc" value=""></li>
        <li> Produit laitier <input type="inpuText" name="Merlaitage1" value=""> <input type="text" name="Merlaitage2" value=""> <input type="text" name="Merlaitage3" value=""></li>
        <li>Dessert <input type="inpuText" name="Merdessert1" value="">  <input type="text" name="Merdessert2" value="">  <input type="text" name="Merdessert3" value=""></li>
      </section>
    </div><div class="FORMAddM">
      <section class="bloc left">
        <h1>Jeudi</h1>
        <li> Potage <input type="text" name="Jp" value=""></li>
        <li>Entrée <input type="inpuText" name="JeuEntre1" value="">  <input type="text" name="JeuEntre2" value="">  <input type="text" name="JeuEntre3" value=""></li>
        <li> Plat garni : Viande <input type="text" name="Jeuviande1" value=""><input type="text" name="Jeuviande2" value=""><br> légumes <input type="text" name="Jeulegume1" value=""><input type="text" name="Jeulegume2" value=""></li>
        <li> Assiette complète <input type="text" name="JeuAsc" value=""></li>
        <li> Produit laitier <input type="inpuText" name="Jeulaitage1" value="">  <input type="text" name="Jeulaitage2" value="">  <input type="text" name="Jeulaitage3" value=""></li>
        <li>Dessert <input type="inpuText" name="Jeudessert1" value="">  <input type="text" name="Jeudessert2" value="">  <input type="text" name="Jeudessert3" value=""></li>
      </section>
    </div><div class="FORMAddM">
      <section class="bloc left">
        <h1>Vendredi</h1>
        <li> Potage <input type="text" name="VP" value=""></li>
        <li>Entrée <input type="inpuText" name="VEntre1" value="">  <input type="text" name="VEntre2" value="">  <input type="text" name="VEntre3" value=""></li>
        <li> Plat garni : Viande <input type="text" name="Vviande1" value=""><input type="text" name="Vviande2" value=""><br> légumes <input type="text" name="Vlegume1" value=""><input type="text" name="Vlegume2" value=""></li>
        <li> Assiette complète <input type="text" name="VAsc" value=""></li>
        <li> Produit laitier <input type="inpuText" name="Vlaitage1" value="">  <input type="text" name="Vlaitage2" value="">  <input type="text" name="Vlaitage3" value=""></li>
        <li>Dessert <input type="inpuText" name="Vdessert1" value="">  <input type="text" name="Vdessert2" value="">  <input type="text" name="Vdessert3" value=""></li>
      </section>
    </div><div class="FORMAddM">
      <section class="bloc left">
        <h1>Samedi</h1>
        <li> Potage <input type="text" name="SP" value=""></li>
        <li>Entrée <input type="inpuText" name="SEntre1" value="">  <input type="text" name="SEntre2" value="">  <input type="text" name="SEntre3" value=""></li>
        <li> Plat garni : Viande <input type="text" name="Sviande1" value=""><input type="text" name="Sviande2" value=""><br> légumes <input type="text" name="Slegume1" value=""><input type="text" name="Slegume2" value=""></li>
        <li> Assiette complète <input type="text" name="SAsc" value=""></li>
        <li> Produit laitier <input type="inpuText" name="Slaitage1" value="">  <input type="text" name="Slaitage2" value="">  <input type="text" name="Slaitage3" value=""></li>
        <li>Dessert <input type="inpuText" name="Sdessert1" value="">  <input type="text" name="Sdessert2" value="">  <input type="text" name="Sdessert3" value=""></li>
      </section>
    </div><div class="FORMAddM">
      <section class="bloc left">
        <h1>Dimanche</h1>
        <li> Potage <input type="text" name="DP" value=""></li>
        <li>Entrée <input type="inpuText" name="DEntre1" value="">  <input type="text" name="DEntre2" value="">  <input type="text" name="DEntre3" value=""></li>
        <li> Plat garni : Viande <input type="text" name="Dviande1" value=""><input type="text" name="Dviande2" value=""><br> légumes <input type="text" name="Dlegume1" value=""><input type="text" name="Dlegume2" value=""></li>
        <li> Assiette complète <input type="text" name="DAsc" value=""></li>
        <li> Produit laitier <input type="inpuText" name="Dlaitage1" value="">  <input type="text" name="Dlaitage2" value="">  <input type="text" name="Dlaitage3" value=""></li>
        <li>Dessert <input type="inpuText" name="Ddessert1" value="">  <input type="text" name="Ddessert2" value="">  <input type="text" name="Ddessert3" value=""></li>
      </section>
    </div>
    <input class="btnAddRef" type="submit" name="" value="AJOUTER Menu">
  </form>

</body>
</html>
