<?php require 'ConnexionBDD.php'; ?>
<?php
$pdoStat=$bdd -> prepare('SELECT * FROM menuclassique WHERE Id=:num');
$pdoStat-> bindValue(':num',$_GET['numMenu'],PDO::PARAM_INT);
$executeIsOk = $pdoStat-> execute();
$client = $pdoStat ->fetch();

?>
<?php
$pdoStat=$bdd -> prepare('SELECT * FROM client WHERE Id=:num');
$pdoStat-> bindValue(':num',$_POST['numclient'],PDO::PARAM_INT);
$executeIsOk = $pdoStat-> execute();
$Bene = $pdoStat ->fetch();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <title>Renseigment</title>
  <link rel="stylesheet" type="text/css" href="css/reboot.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <?php include 'Header.php'?>
  <div class="FORMAdd">
    <!-- Formulaire HTML pour ajouter un client -->
    <form enctype="multipart/form-data" class="ADDForm" action="#" method="post">


      <section class="bloc left">
        <h1>Informations Commande</h1>
        <input type="hidden" name="Id" value="<?= $Bene['Id']  ?>">
        <p><label for="name"><?= $Bene['Civi'] ?>  <?= $Bene['Nom'] ?> <?= $Bene['Prenom'] ?> </label></p>
        <p>
          <label for="name"><?= $Bene['Adress'] ?>  <?= $Bene['AdressComp'] ?></label>
          <label for="name"><?= $Bene['CodePostal'] ?>  <?= $Bene['Commune'] ?></label>
        </p>
        <p>
          <label for="name"><?= $Bene['Regime'] ?></label>

        </p>
        <input type="hidden" name="Id" value="<?= $client ['Id']  ?>">
      <p><label for="name"> <?= $client ['Nom_M'] ?>  <?= $client['Date_M'] ?> </label></p>
      <input class="btnAddRef" type="submit" name="" value="Enregister  ">

         <h1>lundi</h1>
           <li> Potage
             <p><input type="radio" name="mon_champ" value="<?= $client['LundiPotage'] ?>"> <?= $client['LundiPotage'] ?>  <input type="radio" name="mon_champ" value=""> ne prend rien
             </p>

           </li>
           <li>Entrée
             <p>
               <input type="radio" name="mon_champ1" value="<?= $client['LundiEntree1'] ?>"><?= $client['LundiEntree1'] ?>
               <input type="radio" name="mon_champ1" value="<?= $client['LundiEntree2'] ?>"><?= $client['LundiEntree2'] ?>
               <input type="radio" name="mon_champ1" value="<?= $client['LundiEntree3'] ?>"><?= $client['LundiEntree3'] ?>
               <input type="radio" name="mon_champ1" value=""> ne prend rien
             </p>
           </li>
           <li> Plat garni : Viande
               <p><input type="radio" name="Viande1" value="<?= $client['LundiViande1'] ?>"><?= $client['LundiViande1'] ?>
             <input type="radio" name="Viande1" value="<?= $client['LundiViande2'] ?>"><?= $client['LundiViande2'] ?>
           <input type="radio" name="Viande1" value=""> ne prend rien</p>
              légumes
             <p><input type="radio" name="legume1" value="<?= $client['LundiLegume1'] ?>"><?= $client['LundiLegume1'] ?>
           <input type="radio" name="legume1" value="<?= $client['LundiLegume2'] ?>"><?= $client['LundiLegume2'] ?>
         <input type="radio" name="legume1" value=""> ne prend rien</p>
           </li>
           <li> Assiette complète <p><input type="radio" name="LAsc" value="<?= $client['LundiAss'] ?>"><?= $client['LundiAss'] ?> <input type="radio" name="LAsc" value=""> ne prend rien</p></li>
           <li> Produit laitier<p> <input type="radio" name="llaitage1" value="<?= $client['LundiLegume2'] ?>"><?= $client['LundiLegume2'] ?>  <input type="radio" name="llaitage1" value="<?= $client['LundiLegume2'] ?>"><?= $client['LundiLegume2'] ?>
             <input type="radio" name="llaitage1" value="<?= $client['LundiLegume2'] ?>"><?= $client['LundiLegume2'] ?><input type="radio" name="legume1" value=""> ne prend rien</p></p></li>
           <li>Dessert <p><input type="radio" name="ldessert" value="<?= $client['LundiDess1'] ?>"><?= $client['LundiDess1'] ?>  <input type="radio" name="ldessert" value="<?= $client['LundiDess2'] ?>"><?= $client['LundiDess2'] ?>
             <input type="radio" name="ldessert" value="<?= $client['LundiDess3'] ?>"><?= $client['LundiDess3'] ?><input type="radio" name="ldessert" value=""> ne prend rien</p></p></li>
         </section>

       </div>
       <div class="FORMAddM">
         <section class="bloc right">
           <h1>Mardi</h1>
           <li> Potage <input type="radio" name="Mp" value="<?= $client['MardiPotage'] ?>"><?= $client['MardiPotage'] ?><input type="radio" name="Mp" value=""> ne prend rien</li>
           <li>Entrée <input type="radio" name="MEntre" value="<?= $client['MardiEntree1'] ?>"><?= $client['MardiEntree1'] ?>  <input type="radio" name="MEntre" value="<?= $client['MardiEntree2'] ?>"> <?= $client['MardiEntree2'] ?>
              <input type="radio" name="MEntre" value="<?= $client['MardiEntree3'] ?>"><?= $client['MardiEntree3'] ?><input type="radio" name="MEntre" value=""> ne prend rien</li>
           <li> Plat garni : Viande <input type="radio" name="Mviande1" value="<?= $client['MardiViande1'] ?>"><?= $client['MardiViande1'] ?><input type="radio" name="Mviande1" value="<?= $client['MardiViande2'] ?>"><?= $client['MardiViande2'] ?>
             <input type="radio" name="Mviande1" value=""> ne prend rien<br> légumes <input type="radio" name="Mlegume" value="<?= $client['MardiLegume1'] ?>"><?= $client['MardiLegume1'] ?><input type="radio" name="Mlegume" value="<?= $client['MardiLegume2'] ?>">
             <?= $client['MardiLegume2'] ?><input type="radio" name="Mlegume" value=""> ne prend rien</li>
           <li> Assiette complète <input type="radio" name="MAsc" value="<?= $client['MardiAss'] ?>"><?= $client['MardiAss'] ?><input type="radio" name="MAsc" value=""> ne prend rien</li>
           <li> Produit laitier <input type="radio" name="Mlaitage" value="<?= $client['MardiLaitier1'] ?>"><?= $client['MardiLaitier1'] ?>  <input type="radio" name="Mlaitage" value="<?= $client['MardiLaitier2'] ?>"><?= $client['MardiLaitier2'] ?>
               <input type="radio" name="Mlaitage" value="<?= $client['MardiLaitier3'] ?>"><?= $client['MardiLaitier3'] ?><input type="radio" name="Mlaitage" value=""> ne prend rien</li></li>
           <li>Dessert <input type="radio" name="Mdessert" value="<?= $client['MardiDess1'] ?>"><?= $client['MardiDess1'] ?>  <input type="radio" name="Mdessert" value="<?= $client['MardiDess2'] ?>"><?= $client['MardiDess3'] ?>
               <input type="radio" name="Mdessert" value="<?= $client['MardiDess3'] ?>"><?= $client['MardiDess3'] ?><input type="radio" name="Mdessert" value=""> ne prend rien</li></li>
         </section>
       </div><div class="FORMAddM">
         <section class="bloc left">
           <h1>Mercredi</h1>
           <li> Potage <input type="radio" name="MerP" value="<?= $client['MercrediP'] ?>"><?= $client['MercrediP'] ?><input type="radio" name="MerP" value=""> ne prend rien</li>
           <li>Entrée <input type="radio" name="MerEntre" value="<?= $client['MercrediEntree1'] ?>"><?= $client['MercrediEntree1'] ?>  <input type="radio" name="MerEntre" value="<?= $client['MercrediEntree2'] ?>"><?= $client['MercrediEntree2'] ?>
               <input type="radio" name="MerEntre" value="<?= $client['MercrediEntree3'] ?>"><?= $client['MercrediEntree3'] ?><input type="radio" name="MerEntre" value=""> ne prend rien</li>
           <li> Plat garni : Viande <input type="radio" name="Merviande" value="<?= $client['MercrediViande1'] ?>"><?= $client['MercrediViande1'] ?><input type="radio" name="Merviande" value="<?= $client['MercrediViande2'] ?>"><?= $client['MercrediLaitier3'] ?>
             <input type="radio" name="Merviande" value=""> ne prend rien<br> légumes <input type="radio" name="Merlegume1" value="<?= $client['MercrediLegume1'] ?>"><?= $client['MercrediLegume1'] ?><input type="radio" name="Merlegume1" value="<?= $client['MercrediViande2'] ?>">
             <?= $client['MercrediLegume2'] ?><input type="radio" name="Merlegume1" value=""> ne prend rien</li>
           <li> Assiette complète <input type="radio" name="MerAsc" value="<?= $client['MercrediAss'] ?>"><?= $client['MercrediAss'] ?><input type="radio" name="MerAsc" value=""> ne prend rien</li>
           <li> Produit laitier <input type="radio" name="Merlaitage" value="<?= $client['MercrediLaitier1'] ?>"><?= $client['MercrediLaitier1'] ?> <input type="radio" name="Merlaitage" value="<?= $client['MercrediLaitier2'] ?>"><?= $client['MercrediLaitier2'] ?>
              <input type="radio" name="Merlaitage" value="<?= $client['MercrediLaitier3'] ?>"><?= $client['MercrediLaitier3'] ?><input type="radio" name="Merlaitage" value=""> ne prend rien</li>
           <li>Dessert <input type="radio" name="Merdessert" value="<?= $client['MercrediDess1'] ?>"><?= $client['MercrediDess1'] ?>  <input type="radio" name="Merdessert" value="<?= $client['MercrediDess2'] ?>"><?= $client['MercrediDess2'] ?>
              <input type="radio" name="Merdessert" value="<?= $client['MercrediDess3'] ?>"><?= $client['MercrediDess3'] ?><input type="radio" name="Merdessert" value=""> ne prend rien</li>
         </section>
       </div><div class="FORMAddM">
         <section class="bloc left">
           <h1>Jeudi</h1>
           <li> Potage <input type="radio" name="Jp" value=""></li>
           <li>Entrée <input type="radio" name="JeuEntre1" value="">  <input type="radio" name="JeuEntre2" value="">  <input type="radio" name="JeuEntre3" value=""></li>
           <li> Plat garni : Viande <input type="radio" name="Jeuviande1" value=""><input type="radio" name="Jeuviande2" value=""><br> légumes <input type="radio" name="Jeulegume1" value=""><input type="radio" name="Jeulegume2" value=""></li>
           <li> Assiette complète <input type="radio" name="JeuAsc" value=""></li>
           <li> Produit laitier <input type="radio" name="Jeulaitage1" value="">  <input type="radio" name="Jeulaitage2" value="">  <input type="radio" name="Jeulaitage3" value=""></li>
           <li>Dessert <input type="radio" name="Jeudessert1" value="">  <input type="radio" name="Jeudessert2" value="">  <input type="radio" name="Jeudessert3" value=""></li>
         </section>
       </div><div class="FORMAddM">
         <section class="bloc left">
           <h1>Vendredi</h1>
           <li> Potage <input type="radio" name="VP" value=""></li>
           <li>Entrée <input type="radio" name="VEntre1" value="">  <input type="radio" name="VEntre2" value="">  <input type="radio" name="VEntre3" value=""></li>
           <li> Plat garni : Viande <input type="radio" name="Vviande1" value=""><input type="radio" name="Vviande2" value=""><br> légumes <input type="radio" name="Vlegume1" value=""><input type="radio" name="Vlegume2" value=""></li>
           <li> Assiette complète <input type="radio" name="VAsc" value=""></li>
           <li> Produit laitier <input type="radio" name="Vlaitage1" value="">  <input type="radio" name="Vlaitage2" value="">  <input type="radio" name="Vlaitage3" value=""></li>
           <li>Dessert <input type="radio" name="Vdessert1" value="">  <input type="radio" name="Vdessert2" value="">  <input type="radio" name="Vdessert3" value=""></li>
         </section>
       </div><div class="FORMAddM">
         <section class="bloc left">
           <h1>Samedi</h1>
           <li> Potage <input type="radio" name="SP" value=""></li>
           <li>Entrée <input type="radio" name="SEntre1" value="">  <input type="radio" name="SEntre2" value="">  <input type="radio" name="SEntre3" value=""></li>
           <li> Plat garni : Viande <input type="radio" name="Sviande1" value=""><input type="radio" name="Sviande2" value=""><br> légumes <input type="radio" name="Slegume1" value=""><input type="radio" name="Slegume2" value=""></li>
           <li> Assiette complète <input type="radio" name="SAsc" value=""></li>
           <li> Produit laitier <input type="radio" name="Slaitage1" value="">  <input type="radio" name="Slaitage2" value="">  <input type="radio" name="Slaitage3" value=""></li>
           <li>Dessert <input type="radio" name="Sdessert1" value="">  <input type="radio" name="Sdessert2" value="">  <input type="radio" name="Sdessert3" value=""></li>
         </section>
       </div><div class="FORMAddM">
         <section class="bloc left">
           <h1>Dimanche</h1>
           <li> Potage <input type="radio" name="DP" value=""></li>
           <li>Entrée <input type="radio" name="DEntre1" value="">  <input type="radio" name="DEntre2" value="">  <input type="radio" name="DEntre3" value=""></li>
           <li> Plat garni : Viande <input type="radio" name="Dviande1" value=""><input type="radio" name="Dviande2" value=""><br> légumes <input type="radio" name="Dlegume1" value=""><input type="radio" name="Dlegume2" value=""></li>
           <li> Assiette complète <input type="radio" name="DAsc" value=""></li>
           <li> Produit laitier <input type="radio" name="Dlaitage1" value="">  <input type="radio" name="Dlaitage2" value="">  <input type="radio" name="Dlaitage3" value=""></li>
           <li>Dessert <input type="radio" name="Ddessert1" value="">  <input type="radio" name="Ddessert2" value="">  <input type="radio" name="Ddessert3" value=""></li>
         </section>
       </div>
       <input class="btnAddRef" type="submit" name="" value="Enregister  ">
      </form>
    </body>
    </html>
