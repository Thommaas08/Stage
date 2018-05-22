<?php
require 'ConnexionBDD.php';
$req = $bdd->prepare('UPDATE menuclassique set
  LundiPotage=:LundiPotage,LundiEntree1=:LundiEntree1,LundiEntree2=:LundiEntree2,LundiEntree3=:LundiEntree3,LundiViande1=:LundiViande1;LundiViande2=:LundiViande2,LundiLegume1=:LundiLegume1,LundiLegume2=:LundiLegume2,LundiAss=:LundiAss,LundiLaitier1=:LundiLaitier1,LundiLaitier2=:LundiLaitier2,LundiLaitier3=:LundiLaitier2,LundiDess1=:LundiDess1,LundiDess2=:LundiDess2,LundiDess3=:LundiDess3,
  MardiPotage=:Mp
  WHERE  Id=:num LIMIT 1');

  $req->bindValue(':num', $_POST['Id'],PDO::PARAM_INT);
  $req->bindValue(':LundiPotage', $_POST['LundiPotage'],PDO::PARAM_INT);
  $req->bindValue(':LundiEntree1', $_POST['LundiEntree1'],PDO::PARAM_INT);
  $req->bindValue(':LundiEntree2', $_POST['LundiEntree2'],PDO::PARAM_INT);
  $req->bindValue(':LundiEntree3', $_POST['LundiEntree3'],PDO::PARAM_INT);
  $req->bindValue(':LundiViande1',$_POST['LundiViande1'],PDO::PARAM_INT);
  $req->bindValue(':LundiViande2',$_POST['LundiViande2'],PDO::PARAM_INT);
  $req->bindValue(':LundiLegume1',$_POST['LundiLegume1'],PDO::PARAM_INT);
  $req->bindValue(':LundiLegume2',$_POST['LundiLegume2'],PDO::PARAM_INT);
  $req->bindValue(':LundiAss',$_POST['LundiAss'],PDO::PARAM_INT);
  $req->bindValue(':LundiLaitier1',$_POST['LundiLaitier1'],PDO::PARAM_INT);
  $req->bindValue(':LundiLaitier2',$_POST['LundiLaitier2'],PDO::PARAM_INT);
  $req->bindValue(':LundiLaitier3',$_POST['LundiLaitier3'],PDO::PARAM_INT);
  $req->bindValue(':LundiDess1',$_POST['LundiDess1'],PDO::PARAM_INT);
  $req->bindValue(':LundiDess2',$_POST['LundiDess2'],PDO::PARAM_INT);
  $req->bindValue(':LundiDess3',$_POST['LundiDess3'],PDO::PARAM_INT);
  $req->bindValue(':MardiPotage',$_POST['Mp'],PDO::PARAM_INT);
  /*
  $req->bindValue('MardiEntree1',$_POST['MEntre1'],PDO::PARAM_INT);
  $req->bindValue('MardiEntree2',$_POST['MEntre2'],PDO::PARAM_INT);
  $req->bindValue('MardiEntree3',$_POST['MEntre3'],PDO::PARAM_INT);
  $req->bindValue('MardiViande1',$_POST['Mviande1'],PDO::PARAM_INT);
  $req->bindValue('MardiViande2',$_POST['Mviande2'],PDO::PARAM_INT);
  $req->bindValue('MardiLegume1',$_POST['Mlegume1'],PDO::PARAM_INT);
  $req->bindValue('MardiLegume2',$_POST['Mlegume2'],PDO::PARAM_INT);
  $req->bindValue('MardiAss'$_POST['MAsc'],PDO::PARAM_INT);
  $req->bindValue('MardiLaitier1',$_POST['Mlaitage1'],PDO::PARAM_INT);
  $req->bindValue('MardiLaitier2',$_POST['Mlaitage2'],PDO::PARAM_INT);
  $req->bindValue('MardiLaitier3',$_POST['Mlaitage3'],PDO::PARAM_INT);
  $req->bindValue('MardiDess1',$_POST['Mdessert1'],PDO::PARAM_INT);
  $req->bindValue('MardiDess2',$_POST['Mdessert2'],PDO::PARAM_INT);
  $req->bindValue('MardiDess3',$_POST['Mdessert3'],PDO::PARAM_INT);
  $req->bindValue('MercrediP',$_POST['MerP'],PDO::PARAM_INT);
  $req->bindValue('MercrediEntree1',$_POST['MerEntre1'],PDO::PARAM_INT);
  $req->bindValue('MercrediEntree2',$_POST['MerEntre2'],PDO::PARAM_INT);
  $req->bindValue('MercrediEntree3',$_POST['MerEntre3'],PDO::PARAM_INT);
  $req->bindValue('MercrediViande1',$_POST['Merviande1'],PDO::PARAM_INT);
  $req->bindValue('MercrediViande2',$_POST['Merviande2'],PDO::PARAM_INT);
  $req->bindValue('MercrediLegume1',$_POST['Merlegume1'],PDO::PARAM_INT);
  $req->bindValue('MercrediLegume2',$_POST['Merlegume2'],PDO::PARAM_INT);
  $req->bindValue('MercrediAss',$_POST['MerAsc'],PDO::PARAM_INT);
  $req->bindValue('MercrediLaitier1',$_POST['Merlaitage1'],PDO::PARAM_INT);
  $req->bindValue('MercrediLaitier2',$_POST['Merlaitage2'],PDO::PARAM_INT);
  $req->bindValue('MercrediLaitier3',$_POST['Merlaitage3'],PDO::PARAM_INT);
  $req->bindValue('MercrediDess1',$_POST['Merdessert1'],PDO::PARAM_INT);
  $req->bindValue('MercrediDess2',$_POST['Merdessert2'],PDO::PARAM_INT);
  $req->bindValue('MercrediDess3',$_POST['Merdessert3'],PDO::PARAM_INT);
  $req->bindValue('JeudiP',$_POST['Jp'],PDO::PARAM_INT);
  $req->bindValue('JeudiEntree1',$_POST['JeuEntre1'],PDO::PARAM_INT);
  $req->bindValue('JeudiEntree2',$_POST['JeuEntre2'],PDO::PARAM_INT);
  $req->bindValue('JeudiEntree3',$_POST['JeuEntre3'],PDO::PARAM_INT);
  $req->bindValue('JeudiViande1',$_POST['Jeuviande1'],PDO::PARAM_INT);
  $req->bindValue('JeudiViande2',$_POST['Jeuviande2'],PDO::PARAM_INT);
  $req->bindValue('JeudiLegume1',$_POST['Jeulegume1'],PDO::PARAM_INT);
  $req->bindValue('JeudiLegume2',$_POST['Jeulegume2'],PDO::PARAM_INT);
  $req->bindValue('JeudiAss',$_POST['JeuAsc'],PDO::PARAM_INT);
  $req->bindValue('JeudiLaitier1',$_POST['Jeulaitage1'],PDO::PARAM_INT);
  $req->bindValue('JeudiLaitier2',$_POST['Jeulaitage2'],PDO::PARAM_INT);
  $req->bindValue('JeudiLaitier3',$_POST['Jeulaitage3'],PDO::PARAM_INT);
  $req->bindValue('JeudiDess1',$_POST['Jeudessert1'],PDO::PARAM_INT);
  $req->bindValue('JeudiDess2',$_POST['Jeudessert2'],PDO::PARAM_INT);
  $req->bindValue('JeudiDess3',$_POST['Jeudessert3'],PDO::PARAM_INT);
  $req->bindValue('VendrediP"',$_POST['VP'],PDO::PARAM_INT);
  $req->bindValue('VendrediEntree1',$_POST['VEntre1'],PDO::PARAM_INT);
  $req->bindValue('VendrediEntree2',$_POST['VEntre2'],PDO::PARAM_INT);
  $req->bindValue('VendrediEntree3',$_POST['VEntre3'],PDO::PARAM_INT);
  $req->bindValue('VendrediViande1',$_POST['Vviande1'],PDO::PARAM_INT);
  $req->bindValue('VendrediViande2',$_POST['Vviande2'],PDO::PARAM_INT);
  $req->bindValue('VendrediLegume1',$_POST['Vlegume1'],PDO::PARAM_INT);
  $req->bindValue('VendrediLegume2',$_POST['Vlegume2'],PDO::PARAM_INT);
  $req->bindValue('VendrediAss',$_POST['VAsc'],PDO::PARAM_INT);
  $req->bindValue('VendrediLaitier1',$_POST['Vlaitage1'],PDO::PARAM_INT);
  $req->bindValue('VendrediLaitier2',$_POST['Vlaitage2'],PDO::PARAM_INT);
  $req->bindValue('VendrediLaitier3',$_POST['Vlaitage3'],PDO::PARAM_INT);
  $req->bindValue('VendrediDess1',$_POST['Vdessert1'],PDO::PARAM_INT);
  $req->bindValue('VendrediDess2',$_POST['Vdessert2'],PDO::PARAM_INT);
  $req->bindValue('VendrediDess3',$_POST['Vdessert3'],PDO::PARAM_INT);
  $req->bindValue('SamediP',$_POST['SP'],PDO::PARAM_INT);
  $req->bindValue('SamediEntree1',$_POST['SEntre1'],PDO::PARAM_INT);
  $req->bindValue('SamediEntree2',$_POST['SEntre2'],PDO::PARAM_INT);
  $req->bindValue('SamediEntree3',$_POST['SEntre3'],PDO::PARAM_INT);
  $req->bindValue('SamediViande1',$_POST['Sviande1'],PDO::PARAM_INT);
  $req->bindValue('SamediViande2',$_POST['Sviande2'],PDO::PARAM_INT);
  $req->bindValue('SamediLegume1',$_POST['Slegume1'],PDO::PARAM_INT);
  $req->bindValue('SamediLegume2',$_POST['Slegume2'],PDO::PARAM_INT);
  $req->bindValue('SamediAss',$_POST['SAsc'],PDO::PARAM_INT);
  $req->bindValue('SamediLaitier1',$_POST['Slaitage1'],PDO::PARAM_INT);
  $req->bindValue('SamediLaitier2',$_POST['Slaitage2'],PDO::PARAM_INT);
  $req->bindValue('SamediLaitier3',$_POST['Slaitage3'],PDO::PARAM_INT);
  $req->bindValue('SamediDess1',$_POST['Sdessert1'],PDO::PARAM_INT);
  $req->bindValue('SamediDess2',$_POST['Sdessert2'],PDO::PARAM_INT);
  $req->bindValue('SamediDess3',$_POST['Sdessert3'],PDO::PARAM_INT);
  $req->bindValue('DimancheP',$_POST['DP'],PDO::PARAM_INT);
  $req->bindValue('DimancheEntree1',$_POST['DEntre1'],PDO::PARAM_INT);
  $req->bindValue('DimancheEntree2',$_POST['DEntre2'],PDO::PARAM_INT);
  $req->bindValue('DimancheEntree3',$_POST['DEntre3'],PDO::PARAM_INT);
  $req->bindValue('DimancheViande1',$_POST['Dviande1'],PDO::PARAM_INT);
  $req->bindValue('DimancheViande2',$_POST['Dviande2'],PDO::PARAM_INT);
  $req->bindValue('DimancheLegume1',$_POST['Dlegume1'],PDO::PARAM_INT);
  $req->bindValue('DimancheLegume2',$_POST['Dlegume2'],PDO::PARAM_INT);
  $req->bindValue('DimancheAss',$_POST['DAsc'],PDO::PARAM_INT);
  $req->bindValue('DimancheLaitier1',$_POST['Dlaitage1'],PDO::PARAM_INT);
  $req->bindValue('DimancheLaitier2',$_POST['Dlaitage2'],PDO::PARAM_INT);
  $req->bindValue('DimancheLaitier3',$_POST['Dlaitage3'],PDO::PARAM_INT);
  $req->bindValue('DimancheDess1',$_POST['Ddessert1'],PDO::PARAM_INT);
  $req->bindValue('DimancheDess2',$_POST['Ddessert2'],PDO::PARAM_INT);
  $req->bindValue('DimancheDess3',$_POST['Ddessert3'],PDO::PARAM_INT);*/


$executeIsOk = $req->execute();
if ($executeIsOk) {
  $message="la modification a bien eu lieu";
} else {
  $message="Echec de la modification ";
}
 ?>
 <!DOCTYPE html>
 <html lang="fr" >
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" type="text/css" href="css/reboot.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">
   </head>
   <body>
     <?php include 'Header.php';?>
     <div class="alert info">
       <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
         <?php echo $message; ?>
     </div>


   </body>
 </html>
