<?php require 'ConnexionBDD.php'; ?>
<?php
if ($_GET['typemenu']== 1) {
  $pdoStat=$bdd -> prepare('SELECT * FROM menuclassique WHERE Id=:num');
  $pdoStat-> bindValue(':num',$_GET['numMenu'],PDO::PARAM_INT);
}elseif ($_GET['typemenu']== 2) {
  $pdoStat=$bdd -> prepare('SELECT * FROM menussel WHERE Id=:num');
  $pdoStat-> bindValue(':num',$_GET['numMenu'],PDO::PARAM_INT);
}elseif ($_GET['typemenu']== 3) {
  $pdoStat=$bdd -> prepare('SELECT * FROM menussucre WHERE Id=:num');
  $pdoStat-> bindValue(':num',$_GET['numMenu'],PDO::PARAM_INT);
}

$executeIsOk = $pdoStat-> execute();
$client = $pdoStat ->fetch();

?>
<?php
$pdoStat=$bdd -> prepare('SELECT * FROM client WHERE Id=:num');
$pdoStat-> bindValue(':num',$_GET['numclient'],PDO::PARAM_INT);
$executeIsOk = $pdoStat-> execute();
$Bene = $pdoStat ->fetch();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <title>Renseigment</title>
  <link rel="stylesheet" type="text/css" href="css/reboot.css">
  <link rel="stylesheet" type="text/css" href="css/MonStyle.css">
  <link rel="stylesheet" type="text/css" href="css/simplegrid.css">
</head>
<body>
  <?php include 'Header.php'?>
  <div class="FORMAdd">
    <!-- Formulaire HTML pour ajouter un client -->
    <form enctype="multipart/form-data" class="ADDForm" action="InsertCommande.php" method="post">

      <div class="grid grid-pad">
          <div class="col-1-1">
             <div class="content">
               <h1>Informations Commande</h1>
               <div class="grid grid-pad">
                 <div class="col-1-2">
                   <div class="content">
                     <input type="hidden" name="Id" value="<?= $Bene['Id']  ?>">
                     <p><label for="name"><?= $Bene['Civi'] ?> <?= $Bene['Nom'] ?> <?= $Bene['Prenom'] ?> </label></p>
                     <input type="hidden" name="Nom" value="<?= $Bene['Nom'] ?>">
                     <input type="hidden" name="Prenom" value="<?= $Bene['Prenom'] ?>">
                     <p>
                       <label for="name"><?= $Bene['Adress'] ?>  <?= $Bene['AdressComp'] ?></label>
                       <label for="name"><?= $Bene['CodePostal'] ?>  <?= $Bene['Commune'] ?></label>
                       <label for="name"><?= $Bene['Regime'] ?></label>
                     </p>
                   </div>
                 </div>
                 <div class="col-1-2">
                   <div class="content">
                     <input type="hidden" name="IdMenu" value="<?= $client ['Id']  ?>">
                     <p><label for="name"> <?= $client ['Nom_M'] ?> <?= $client ['Date_M'] ?> </label></p>
                     <input type="hidden" name="date" value="<?= $client ['Date_M'] ?>">
                     <input type="hidden" name="type" value="<?= $_GET['typemenu']?>">
                     <input class="btnAddRef" type="submit" name="" value="Enregister  ">
                   </div>
                 </div>
               </div>
             </div>
          </div>
      </div>
<?php if ($_GET['typemenu']== 1) {
?>
<section class="bloc left">
     <h1>lundi</h1>
     <ul>
       <li><h3>Potage</h3>
         <p><input type="radio" name="mon_champ" value="<?= $client['LundiPotage'] ?>"> <?= $client['LundiPotage'] ?>
         </p>

       </li>
       <li><h3><h3>Entrée</h3></h3>
         <p>
           <input type="radio" name="mon_champ1" value="<?= $client['LundiEntree1'] ?>"> <?= $client['LundiEntree1'] ?>
           <input type="radio" name="mon_champ1" value="<?= $client['LundiEntree2'] ?>"> <?= $client['LundiEntree2'] ?>
           <input type="radio" name="mon_champ1" value="<?= $client['LundiEntree3'] ?>"> <?= $client['LundiEntree3'] ?>
         </p>
       </li>
       <li> <h3>Plat garni </h3><p> Viande :
           <input type="radio" name="Viande1" value="<?= $client['LundiViande1'] ?>"> <?= $client['LundiViande1'] ?>
           <input type="radio" name="Viande1" value="<?= $client['LundiViande2'] ?>"> <?= $client['LundiViande2'] ?>
           <input type="radio" name="Viande1" value=""> </p>


         <p>Légumes<input type="radio" name="legume1" value="<?= $client['LundiLegume1'] ?>"> <?= $client['LundiLegume1'] ?>
           <input type="radio" name="legume1" value="<?= $client['LundiLegume2'] ?>"> <?= $client['LundiLegume2'] ?>
           <input type="radio" name="legume1" value="">
     </p>
     Assiette complète<p> <input type="radio" name="LAsc" value="<?= $client['LundiAss'] ?>"> <?= $client['LundiAss'] ?> <input type="radio" name="LAsc" value=""> ne prend rien</p>
       </li>

       <li><h3>Produit laitier</h3> <p> <input type="radio" name="llaitage1" value="<?= $client['LundiLaitier1'] ?>"> <?= $client['LundiLaitier1'] ?>  <input type="radio" name="llaitage1" value="<?= $client['LundiLaitier2'] ?>"> <?= $client['LundiLaitier2'] ?>
         <input type="radio" name="llaitage1" value="<?= $client['LundiLaitier3'] ?>"> <?= $client['LundiLaitier3'] ?></p></p></li>
       <li><h3><h3>Dessert</h3> </h3><p><input type="radio" name="ldessert" value="<?= $client['LundiDess1'] ?>"> <?= $client['LundiDess1'] ?>  <input type="radio" name="ldessert" value="<?= $client['LundiDess2'] ?>"> <?= $client['LundiDess2'] ?>
         <input type="radio" name="ldessert" value="<?= $client['LundiDess3'] ?>"> <?= $client['LundiDess3'] ?></p></li>
     </ul>

     </section>

   </div>
   <div class="FORMAddM">
     <section class="bloc right">
       <h1>Mardi</h1>
       <ul>
         <li><h3>Potage</h3> <p><input type="radio" name="Mp" value="<?= $client['MardiPotage'] ?>"> <?= $client['MardiPotage'] ?></p></li>
         <li><h3>Entrée</h3> <input type="radio" name="MEntre" value="<?= $client['MardiEntree1'] ?>"><?= $client['MardiEntree1'] ?>  <input type="radio" name="MEntre" value="<?= $client['MardiEntree2'] ?>"> <?= $client['MardiEntree2'] ?>
            <input type="radio" name="MEntre" value="<?= $client['MardiEntree3'] ?>"><?= $client['MardiEntree3'] ?>
         <li><h3>Plat garni</h3> Viande <input type="radio" name="Mviande1" value="<?= $client['MardiViande1'] ?>"> <?= $client['MardiViande1'] ?> <input type="radio" name="Mviande1" value="<?= $client['MardiViande2'] ?>"> <?= $client['MardiViande2'] ?>
            <br>Légumes <input type="radio" name="Mlegume" value="<?= $client['MardiLegume1'] ?>"> <?= $client['MardiLegume1'] ?> <input type="radio" name="Mlegume" value="<?= $client['MardiLegume2'] ?>">
           <?= $client['MardiLegume2'] ?>
           <br>Assiette complète <p><input type="radio" name="MAsc" value="<?= $client['MardiAss'] ?>"> <?= $client['MardiAss'] ?> <input type="radio" name="MAsc" value=""> ne prend rien</p> </li>
         <li><h3>Produit laitier</h3> <input type="radio" name="Mlaitage" value="<?= $client['MardiLaitier1'] ?>"> <?= $client['MardiLaitier1'] ?>  <input type="radio" name="Mlaitage" value="<?= $client['MardiLaitier2'] ?>"> <?= $client['MardiLaitier2'] ?>
             <input type="radio" name="Mlaitage" value="<?= $client['MardiLaitier3'] ?>"><?= $client['MardiLaitier3'] ?></li></li>
         <li><h3>Dessert</h3> <input type="radio" name="Mdessert" value="<?= $client['MardiDess1'] ?>"><?= $client['MardiDess1'] ?>  <input type="radio" name="Mdessert" value="<?= $client['MardiDess2'] ?>"><?= $client['MardiDess3'] ?>
             <input type="radio" name="Mdessert" value="<?= $client['MardiDess3'] ?>"><?= $client['MardiDess3'] ?></li></li>
       </ul>

     </section>
   </div><div class="FORMAddM">
     <section class="bloc left">
       <h1>Mercredi</h1>
       <ul>
         <li><h3>Potage</h3> <input type="radio" name="MerP" value="<?= $client['MercrediP'] ?>"> <?= $client['MercrediP'] ?></li>
         <li><h3>Entrée</h3> <input type="radio" name="MerEntre" value="<?= $client['MercrediEntree1'] ?>"> <?= $client['MercrediEntree1'] ?>  <input type="radio" name="MerEntre" value="<?= $client['MercrediEntree2'] ?>"> <?= $client['MercrediEntree2'] ?>
             <input type="radio" name="MerEntre" value="<?= $client['MercrediEntree3'] ?>"> <?= $client['MercrediEntree3'] ?></li>
         <li><h3>Plat garni</h3> Viande <input type="radio" name="Merviande" value="<?= $client['MercrediViande1'] ?>"><?= $client['MercrediViande1'] ?><input type="radio" name="Merviande" value="<?= $client['MercrediViande2'] ?>"> <?= $client['MercrediViande2'] ?>
           <br> Légumes <input type="radio" name="Merlegume1" value="<?= $client['MercrediLegume1'] ?>"> <?= $client['MercrediLegume1'] ?> <input type="radio" name="Merlegume1" value="<?= $client['MercrediLegume2'] ?>">
           <?= $client['MercrediLegume2'] ?>
          <br>Assiette complète  <p> <input type="radio" name="MerAsc" value="<?= $client['MercrediAss'] ?>"> <?= $client['MercrediAss'] ?> <input type="radio" name="MerAsc" value=""> ne prend rien </p></li>
         <li><h3>Produit laitier</h3> <input type="radio" name="Merlaitage" value="<?= $client['MercrediLaitier1'] ?>"> <?= $client['MercrediLaitier1'] ?> <input type="radio" name="Merlaitage" value="<?= $client['MercrediLaitier2'] ?>"> <?= $client['MercrediLaitier2'] ?>
            <input type="radio" name="Merlaitage" value="<?= $client['MercrediLaitier3'] ?>"> <?= $client['MercrediLaitier3'] ?></li>
         <li><h3>Dessert</h3> <input type="radio" name="Merdessert" value="<?= $client['MercrediDess1'] ?>"> <?= $client['MercrediDess1'] ?>  <input type="radio" name="Merdessert" value="<?= $client['MercrediDess2'] ?>"> <?= $client['MercrediDess2'] ?>
            <input type="radio" name="Merdessert" value="<?= $client['MercrediDess3'] ?>"> <?= $client['MercrediDess3'] ?></li>
       </ul>
     </section>
   </div><div class="FORMAddM">
     <section class="bloc left">
       <h1>Jeudi</h1>
       <ul>
         <li><h3>Potage</h3> <input type="radio" name="Jp" value="<?= $client['JeudiP'] ?>"> <?= $client['JeudiP'] ?></li>
         <li><h3>Entrée</h3> <input type="radio" name="JeuEntre1" value="<?= $client['JeudiEntree1'] ?>"> <?= $client['JeudiEntree1'] ?>  <input type="radio" name="JeuEntre1" value="<?= $client['JeudiEntree2'] ?>"> <?= $client['JeudiEntree1'] ?>
           <input type="radio" name="JeuEntre1" value="<?= $client['JeudiEntree1'] ?>"> <?= $client['JeudiEntree1'] ?></li>
         <li><h3>Plat garni</h3>Viande <input type="radio" name="Jeuviande1" value="<?= $client['JeudiViande1'] ?>"> <?= $client['JeudiViande1'] ?> <input type="radio" name="Jeuviande1" value="<?= $client['JeudiViande2'] ?>"> <?= $client['JeudiViande2'] ?>
           <br> Légumes <input type="radio" name="Jeulegume1" value="<?= $client['JeudiLegume1'] ?>"> <?= $client['JeudiLegume1'] ?> <input type="radio" name="Jeulegume1" value="<?= $client['JeudiLegume2'] ?>"><?= $client['JeudiLegume2'] ?></li>
         <br> Assiette complète <p><input type="radio" name="JeuAsc" value="<?= $client['JeudiAss'] ?>"> <?= $client['JeudiAss'] ?> <input type="radio" name="JeuAsc" value=""></p> </li>
         <li><h3>Produit laitier</h3> <input type="radio" name="Jeulaitage1" value="<?= $client['JeudiLaitier1'] ?>"> <?= $client['JeudiLaitier1'] ?>  <input type="radio" name="Jeulaitage1" value="<?= $client['JeudiLaitier2'] ?>"> <?= $client['JeudiLaitier2'] ?>
           <input type="radio" name="Jeulaitage1" value="<?= $client['JeudiLaitier3'] ?>"> <?= $client['JeudiLaitier3'] ?></li>
         <li><h3>Dessert</h3> <input type="radio" name="Jeudessert1" value="<?= $client['JeudiDess1'] ?>"> <?= $client['JeudiDess1'] ?>  <input type="radio" name="Jeudessert1" value="<?= $client['JeudiDess2'] ?>"> <?= $client['JeudiDess2'] ?>
            <input type="radio" name="Jeudessert3" value="<?= $client['JeudiDess3'] ?>"> <?= $client['JeudiDess3'] ?></li>
       </ul>
     </section>
   </div><div class="FORMAddM">
     <section class="bloc left">
       <h1>Vendredi</h1>
       <ul>
         <li><h3>Potage</h3> <input type="radio" name="VP" value=""></li>
         <li><h3>Entrée</h3> <input type="radio" name="VEntre1" value="">  <input type="radio" name="VEntre2" value="">  <input type="radio" name="VEntre3" value=""></li>
         <li><h3>Plat garni</h3>Viande <input type="radio" name="Vviande1" value=""><input type="radio" name="Vviande2" value=""><br> Légumes <input type="radio" name="Vlegume1" value=""><input type="radio" name="Vlegume2" value=""></li>
         <br> Assiette complète <p><input type="radio" name="VAsc" value=""></p></li>
         <li><h3>Produit laitier</h3> <input type="radio" name="Vlaitage1" value="">  <input type="radio" name="Vlaitage2" value="">  <input type="radio" name="Vlaitage3" value=""></li>
         <li><h3>Dessert</h3> <input type="radio" name="Vdessert1" value="">  <input type="radio" name="Vdessert2" value="">  <input type="radio" name="Vdessert3" value=""></li>
       </ul>
     </section>
   </div><div class="FORMAddM">
     <section class="bloc left">
       <h1>Samedi</h1>
       <ul>
         <li><h3>Potage</h3> <input type="radio" name="SP" value=""></li>
         <li><h3>Entrée</h3> <input type="radio" name="SEntre1" value="">  <input type="radio" name="SEntre2" value="">  <input type="radio" name="SEntre3" value=""></li>
         <li><h3>Entrée</h3>Viande <input type="radio" name="Sviande1" value=""><input type="radio" name="Sviande2" value=""><br> Légumes <input type="radio" name="Slegume1" value=""><input type="radio" name="Slegume2" value=""></li>
         <br> Assiette complète <p><input type="radio" name="SAsc" value=""></p> </li>
         <li><h3>Produit laitier</h3> <input type="radio" name="Slaitage1" value="">  <input type="radio" name="Slaitage2" value="">  <input type="radio" name="Slaitage3" value=""></li>
         <li><h3>Dessert</h3> <input type="radio" name="Sdessert1" value="">  <input type="radio" name="Sdessert2" value="">  <input type="radio" name="Sdessert3" value=""></li>
       </ul>

     </section>
   </div><div class="FORMAddM">
     <section class="bloc left">
       <h1>Dimanche</h1>
       <ul>
         <li><h3>Potage</h3> <input type="radio" name="DP" value=""></li>
         <li><h3>Entrée</h3> <input type="radio" name="DEntre1" value="">  <input type="radio" name="DEntre2" value="">  <input type="radio" name="DEntre3" value=""></li>
         <li><h3>Plat garni</h3>Viande <input type="radio" name="Dviande1" value=""><input type="radio" name="Dviande2" value=""><br> Légumes <input type="radio" name="Dlegume1" value=""><input type="radio" name="Dlegume2" value=""></li>
          <br>Assiette complète  <p><input type="radio" name="DAsc" value=""></p> </li>
         <li><h3>Produit laitier</h3> <input type="radio" name="Dlaitage1" value="">  <input type="radio" name="Dlaitage2" value="">  <input type="radio" name="Dlaitage3" value=""></li>
         <li><h3>Dessert</h3> <input type="radio" name="Ddessert1" value="">  <input type="radio" name="Ddessert2" value="">  <input type="radio" name="Ddessert3" value=""></li>
       </ul>

     </section>
   </div>
<?php
}elseif ($_GET['typemenu']== 2) { ?>
  <section class="bloc left">
       <h1>lundi</h1>
       <ul>
         <li><h3>Potage</h3>
           <p><input type="radio" name="mon_champ" value="<?= $client['LundiPotage'] ?>"> <?= $client['LundiPotage'] ?>
           </p>

         </li>
         <li><h3><h3>Entrée</h3></h3>
           <p>
             <input type="radio" name="mon_champ1" value="<?= $client['LundiEntree1'] ?>"> <?= $client['LundiEntree1'] ?>
             <input type="radio" name="mon_champ1" value="<?= $client['LundiEntree2'] ?>"> <?= $client['LundiEntree2'] ?>
             <input type="radio" name="mon_champ1" value="<?= $client['LundiEntree3'] ?>"> <?= $client['LundiEntree3'] ?>
           </p>
         </li>
         <li> <h3>Plat garni </h3><p> Viande :
             <input type="radio" name="Viande1" value="<?= $client['LundiViande1'] ?>"> <?= $client['LundiViande1'] ?>
             <input type="radio" name="Viande1" value="<?= $client['LundiViande2'] ?>"> <?= $client['LundiViande2'] ?></p>


           <p>Légumes<input type="radio" name="legume1" value="<?= $client['LundiLegume1'] ?>"> <?= $client['LundiLegume1'] ?>
         <input type="radio" name="legume1" value="<?= $client['LundiLegume2'] ?>"> <?= $client['LundiLegume2'] ?>
       </p>
         </li>

         <li><h3>Produit laitier</h3> <p> <input type="radio" name="llaitage1" value="<?= $client['LundiLegume2'] ?>"> <?= $client['LundiLegume2'] ?>  <input type="radio" name="llaitage1" value="<?= $client['LundiLegume2'] ?>"> <?= $client['LundiLegume2'] ?>
           <input type="radio" name="llaitage1" value="<?= $client['LundiLegume2'] ?>"> <?= $client['LundiLegume2'] ?></p></p></li>
         <li><h3><h3>Dessert</h3> </h3><p><input type="radio" name="ldessert" value="<?= $client['LundiDess1'] ?>"> <?= $client['LundiDess1'] ?>  <input type="radio" name="ldessert" value="<?= $client['LundiDess2'] ?>"> <?= $client['LundiDess2'] ?></p></li>
       </ul>

       </section>

     </div>
     <div class="FORMAddM">
       <section class="bloc right">
         <h1>Mardi</h1>
         <ul>
           <li><h3>Potage</h3> <input type="radio" name="Mp" value="<?= $client['MardiPotage'] ?>"><?= $client['MardiPotage'] ?>
           <li><h3>Entrée</h3> <input type="radio" name="MEntre" value="<?= $client['MardiEntree1'] ?>"><?= $client['MardiEntree1'] ?>  <input type="radio" name="MEntre" value="<?= $client['MardiEntree2'] ?>"> <?= $client['MardiEntree2'] ?>
              <input type="radio" name="MEntre" value="<?= $client['MardiEntree3'] ?>"><?= $client['MardiEntree3'] ?>
           <li><h3>Plat garni</h3>Viande <input type="radio" name="Mviande1" value="<?= $client['MardiViande1'] ?>"><?= $client['MardiViande1'] ?><input type="radio" name="Mviande1" value="<?= $client['MardiViande2'] ?>"><?= $client['MardiViande2'] ?>
              <br>Légumes <input type="radio" name="Mlegume" value="<?= $client['MardiLegume1'] ?>"><?= $client['MardiLegume1'] ?><input type="radio" name="Mlegume" value="<?= $client['MardiLegume2'] ?>">
             <?= $client['MardiLegume2'] ?>
           <li><h3>Produit laitier</h3> <input type="radio" name="Mlaitage" value="<?= $client['MardiLaitier1'] ?>"><?= $client['MardiLaitier1'] ?>  <input type="radio" name="Mlaitage" value="<?= $client['MardiLaitier2'] ?>"><?= $client['MardiLaitier2'] ?>
               <input type="radio" name="Mlaitage" value="<?= $client['MardiLaitier3'] ?>"><?= $client['MardiLaitier3'] ?></li></li>
           <li><h3>Dessert</h3> <input type="radio" name="Mdessert" value="<?= $client['MardiDess1'] ?>"><?= $client['MardiDess1'] ?>  <input type="radio" name="Mdessert" value="<?= $client['MardiDess2'] ?>"><?= $client['MardiDess2'] ?></li>
         </ul>

       </section>
     </div><div class="FORMAddM">
       <section class="bloc left">
         <h1>Mercredi</h1>
         <li><h3>Potage</h3> <input type="radio" name="MerP" value="<?= $client['MercrediP'] ?>"><?= $client['MercrediP'] ?></li>
         <li><h3>Entrée</h3> <input type="radio" name="MerEntre" value="<?= $client['MercrediEntree1'] ?>"><?= $client['MercrediEntree1'] ?>  <input type="radio" name="MerEntre" value="<?= $client['MercrediEntree2'] ?>"><?= $client['MercrediEntree2'] ?>
             <input type="radio" name="MerEntre" value="<?= $client['MercrediEntree3'] ?>"><?= $client['MercrediEntree3'] ?></li>
         <li><h3>Plat garni</h3>Viande <input type="radio" name="Merviande" value="<?= $client['MercrediViande1'] ?>"><?= $client['MercrediViande1'] ?><input type="radio" name="Merviande" value="<?= $client['MercrediViande2'] ?>"><?= $client['MercrediLaitier3'] ?>
           <br> Légumes <input type="radio" name="Merlegume1" value="<?= $client['MercrediLegume1'] ?>"><?= $client['MercrediLegume1'] ?><input type="radio" name="Merlegume1" value="<?= $client['MercrediViande2'] ?>">
           <?= $client['MercrediLegume2'] ?></li>
         <li><h3>Produit laitier</h3> <input type="radio" name="Merlaitage" value="<?= $client['MercrediLaitier1'] ?>"><?= $client['MercrediLaitier1'] ?> <input type="radio" name="Merlaitage" value="<?= $client['MercrediLaitier2'] ?>"><?= $client['MercrediLaitier2'] ?>
            <input type="radio" name="Merlaitage" value="<?= $client['MercrediLaitier3'] ?>"><?= $client['MercrediLaitier3'] ?></li>
         <li><h3>Dessert</h3> <input type="radio" name="Merdessert" value="<?= $client['MercrediDess1'] ?>"><?= $client['MercrediDess1'] ?>  <input type="radio" name="Merdessert" value="<?= $client['MercrediDess2'] ?>"><?= $client['MercrediDess2'] ?></li>
       </section>
     </div><div class="FORMAddM">
       <section class="bloc left">
         <h1>Jeudi</h1>
         <li><h3>Potage</h3> <input type="radio" name="Jp" value=""></li>
         <li><h3>Entrée</h3> <input type="radio" name="JeuEntre1" value="">  <input type="radio" name="JeuEntre2" value="">  <input type="radio" name="JeuEntre3" value=""></li>
         <li><h3>Plat garni</h3>Viande <input type="radio" name="Jeuviande1" value=""><input type="radio" name="Jeuviande2" value=""><br> Légumes <input type="radio" name="Jeulegume1" value=""><input type="radio" name="Jeulegume2" value=""></li>
         <li> Assiette complète <input type="radio" name="JeuAsc" value=""></li>
         <li><h3>Produit laitier</h3> <input type="radio" name="Jeulaitage1" value="">  <input type="radio" name="Jeulaitage2" value="">  <input type="radio" name="Jeulaitage3" value=""></li>
         <li><h3>Dessert</h3> <input type="radio" name="Jeudessert1" value="">  <input type="radio" name="Jeudessert2" value="">  </li>
       </section>
     </div><div class="FORMAddM">
       <section class="bloc left">
         <h1>Vendredi</h1>
         <li><h3>Potage</h3> <input type="radio" name="VP" value=""></li>
         <li><h3>Entrée</h3> <input type="radio" name="VEntre1" value="">  <input type="radio" name="VEntre2" value="">  <input type="radio" name="VEntre3" value=""></li>
         <li><h3>Plat garni</h3>Viande <input type="radio" name="Vviande1" value=""><input type="radio" name="Vviande2" value=""><br> Légumes <input type="radio" name="Vlegume1" value=""><input type="radio" name="Vlegume2" value=""></li>
         <li> Assiette complète <input type="radio" name="VAsc" value=""></li>
         <li><h3>Produit laitier</h3> <input type="radio" name="Vlaitage1" value="">  <input type="radio" name="Vlaitage2" value="">  <input type="radio" name="Vlaitage3" value=""></li>
         <li><h3>Dessert</h3> <input type="radio" name="Vdessert1" value="">  <input type="radio" name="Vdessert2" value="">  </li>
       </section>
     </div><div class="FORMAddM">
       <section class="bloc left">
         <h1>Samedi</h1>
         <ul>
           <li><h3>Potage</h3> <input type="radio" name="SP" value=""></li>
           <li><h3>Entrée</h3> <input type="radio" name="SEntre1" value="">  <input type="radio" name="SEntre2" value="">  <input type="radio" name="SEntre3" value=""></li>
           <li><h3>Plat garni</h3>Viande <input type="radio" name="Sviande1" value=""><input type="radio" name="Sviande2" value=""><br> Légumes <input type="radio" name="Slegume1" value=""><input type="radio" name="Slegume2" value=""></li>
           <li> Assiette complète <input type="radio" name="SAsc" value=""></li>
           <li><h3>Produit laitier</h3> <input type="radio" name="Slaitage1" value="">  <input type="radio" name="Slaitage2" value="">  <input type="radio" name="Slaitage3" value=""></li>
           <li><h3>Dessert</h3> <input type="radio" name="Sdessert1" value="">  <input type="radio" name="Sdessert2" value="">  </li>
         </ul>
       </section>
     </div><div class="FORMAddM">
       <section class="bloc left">
         <h1>Dimanche</h1>
         <ul>
           <li><h3>Potage</h3> <input type="radio" name="DP" value=""></li>
           <li><h3>Entrée</h3> <input type="radio" name="DEntre1" value="">  <input type="radio" name="DEntre2" value="">  <input type="radio" name="DEntre3" value=""></li>
           <li><h3>Plat garni</h3>Viande <input type="radio" name="Dviande1" value=""><input type="radio" name="Dviande2" value=""><br> Légumes <input type="radio" name="Dlegume1" value=""><input type="radio" name="Dlegume2" value=""></li>
           <li><h3>Produit laitier</h3> <input type="radio" name="Dlaitage1" value="">  <input type="radio" name="Dlaitage2" value="">  <input type="radio" name="Dlaitage3" value=""></li>
           <li><h3>Dessert</h3> <input type="radio" name="Ddessert1" value="">  <input type="radio" name="Ddessert2" value=""> </li>
         </ul>
       </section>
     </div>

<?php } elseif ($_GET['typemenu']== 3) {?>
  <section class="bloc left">
       <h1>lundi</h1>
       <ul>
         <li><h3>Potage</h3>
           <p><input type="radio" name="mon_champ" value="<?= $client['LundiPotage'] ?>"> <?= $client['LundiPotage'] ?>
           </p>

         </li>
         <li><h3><h3>Entrée</h3></h3>
           <p>
             <input type="radio" name="mon_champ1" value="<?= $client['LundiEntree1'] ?>"> <?= $client['LundiEntree1'] ?>

           </p>
         </li>
         <li> <h3>Plat garni </h3><p> Viande :
             <input type="radio" name="Viande1" value="<?= $client['LundiViande1'] ?>"> <?= $client['LundiViande1'] ?></p>


           <p>Légumes<input type="radio" name="legume1" value="<?= $client['LundiLegume1'] ?>"> <?= $client['LundiLegume1'] ?>
       </p>
         </li>

         <li><h3>Produit laitier</h3> <p> <input type="radio" name="llaitage1" value="<?= $client['LundiLegume2'] ?>"> <?= $client['LundiLegume2'] ?>
           </p></li>
         <li><h3><h3>Dessert</h3> </h3><p><input type="radio" name="ldessert" value="<?= $client['LundiDess1'] ?>"> <?= $client['LundiDess1'] ?>  </p></li>
       </ul>

       </section>

     </div>
     <div class="FORMAddM">
       <section class="bloc right">
         <h1>Mardi</h1>
         <li><h3>Potage</h3> <input type="radio" name="Mp" value="<?= $client['MardiPotage'] ?>"><?= $client['MardiPotage'] ?>
         <li><h3>Entrée</h3> <input type="radio" name="MEntre" value="<?= $client['MardiEntree1'] ?>"><?= $client['MardiEntree1'] ?>  <input type="radio" name="MEntre" value="<?= $client['MardiEntree2'] ?>"> <?= $client['MardiEntree2'] ?>
            <input type="radio" name="MEntre" value="<?= $client['MardiEntree3'] ?>"><?= $client['MardiEntree3'] ?>
         <li><h3>Plat garni</h3>Viande <input type="radio" name="Mviande1" value="<?= $client['MardiViande1'] ?>"><?= $client['MardiViande1'] ?><input type="radio" name="Mviande1" value="<?= $client['MardiViande2'] ?>"><?= $client['MardiViande2'] ?>
            <br>Légumes <input type="radio" name="Mlegume" value="<?= $client['MardiLegume1'] ?>"><?= $client['MardiLegume1'] ?><input type="radio" name="Mlegume" value="<?= $client['MardiLegume2'] ?>">
           <?= $client['MardiLegume2'] ?>
         <li><h3>Produit laitier</h3> <input type="radio" name="Mlaitage" value="<?= $client['MardiLaitier1'] ?>"><?= $client['MardiLaitier1'] ?>  <input type="radio" name="Mlaitage" value="<?= $client['MardiLaitier2'] ?>"><?= $client['MardiLaitier2'] ?>
             <input type="radio" name="Mlaitage" value="<?= $client['MardiLaitier3'] ?>"><?= $client['MardiLaitier3'] ?></li></li>
         <li><h3>Dessert</h3> <input type="radio" name="Mdessert" value="<?= $client['MardiDess1'] ?>"><?= $client['MardiDess1'] ?>  <input type="radio" name="Mdessert" value="<?= $client['MardiDess2'] ?>"><?= $client['MardiDess2'] ?></li>
       </section>
     </div><div class="FORMAddM">
       <section class="bloc left">
         <h1>Mercredi</h1>
         <li><h3>Potage</h3> <input type="radio" name="MerP" value="<?= $client['MercrediP'] ?>"><?= $client['MercrediP'] ?></li>
         <li><h3>Entrée</h3> <input type="radio" name="MerEntre" value="<?= $client['MercrediEntree1'] ?>"><?= $client['MercrediEntree1'] ?>  <input type="radio" name="MerEntre" value="<?= $client['MercrediEntree2'] ?>"><?= $client['MercrediEntree2'] ?>
             <input type="radio" name="MerEntre" value="<?= $client['MercrediEntree3'] ?>"><?= $client['MercrediEntree3'] ?></li>
         <li><h3>Plat garni</h3>Viande <input type="radio" name="Merviande" value="<?= $client['MercrediViande1'] ?>"><?= $client['MercrediViande1'] ?><input type="radio" name="Merviande" value="<?= $client['MercrediViande2'] ?>"><?= $client['MercrediLaitier3'] ?>
           <br> Légumes <input type="radio" name="Merlegume1" value="<?= $client['MercrediLegume1'] ?>"><?= $client['MercrediLegume1'] ?><input type="radio" name="Merlegume1" value="<?= $client['MercrediViande2'] ?>">
           <?= $client['MercrediLegume2'] ?></li>
         <li><h3>Produit laitier</h3> <input type="radio" name="Merlaitage" value="<?= $client['MercrediLaitier1'] ?>"><?= $client['MercrediLaitier1'] ?> <input type="radio" name="Merlaitage" value="<?= $client['MercrediLaitier2'] ?>"><?= $client['MercrediLaitier2'] ?>
            <input type="radio" name="Merlaitage" value="<?= $client['MercrediLaitier3'] ?>"><?= $client['MercrediLaitier3'] ?></li>
         <li><h3>Dessert</h3> <input type="radio" name="Merdessert" value="<?= $client['MercrediDess1'] ?>"><?= $client['MercrediDess1'] ?>  <input type="radio" name="Merdessert" value="<?= $client['MercrediDess2'] ?>"><?= $client['MercrediDess2'] ?></li>
       </section>
     </div><div class="FORMAddM">
       <section class="bloc left">
         <h1>Jeudi</h1>
         <li><h3>Potage</h3> <input type="radio" name="Jp" value=""></li>
         <li><h3>Entrée</h3> <input type="radio" name="JeuEntre1" value="">  <input type="radio" name="JeuEntre2" value="">  <input type="radio" name="JeuEntre3" value=""></li>
         <li><h3>Plat garni</h3>Viande <input type="radio" name="Jeuviande1" value=""><input type="radio" name="Jeuviande2" value=""><br> Légumes <input type="radio" name="Jeulegume1" value=""><input type="radio" name="Jeulegume2" value=""></li>
         <li> Assiette complète <input type="radio" name="JeuAsc" value=""></li>
         <li><h3>Produit laitier</h3> <input type="radio" name="Jeulaitage1" value="">  <input type="radio" name="Jeulaitage2" value="">  <input type="radio" name="Jeulaitage3" value=""></li>
         <li><h3>Dessert</h3> <input type="radio" name="Jeudessert1" value="">  <input type="radio" name="Jeudessert2" value="">  <input type="radio" name="Jeudessert3" value=""></li>
       </section>
     </div><div class="FORMAddM">
       <section class="bloc left">
         <h1>Vendredi</h1>
         <li><h3>Potage</h3> <input type="radio" name="VP" value=""></li>
         <li><h3>Entrée</h3> <input type="radio" name="VEntre1" value="">  <input type="radio" name="VEntre2" value="">  <input type="radio" name="VEntre3" value=""></li>
         <li><h3>Plat garni</h3>Viande <input type="radio" name="Vviande1" value=""><input type="radio" name="Vviande2" value=""><br> Légumes <input type="radio" name="Vlegume1" value=""><input type="radio" name="Vlegume2" value=""></li>
         <li> Assiette complète <input type="radio" name="VAsc" value=""></li>
         <li><h3>Produit laitier</h3> <input type="radio" name="Vlaitage1" value="">  <input type="radio" name="Vlaitage2" value="">  <input type="radio" name="Vlaitage3" value=""></li>
         <li><h3>Dessert</h3> <input type="radio" name="Vdessert1" value="">  <input type="radio" name="Vdessert2" value="">  <input type="radio" name="Vdessert3" value=""></li>
       </section>
     </div><div class="FORMAddM">
       <section class="bloc left">
         <h1>Samedi</h1>
         <li><h3>Potage</h3> <input type="radio" name="SP" value=""></li>
         <li><h3>Entrée</h3> <input type="radio" name="SEntre1" value="">  <input type="radio" name="SEntre2" value="">  <input type="radio" name="SEntre3" value=""></li>
         <li><h3>Plat garni</h3>Viande <input type="radio" name="Sviande1" value=""><input type="radio" name="Sviande2" value=""><br> Légumes <input type="radio" name="Slegume1" value=""><input type="radio" name="Slegume2" value=""></li>
         <li> Assiette complète <input type="radio" name="SAsc" value=""></li>
         <li><h3>Produit laitier</h3> <input type="radio" name="Slaitage1" value="">  <input type="radio" name="Slaitage2" value="">  <input type="radio" name="Slaitage3" value=""></li>
         <li><h3>Dessert</h3> <input type="radio" name="Sdessert1" value="">  <input type="radio" name="Sdessert2" value="">  <input type="radio" name="Sdessert3" value=""></li>
       </section>
     </div><div class="FORMAddM">
       <section class="bloc left">
         <h1>Dimanche</h1>
         <li><h3>Potage</h3> <input type="radio" name="DP" value=""></li>
         <li><h3>Entrée</h3> <input type="radio" name="DEntre1" value="">  <input type="radio" name="DEntre2" value="">  <input type="radio" name="DEntre3" value=""></li>
         <li><h3>Plat garni</h3>Viande <input type="radio" name="Dviande1" value=""><input type="radio" name="Dviande2" value=""><br> Légumes <input type="radio" name="Dlegume1" value=""><input type="radio" name="Dlegume2" value=""></li>
         <li><h3>Produit laitier</h3> <input type="radio" name="Dlaitage1" value="">  <input type="radio" name="Dlaitage2" value="">  <input type="radio" name="Dlaitage3" value=""></li>
         <li><h3>Dessert</h3> <input type="radio" name="Ddessert1" value="">  <input type="radio" name="Ddessert2" value="">  <input type="radio" name="Ddessert3" value=""></li>
       </section>
     </div>
  <?php } ?>

       <input class="btnAddRef" type="submit" name="" value="Enregister  ">

      </form>
    </body>
    </html>
