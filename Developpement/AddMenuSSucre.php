<?php
header('Content-type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Créat° Menu Sans Sucre</title>
  <link rel="stylesheet" type="text/css" href="css/reboot.css">
  <link rel="stylesheet" type="text/css" href="css/MonStyle.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>
<body>
  <?php include 'header.php' ?>
  <form enctype="multipart/form-data" class="ADDForm" action="InsertMenuSSucre.php" method="post">
    <head>
      <br>
      <input class="inputText" type="text" name="NomMenu" value="" placeholder="Menu ..">
      <input class="inputText" type="date" name="DateM"  placeholder="">
      <input class="btnAddRef" type="submit" name="" value="AJOUTER Menu">
      <br>
    </head>
    <div class="FORMAddM">
      <section class="bloc left">
        <h1>lundi</h1>
        <li> Potage <input type="text" name="lP" value=""></li>
        <li>Entrée <input type="inpuText" name="lEntre1" value="">  </li>
        <li> Plat Garni : Viande <input type="text" name="lviande1" value=""><br> Légumes <input type="text" name="llegume1" value=""></li>
        <li> Produit Laitier <input type="inpuText" name="llaitage1" value="">  </li>
        <li>Dessert <input type="inpuText" name="ldessert1" value="">
        </section>
      </div>
      <div class="FORMAddM">
        <section class="bloc right">
          <h1>Mardi</h1>
          <li> Potage <input type="text" name="Mp" value=""></li>
          <li>Entrée <input type="inpuText" name="MEntre1" value="">  </li>
          <li> Plat Garni : Viande <input type="text" name="Mviande1" value=""><br> Légumes <input type="text" name="Mlegume1" value=""></li>
          <li> Produit Laitier <input type="inpuText" name="Mlaitage1" value="">  </li>
          <li>Dessert <input type="inpuText" name="Mdessert1" value="">
          </section>
        </div><div class="FORMAddM">
          <section class="bloc left">
            <h1>Mercredi</h1>
            <li> Potage <input type="text" name="MerP" value=""></li>
            <li>Entrée <input type="inpuText" name="MerEntre1" value="">  </li>
            <li> Plat Garni : Viande <input type="text" name="Merviande1" value=""><br> Légumes <input type="text" name="Merlegume1" value=""></li>
            <li> Produit Laitier <input type="inpuText" name="Merlaitage1" value="">  </li>
            <li>Dessert <input type="inpuText" name="Merdessert1" value="">
            </section>
          </div><div class="FORMAddM">
            <section class="bloc left">
              <h1>Jeudi</h1>
              <li> Potage <input type="text" name="Jp" value=""></li>
              <li>Entrée <input type="inpuText" name="JeuEntre1" value="">  </li>
              <li> Plat Garni : Viande <input type="text" name="Jeuviande1" value=""><br> Légumes <input type="text" name="Jeulegume1" value=""></li>
              <li> Produit Laitier <input type="inpuText" name="Jeulaitage1" value="">  </li>
              <li>Dessert <input type="inpuText" name="Jeudessert1" value="">
              </section>
            </div><div class="FORMAddM">
              <section class="bloc left">
                <h1>Vendredi</h1>
                <li> Potage <input type="text" name="VP" value=""></li>
                <li>Entrée <input type="inpuText" name="VEntre1" value="">  </li>
                <li> Plat Garni : Viande <input type="text" name="Vviande1" value=""><br> Légumes <input type="text" name="Vlegume1" value=""></li>
                <li> Produit Laitier <input type="inpuText" name="Vlaitage1" value="">  </li>
                <li>Dessert <input type="inpuText" name="Vdessert1" value="">
                </section>
              </div><div class="FORMAddM">
                <section class="bloc left">
                  <h1>Samedi</h1>
                  <li> Potage <input type="text" name="SP" value=""></li>
                  <li>Entrée <input type="inpuText" name="SEntre1" value="">  </li>
                  <li> Plat Garni : Viande <input type="text" name="Sviande1" value=""><br> Légumes <input type="text" name="Slegume1" value=""></li>
                  <li> Produit Laitier <input type="inpuText" name="Slaitage1" value="">  </li>
                  <li>Dessert <input type="inpuText" name="Sdessert1" value="">
                  </section>
                </div><div class="FORMAddM">
                  <section class="bloc left">
                    <h1>Dimanche</h1>
                    <li> Potage <input type="text" name="DP" value=""></li>
                    <li>Entrée <input type="inpuText" name="DEntre1" value="">  </li>
                    <li> Plat Garni : Viande <input type="text" name="Dviande1" value=""><br> Légumes <input type="text" name="Dlegume1" value=""></li>
                    <li> Produit Laitier <input type="inpuText" name="Dlaitage1" value="">  </li>
                    <li>Dessert <input type="inpuText" name="Ddessert1" value="">
                    </section>
                  </div>
                  <input class="btnAddRef" type="submit" name="" value="AJOUTER Menu">
                </form>
              </body>
              </html>
