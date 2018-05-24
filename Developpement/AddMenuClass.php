<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Créer un Menu Normal</title>
  <link rel="stylesheet" type="text/css" href="css/reboot.css">
  <link rel="stylesheet" type="text/css" href="css/MonStyle.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>
<body>
  <?php include 'header.php' ?>

  <form enctype="multipart/form-data" class="ADDForm" action="InsertMenuClass.php" method="post">

    <head>
      <br>
      <input  class="inputText" type="text" name="NomMenu" value="" placeholder="Menu ..">
      <input  class="inputText" type="date" name="DateM"  placeholder="">
      <input  class="btnAddRef" type="submit" name="" value="AJOUTER Menu">
      <br>
    </head>
    <div class="FORMAddM">
      <section class="bloc left">
        <h1>lundi</h1>
        <ul>
          <li><h3>Potage</h3>
            <p><input class="inpuText" type="text" name="lP" value=""></p>
          </li>
          <li> <h3>Entrée</h3> <p><input class="inpuText" type="inpuText" name="lEntre1" value="">
            <input class="inpuText" type="text" name="lEntre2" value="">

              <input class="inpuText" type="text" name="lEntre3" value="">
            </p>
          </li>
          <li> <h3>Plat garni</h3> <br> Viandes
              <p><input class="inpuText" type="text" name="lviande1" value="">
            <input class="inpuText" type="text" name="lviande2" value=""></p>
             Légumes
            <p><input class="inpuText" type="text" name="llegume1" value=""> <input class="inpuText" type="text" name="llegume2" value=""></p>
            Assiette complète <p><input class="inpuText"  type="text" name="LAsc" value=""></p>

          </li>

          <li> <h3>Produits laitiers</h3><p> <input class="inpuText" type="inpuText" name="llaitage1" value="">  <input class="inpuText" type="text" name="llaitage2" value=""> <input class="inpuText" type="text" name="llaitage3" value=""></p></li>
          <li><h3>Desserts</h3> <p><input class="inpuText" type="inpuText" name="ldessert1" value="">  <input class="inpuText" type="text" name="ldessert2" value="">  <input class="inpuText" type="text" name="ldessert3" value=""></p></li>
        </ul>
      </section>
    </div>
    <div class="FORMAddM">
      <section class="bloc right">
        <h1>Mardi</h1>
        <ul>
          <li><h3>Potage</h3>  <p><input class="inpuText" type="text" name="Mp" value=""></p> </li>
          <li><h3>Entrées</h3> <p><input class="inpuText" type="inpuText" name="MEntre1" value="">  <input class="inpuText" type="text" name="MEntre2" value="">  <input class="inpuText" type="text" name="MEntre3" value=""></p></li>
          <li><h3> Plat garni </h3><br> Viandes <p><input class="inpuText" type="text" name="Mviande1" value=""> <input class="inpuText" type="text" name="Mviande2" value=""></p> Légumes <p><input class="inpuText" type="text" name="Mlegume1" value=""> <input class="inpuText" type="text" name="Mlegume2" value=""></p>
           Assiette complète <p> <input class="inpuText" type="text" name="MAsc" value=""></p></li>
          <li><h3> Produits laitiers</h3> <p><input class="inpuText" type="inpuText" name="Mlaitage1" value="">  <input class="inpuText" type="text" name="Mlaitage2" value="">  <input class="inpuText" type="text" name="Mlaitage3" value=""></p></li>
          <li><h3>Dessert</h3> <p><input class="inpuText" type="inpuText" name="Mdessert1" value="">  <input class="inpuText" type="text" name="Mdessert2" value="">  <input class="inpuText" type="text" name="Mdessert3" value=""></p> </li>
        </ul>

      </section>
    </div><div class="FORMAddM">
      <section class="bloc left">
        <h1>Mercredi</h1>
        <ul>
          <li><h3>Potage</h3><p><input class="inpuText" type="text" name="MerP" value=""></p> </li>
          <li> <h3>Entrées</h3><p><input class="inpuText" type="inpuText" name="MerEntre1" value="">  <input class="inpuText" type="text" name="MerEntre2" value="">  <input class="inpuText" type="text" name="MerEntre3" value=""></p>  </li>
          <li><h3>Plat garni</h3>  <br> Viandes <p><input class="inpuText" type="text" name="Merviande1" value=""> <input class="inpuText" type="text" name="Merviande2" value=""></p> Légumes  <p><input class="inpuText" type="text" name="Merlegume1" value=""> <input class="inpuText" type="text" name="Merlegume2" value=""></p>
            Assiette complète <p><input class="inpuText" type="text" name="MerAsc" value=""></p> </li>
          <li><h3>Produits laitiers</h3><p><input class="inpuText" type="inpuText" name="Merlaitage1" value=""> <input class="inpuText" type="text" name="Merlaitage2" value=""> <input class="inpuText" type="text" name="Merlaitage3" value=""></p></li>
          <li><h3>Desserts</h3><p><input class="inpuText" type="inpuText" name="Merdessert1" value="">  <input class="inpuText" type="text" name="Merdessert2" value="">  <input class="inpuText" type="text" name="Merdessert3" value=""></p></li>
        </ul>
      </section>
    </div><div class="FORMAddM">
      <section class="bloc right">
        <h1>Jeudi</h1>
        <ul>
          <li><h3>Potage</h3>  <p><input class="inpuText" type="text" name="Jp" value=""></p> </li>
          <li><h3>Entrées</h3> <p><input class="inpuText" type="inpuText" name="JeuEntre1" value="">  <input class="inpuText" type="text" name="JeuEntre2" value="">  <input class="inpuText" type="text" name="JeuEntre3" value=""></p></li>
          <li> <h3>Plat garni</h3>  Viandes <p><input class="inpuText" type="text" name="Jeuviande1" value=""> <input class="inpuText" type="text" name="Jeuviande2" value=""></p>  Légumes <p><input class="inpuText" type="text" name="Jeulegume1" value=""> <input class="inpuText" type="text" name="Jeulegume2" value=""></p>
         Assiette complète <p><input class="inpuText" type="text" name="JeuAsc" value=""></p> </li>
          <li><h3> Produits laitiers </h3><p><input class="inpuText" type="inpuText" name="Jeulaitage1" value="">  <input class="inpuText" type="text" name="Jeulaitage2" value="">  <input class="inpuText" type="text" name="Jeulaitage3" value=""></p></li>
          <li><h3>Desserts </h3><p><input class="inpuText" type="inpuText" name="Jeudessert1" value="">  <input class="inpuText" type="text" name="Jeudessert2" value="">  <input class="inpuText" type="text" name="Jeudessert3" value=""></p> </li>
        </ul>

      </section>
    </div><div class="FORMAddM">
      <section class="bloc left">
        <h1>Vendredi</h1>
        <ul>
          <li><h3> Potage </h3> <p><input class="inpuText" type="text" name="VP" value=""></p> </li>
          <li><h3>Entrée </h3><p><input class="inpuText" type="inpuText" name="VEntre1" value="">  <input class="inpuText" type="text" name="VEntre2" value="">  <input class="inpuText" type="text" name="VEntre3" value=""></p> </li>
          <li><h3>Plat garni</h3><br> Viande <p><input class="inpuText" type="text" name="Vviande1" value=""> <input class="inpuText" type="text" name="Vviande2" value=""></p>  Légumes <p><input class="inpuText" type="text" name="Vlegume1" value=""> <input class="inpuText" type="text" name="Vlegume2" value=""></p>
           Assiette complète <p><input class="inpuText" type="text" name="VAsc" value=""></p> </li>
          <li><h3>Produits laitiers </h3> <p><input class="inpuText" type="inpuText" name="Vlaitage1" value="">  <input class="inpuText" type="text" name="Vlaitage2" value="">  <input class="inpuText" type="text" name="Vlaitage3" value=""></p> </li>
          <li><h3>Desserts</h3> <p><input class="inpuText" type="inpuText" name="Vdessert1" value="">  <input class="inpuText" type="text" name="Vdessert2" value="">  <input class="inpuText" type="text" name="Vdessert3" value=""></p> </li>
        </ul>
      </section>
    </div><div class="FORMAddM">
      <section class="bloc right">
        <h1>Samedi</h1>
        <ul>
          <li><h3>Potage </h3> <p><input class="inpuText" type="text" name="SP" value=""></p> </li>
          <li><h3>Entrées </h3><p><input class="inpuText" type="inpuText" name="SEntre1" value="">  <input class="inpuText" type="text" name="SEntre2" value="">  <input class="inpuText" type="text" name="SEntre3" value=""></p> </li>
          <li><h3>Plat garni</h3><br> Viandes <p><input class="inpuText" type="text" name="Sviande1" value=""> <input class="inpuText" type="text" name="Sviande2" value=""></p>  Légumes <p><input class="inpuText" type="text" name="Slegume1" value=""> <input class="inpuText" type="text" name="Slegume2" value=""></p>
          Assiette complète <p><input class="inpuText" type="text" name="SAsc" value=""></p> </li>
          <li><h3>Produits laitiers</h3><p><input class="inpuText" type="inpuText" name="Slaitage1" value="">  <input class="inpuText" type="text" name="Slaitage2" value="">  <input class="inpuText" type="text" name="Slaitage3" value=""></p> </li>
          <li><h3>Desserts </h3><p><input class="inpuText" type="inpuText" name="Sdessert1" value="">  <input class="inpuText" type="text" name="Sdessert2" value="">  <input class="inpuText" type="text" name="Sdessert3" value=""></p> </li>
        </ul>

      </section>
    </div><div class="FORMAddM">
      <section class="bloc right">
        <h1>Dimanche</h1>
      <ul>
          <li><h3>Potage </h3> <p><input class="inpuText" type="text" name="DP" value=""></p> </li>
          <li><h3>Entrées</h3> <p><input class="inpuText" type="inpuText" name="DEntre1" value="">  <input class="inpuText" type="text" name="DEntre2" value="">  <input class="inpuText" type="text" name="DEntre3" value=""></p> </li>
          <li><h3>Plat garni</h3><br> Viandes <p><input class="inpuText" type="text" name="Dviande1" value=""> <input class="inpuText" type="text" name="Dviande2" value=""></p> Légumes <p><input class="inpuText" type="text" name="Dlegume1" value=""> <input class="inpuText" type="text" name="Dlegume2" value=""></p>
         Assiette complète <p><input class="inpuText" type="text" name="DAsc" value=""></p> </li>
          <li><h3>Produits laitiers</h3>  <p><input class="inpuText" type="inpuText" name="Dlaitage1" value="">  <input class="inpuText" type="text" name="Dlaitage2" value="">  <input class="inpuText" type="text" name="Dlaitage3" value=""></p> </li>
          <li><h3>Desserts</h3> <p><input class="inpuText"  type="inpuText" name="Ddessert1" value="">  <input class="inpuText" type="text" name="Ddessert2" value="">  <input class="inpuText" type="text" name="Ddessert3" value=""></p> </li>
      </ul>
      </section>
    </div>
    <input  class="btnAddRef" type="submit" name="" value="AJOUTER Menu">
  </form>

</body>
</html>
