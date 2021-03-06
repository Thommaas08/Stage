<?php
require 'ConnexionBDD.php';
session_start();
            //Requete de l'insertion menu classique
            $req = $bdd->prepare('INSERT INTO menuclassique(Nom_M,Date_M,LundiPotage,LundiEntree1,LundiEntree2,LundiEntree3,LundiViande1,LundiViande2,LundiLegume1,LundiLegume2,LundiAss,LundiLaitier1,LundiLaitier2,LundiLaitier3,LundiDess1,LundiDess2,LundiDess3,
              MardiPotage,MardiEntree1,MardiEntree2,MardiEntree3,MardiViande1,MardiViande2,MardiLegume1,MardiLegume2,MardiAss,MardiLaitier1,MardiLaitier2,MardiLaitier3,MardiDess1,MardiDess2,MardiDess3,
            MercrediP,MercrediEntree1,MercrediEntree2,MercrediEntree3,MercrediViande1,MercrediViande2,MercrediLegume1,MercrediLegume2,MercrediAss,MercrediLaitier1,MercrediLaitier2,MercrediLaitier3,MercrediDess1,MercrediDess2,MercrediDess3,
            JeudiP,JeudiEntree1,JeudiEntree2,JeudiEntree3,JeudiViande1,JeudiViande2,JeudiLegume1,JeudiLegume2,JeudiAss,JeudiLaitier1,JeudiLaitier2,JeudiLaitier3,JeudiDess1,JeudiDess2,JeudiDess3,
            VendrediP,VendrediEntree1,VendrediEntree2,VendrediEntree3,VendrediViande1,VendrediViande2,VendrediLegume1,VendrediLegume2,VendrediAss,VendrediLaitier1,VendrediLaitier2,VendrediLaitier3,VendrediDess1,VendrediDess2,VendrediDess3,
            SamediP,SamediEntree1,SamediEntree2,SamediEntree3,SamediViande1,SamediViande2,SamediLegume1,SamediLegume2,SamediAss,SamediLaitier1,SamediLaitier2,SamediLaitier3,SamediDess1,SamediDess2,SamediDess3,
            DimancheP,DimancheEntree1,DimancheEntree2,DimancheEntree3,DimancheViande1,DimancheViande2,DimancheLegume1,DimancheLegume2,DimancheAss,DimancheLaitier1,DimancheLaitier2,DimancheLaitier3,DimancheDess1,DimancheDess2,DimancheDess3)
            VALUES (:Nom_M,:Date_M,:LundiPotage,:LundiEntree1,:LundiEntree2,:LundiEntree3,:LundiViande1,:LundiViande2,:LundiLegume1,:LundiLegume2,:LundiAss,:LundiLaitier1,:LundiLaitier2,:LundiLaitier3,:LundiDess1,:LundiDess2,:LundiDess3,
            :MardiPotage,:MardiEntree1,:MardiEntree2,:MardiEntree3,:MardiViande1,:MardiViande2,:MardiLegume1,:MardiLegume2,:MardiAss,:MardiLaitier1,:MardiLaitier2,:MardiLaitier3,:MardiDess1,:MardiDess2,:MardiDess3,
            :MercrediP,:MercrediEntree1,:MercrediEntree2,:MercrediEntree3,:MercrediViande1,:MercrediViande2,:MercrediLegume1,:MercrediLegume2,:MercrediAss,:MercrediLaitier1,:MercrediLaitier2,:MercrediLaitier3,:MercrediDess1,:MercrediDess2,:MercrediDess3,
            :JeudiP,:JeudiEntree1,:JeudiEntree2,:JeudiEntree3,:JeudiViande1,:JeudiViande2,:JeudiLegume1,:JeudiLegume2,:JeudiAss,:JeudiLaitier1,:JeudiLaitier2,:JeudiLaitier3,:JeudiDess1,:JeudiDess2,:JeudiDess3,
            :VendrediP,:VendrediEntree1,:VendrediEntree2,:VendrediEntree3,:VendrediViande1,:VendrediViande2,:VendrediLegume1,:VendrediLegume2,:VendrediAss,:VendrediLaitier1,:VendrediLaitier2,:VendrediLaitier3,:VendrediDess1,:VendrediDess2,:VendrediDess3,
            :SamediP,:SamediEntree1,:SamediEntree2,:SamediEntree3,:SamediViande1,:SamediViande2,:SamediLegume1,:SamediLegume2,:SamediAss,:SamediLaitier1,:SamediLaitier2,:SamediLaitier3,:SamediDess1,:SamediDess2,:SamediDess3,
            :DimancheP,:DimancheEntree1,:DimancheEntree2,:DimancheEntree3,:DimancheViande1,:DimancheViande2,:DimancheLegume1,:DimancheLegume2,:DimancheAss,:DimancheLaitier1,:DimancheLaitier2,:DimancheLaitier3,:DimancheDess1,:DimancheDess2,:DimancheDess3)');

            $req->execute(array(
              "Nom_M"=>$_POST['NomMenu'],
              "Date_M"=>$_POST['DateM'],
              "LundiPotage"=>$_POST['lP'],
              "LundiEntree1"=>$_POST['lEntre1'],
              "LundiEntree2"=>$_POST['lEntre2'],
              "LundiEntree3"=>$_POST['lEntre3'],
              "LundiViande1"=>$_POST['lviande1'],
              "LundiViande2"=>$_POST['lviande2'],
              "LundiLegume1"=>$_POST['llegume1'],
              "LundiLegume2"=>$_POST['llegume2'],
              "LundiAss"=>$_POST['LAsc'],
              "LundiLaitier1"=>$_POST['llaitage1'],
              "LundiLaitier2"=>$_POST['llaitage2'],
              "LundiLaitier3"=>$_POST['llaitage3'],
              "LundiDess1"=>$_POST['ldessert1'],
              "LundiDess2"=>$_POST['ldessert2'],
              "LundiDess3"=>$_POST['ldessert3'],
              "MardiPotage"=>$_POST['Mp'],
              "MardiEntree1"=>$_POST['MEntre1'],
              "MardiEntree2"=>$_POST['MEntre2'],
              "MardiEntree3"=>$_POST['MEntre3'],
              "MardiViande1"=>$_POST['Mviande1'],
              "MardiViande2"=>$_POST['Mviande2'],
              "MardiLegume1"=>$_POST['Mlegume1'],
              "MardiLegume2"=>$_POST['Mlegume2'],
              "MardiAss"=>$_POST['MAsc'],
              "MardiLaitier1"=>$_POST['Mlaitage1'],
              "MardiLaitier2"=>$_POST['Mlaitage2'],
              "MardiLaitier3"=>$_POST['Mlaitage3'],
              "MardiDess1"=>$_POST['Mdessert1'],
              "MardiDess2"=>$_POST['Mdessert2'],
              "MardiDess3"=>$_POST['Mdessert3'],
              "MercrediP"=>$_POST['MerP'],
              "MercrediEntree1"=>$_POST['MerEntre1'],
              "MercrediEntree2"=>$_POST['MerEntre2'],
              "MercrediEntree3"=>$_POST['MerEntre3'],
              "MercrediViande1"=>$_POST['Merviande1'],
              "MercrediViande2"=>$_POST['Merviande2'],
              "MercrediLegume1"=>$_POST['Merlegume1'],
              "MercrediLegume2"=>$_POST['Merlegume2'],
              "MercrediAss"=>$_POST['MerAsc'],
              "MercrediLaitier1"=>$_POST['Merlaitage1'],
              "MercrediLaitier2"=>$_POST['Merlaitage2'],
              "MercrediLaitier3"=>$_POST['Merlaitage3'],
              "MercrediDess1"=>$_POST['Merdessert1'],
              "MercrediDess2"=>$_POST['Merdessert2'],
              "MercrediDess3"=>$_POST['Merdessert3'],
              "JeudiP"=>$_POST['Jp'],
              "JeudiEntree1"=>$_POST['JeuEntre1'],
              "JeudiEntree2"=>$_POST['JeuEntre2'],
              "JeudiEntree3"=>$_POST['JeuEntre3'],
              "JeudiViande1"=>$_POST['Jeuviande1'],
              "JeudiViande2"=>$_POST['Jeuviande2'],
              "JeudiLegume1"=>$_POST['Jeulegume1'],
              "JeudiLegume2"=>$_POST['Jeulegume2'],
              "JeudiAss"=>$_POST['JeuAsc'],
              "JeudiLaitier1"=>$_POST['Jeulaitage1'],
              "JeudiLaitier2"=>$_POST['Jeulaitage2'],
              "JeudiLaitier3"=>$_POST['Jeulaitage3'],
              "JeudiDess1"=>$_POST['Jeudessert1'],
              "JeudiDess2"=>$_POST['Jeudessert2'],
              "JeudiDess3"=>$_POST['Jeudessert3'],
              "VendrediP"=>$_POST['VP'],
              "VendrediEntree1"=>$_POST['VEntre1'],
              "VendrediEntree2"=>$_POST['VEntre2'],
              "VendrediEntree3"=>$_POST['VEntre3'],
              "VendrediViande1"=>$_POST['Vviande1'],
              "VendrediViande2"=>$_POST['Vviande2'],
              "VendrediLegume1"=>$_POST['Vlegume1'],
              "VendrediLegume2"=>$_POST['Vlegume2'],
              "VendrediAss"=>$_POST['VAsc'],
              "VendrediLaitier1"=>$_POST['Vlaitage1'],
              "VendrediLaitier2"=>$_POST['Vlaitage2'],
              "VendrediLaitier3"=>$_POST['Vlaitage3'],
              "VendrediDess1"=>$_POST['Vdessert1'],
              "VendrediDess2"=>$_POST['Vdessert2'],
              "VendrediDess3"=>$_POST['Vdessert3'],
              "SamediP"=>$_POST['SP'],
              "SamediEntree1"=>$_POST['SEntre1'],
              "SamediEntree2"=>$_POST['SEntre2'],
              "SamediEntree3"=>$_POST['SEntre3'],
              "SamediViande1"=>$_POST['Sviande1'],
              "SamediViande2"=>$_POST['Sviande2'],
              "SamediLegume1"=>$_POST['Slegume1'],
              "SamediLegume2"=>$_POST['Slegume2'],
              "SamediAss"=>$_POST['SAsc'],
              "SamediLaitier1"=>$_POST['Slaitage1'],
              "SamediLaitier2"=>$_POST['Slaitage2'],
              "SamediLaitier3"=>$_POST['Slaitage3'],
              "SamediDess1"=>$_POST['Sdessert1'],
              "SamediDess2"=>$_POST['Sdessert2'],
              "SamediDess3"=>$_POST['Sdessert3'],
              "DimancheP"=>$_POST['DP'],
              "DimancheEntree1"=>$_POST['DEntre1'],
              "DimancheEntree2"=>$_POST['DEntre2'],
              "DimancheEntree3"=>$_POST['DEntre3'],
              "DimancheViande1"=>$_POST['Dviande1'],
              "DimancheViande2"=>$_POST['Dviande2'],
              "DimancheLegume1"=>$_POST['Dlegume1'],
              "DimancheLegume2"=>$_POST['Dlegume2'],
              "DimancheAss"=>$_POST['DAsc'],
              "DimancheLaitier1"=>$_POST['Dlaitage1'],
              "DimancheLaitier2"=>$_POST['Dlaitage2'],
              "DimancheLaitier3"=>$_POST['Dlaitage3'],
              "DimancheDess1"=>$_POST['Ddessert1'],
              "DimancheDess2"=>$_POST['Ddessert2'],
              "DimancheDess3"=>$_POST['Ddessert3']


              ));
            // echo ("L'envoi a bien été effectué !");
//,,,,,,
// header("Location: index.php ");
 //print_r($req);
 if ($req) {
   $message= 'Le menu a été Enregistrer';

 }
 else {
   $message="Echec de l'enregistrement du menu";
   // code...
 }
?>

<!DOCTYPE html>
<html lang="fr" >
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/reboot.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
  <?php include 'Header.php';?>
  <div class="alert warning">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <?php echo $message ?>
  </div>
</body>
</html>
