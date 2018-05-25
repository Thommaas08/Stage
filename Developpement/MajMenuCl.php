<?php
require 'ConnexionBDD.php';
$req = $bdd->prepare('UPDATE menuclassique set Nom_M=:Nom_M,Date_M=:Date_M,
  LundiPotage=:LundiPotage,LundiEntree1=:LundiEntree1,LundiEntree2=:LundiEntree2,LundiEntree3=:LundiEntree3,LundiViande1=:LundiViande1,LundiViande2=:LundiViande2,LundiLegume1=:LundiLegume1,
  LundiLegume2=:LundiLegume2,LundiAss=:LundiAss,LundiLaitier1=:LundiLaitier1,LundiLaitier2=:LundiLaitier2,LundiLaitier3=:LundiLaitier3,LundiDess1=:LundiDess1,LundiDess2=:LundiDess2,LundiDess3=:LundiDess3,
  MardiPotage=:MardiPotage,MardiEntree1=:MardiEntree1,MardiEntree2=:MardiEntree2,MardiEntree3=:MardiEntree3,MardiViande1=:MardiViande1,MardiViande2=:MardiViande2,MardiLegume1=:MardiLegume1,
  MardiLegume2=:MardiLegume2,MardiAss=:MardiAss,MardiLaitier1=:MardiLaitier1,MardiLaitier2=:MardiLaitier2,MardiLaitier3=:MardiLaitier3,MardiDess1=:MardiDess1,MardiDess2=:MardiDess2,MardiDess3=:MardiDess3,
  MercrediP=:MercrediP,MercrediEntree1=:MercrediEntree1,MercrediEntree2=:MercrediEntree2,MercrediEntree3=:MercrediEntree3,MercrediViande1=:MercrediViande1,MercrediViande2=:MercrediViande2,MercrediLegume1=:MercrediLegume1,
  MercrediLegume2=:MercrediLegume2,MercrediAss=:MercrediAss,MercrediLaitier1=:MercrediLaitier1,MercrediLaitier2=:MercrediLaitier2,MercrediLaitier3=:MercrediLaitier3,MercrediDess1=:MercrediDess1,MercrediDess2=:MercrediDess2,MercrediDess3=:MercrediDess3,
  JeudiP=:JeudiP,JeudiEntree1=:JeudiEntree1,JeudiEntree2=:JeudiEntree2,JeudiEntree3=:JeudiEntree3,JeudiViande1=:JeudiViande1,JeudiViande2=:JeudiViande2,JeudiLegume1=:JeudiLegume1,
  JeudiLegume2=:JeudiLegume2,JeudiAss=:JeudiAss,JeudiLaitier1=:JeudiLaitier1,JeudiLaitier2=:JeudiLaitier2,JeudiLaitier3=:JeudiLaitier3,JeudiDess1=:JeudiDess1,JeudiDess2=:JeudiDess2,JeudiDess3=:JeudiDess3,
  VendrediP=:VendrediP,VendrediEntree1=:VendrediEntree1,VendrediEntree2=:VendrediEntree2,VendrediEntree3=:VendrediEntree3,VendrediViande1=:VendrediViande1,VendrediViande2=:VendrediViande2,VendrediLegume1=:VendrediLegume1,
  VendrediLegume2=:VendrediLegume2,VendrediAss=:VendrediAss,VendrediLaitier1=:VendrediLaitier1,VendrediLaitier2=:VendrediLaitier2,VendrediLaitier3=:VendrediLaitier3,VendrediDess1=:VendrediDess1,VendrediDess2=:VendrediDess2,VendrediDess3=:VendrediDess3,
  SamediP=:SamediP,SamediEntree1=:SamediEntree1,SamediEntree2=:SamediEntree2,SamediEntree3=:SamediEntree3,SamediViande1=:SamediViande1,SamediViande2=:SamediViande2,SamediLegume1=:SamediLegume1,
  SamediLegume2=:SamediLegume2,SamediAss=:SamediAss,SamediLaitier1=:SamediLaitier1,SamediLaitier2=:SamediLaitier2,SamediLaitier3=:SamediLaitier3,SamediDess1=:SamediDess1,SamediDess2=:SamediDess2,SamediDess3=:SamediDess3,
  DimancheP=:DimancheP,DimancheEntree1=:DimancheEntree1,DimancheEntree2=:DimancheEntree2,DimancheEntree3=:DimancheEntree3,DimancheViande1=:DimancheViande1,DimancheViande2=:DimancheViande2,DimancheLegume1=:DimancheLegume1,
  DimancheLegume2=:DimancheLegume2,
  DimancheAss=:DimancheAss,
  DimancheLaitier1=:DimancheLaitier1,
  DimancheLaitier2=:DimancheLaitier2,
  DimancheLaitier3=:DimancheLaitier3,
  DimancheDess1=:DimancheDess1,
  DimancheDess2=:DimancheDess2,
  DimancheDess3=:DimancheDess3







  WHERE  Id=:num LIMIT 1');

  $req->bindValue(':num', $_POST['Id'],PDO::PARAM_INT);
  $req->bindValue(':Nom_M', $_POST['Nom_M'],PDO::PARAM_INT);
  $req->bindValue(':Date_M', $_POST['Date_M'],PDO::PARAM_INT);
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
  $req->bindValue(':MardiPotage',$_POST['MardiPotage'],PDO::PARAM_INT);
  $req->bindValue('MardiEntree1',$_POST['MardiEntree1'],PDO::PARAM_INT);
  $req->bindValue('MardiEntree2',$_POST['MardiEntree2'],PDO::PARAM_INT);
  $req->bindValue('MardiEntree3',$_POST['MardiEntree3'],PDO::PARAM_INT);
  $req->bindValue('MardiViande1',$_POST['MardiViande1'],PDO::PARAM_INT);
  $req->bindValue('MardiViande2',$_POST['MardiViande2'],PDO::PARAM_INT);
  $req->bindValue('MardiLegume1',$_POST['MardiLegume1'],PDO::PARAM_INT);
  $req->bindValue('MardiLegume2',$_POST['MardiLegume2'],PDO::PARAM_INT);
  $req->bindValue('MardiAss',$_POST['MardiAss'],PDO::PARAM_INT);
  $req->bindValue('MardiLaitier1',$_POST['MardiLaitier1'],PDO::PARAM_INT);
  $req->bindValue('MardiLaitier2',$_POST['MardiLaitier2'],PDO::PARAM_INT);
  $req->bindValue('MardiLaitier3',$_POST['MardiLaitier3'],PDO::PARAM_INT);
  $req->bindValue('MardiDess1',$_POST['MardiDess1'],PDO::PARAM_INT);
  $req->bindValue('MardiDess2',$_POST['MardiDess2'],PDO::PARAM_INT);
  $req->bindValue('MardiDess3',$_POST['MardiDess3'],PDO::PARAM_INT);
  $req->bindValue('MercrediP',$_POST['MercrediP'],PDO::PARAM_INT);
  $req->bindValue('MercrediEntree1',$_POST['MercrediEntree1'],PDO::PARAM_INT);
  $req->bindValue('MercrediEntree2',$_POST['MercrediEntree2'],PDO::PARAM_INT);
  $req->bindValue('MercrediEntree3',$_POST['MercrediEntree3'],PDO::PARAM_INT);
  $req->bindValue('MercrediViande1',$_POST['MercrediViande1'],PDO::PARAM_INT);
  $req->bindValue('MercrediViande2',$_POST['MercrediViande2'],PDO::PARAM_INT);
  $req->bindValue('MercrediLegume1',$_POST['MercrediLegume1'],PDO::PARAM_INT);
  $req->bindValue('MercrediLegume2',$_POST['MercrediLegume2'],PDO::PARAM_INT);
  $req->bindValue('MercrediAss',$_POST['MercrediAss'],PDO::PARAM_INT);
  $req->bindValue('MercrediLaitier1',$_POST['MercrediLaitier1'],PDO::PARAM_INT);
  $req->bindValue('MercrediLaitier2',$_POST['MercrediLaitier2'],PDO::PARAM_INT);
  $req->bindValue('MercrediLaitier3',$_POST['MercrediLaitier3'],PDO::PARAM_INT);
  $req->bindValue('MercrediDess1',$_POST['MercrediDess1'],PDO::PARAM_INT);
  $req->bindValue('MercrediDess2',$_POST['MercrediDess2'],PDO::PARAM_INT);
  $req->bindValue('MercrediDess3',$_POST['MercrediDess3'],PDO::PARAM_INT);
  $req->bindValue('JeudiP',$_POST['JeudiP'],PDO::PARAM_INT);
  $req->bindValue('JeudiEntree1',$_POST['JeudiEntree1'],PDO::PARAM_INT);
  $req->bindValue('JeudiEntree2',$_POST['JeudiEntree2'],PDO::PARAM_INT);
  $req->bindValue('JeudiEntree3',$_POST['JeudiEntree3'],PDO::PARAM_INT);
  $req->bindValue('JeudiViande1',$_POST['JeudiViande1'],PDO::PARAM_INT);
  $req->bindValue('JeudiViande2',$_POST['JeudiViande2'],PDO::PARAM_INT);
  $req->bindValue('JeudiLegume1',$_POST['JeudiLegume1'],PDO::PARAM_INT);
  $req->bindValue('JeudiLegume2',$_POST['JeudiLegume2'],PDO::PARAM_INT);
  $req->bindValue('JeudiAss',$_POST['JeudiAss'],PDO::PARAM_INT);
  $req->bindValue('JeudiLaitier1',$_POST['JeudiLaitier1'],PDO::PARAM_INT);
  $req->bindValue('JeudiLaitier2',$_POST['JeudiLaitier2'],PDO::PARAM_INT);
  $req->bindValue('JeudiLaitier3',$_POST['JeudiLaitier3'],PDO::PARAM_INT);
  $req->bindValue('JeudiDess1',$_POST['JeudiDess1'],PDO::PARAM_INT);
  $req->bindValue('JeudiDess2',$_POST['JeudiDess2'],PDO::PARAM_INT);
  $req->bindValue('JeudiDess3',$_POST['JeudiDess3'],PDO::PARAM_INT);
  $req->bindValue('VendrediP',$_POST['VendrediP'],PDO::PARAM_INT);
  $req->bindValue('VendrediEntree1',$_POST['VendrediEntree1'],PDO::PARAM_INT);
  $req->bindValue('VendrediEntree2',$_POST['VendrediEntree2'],PDO::PARAM_INT);
  $req->bindValue('VendrediEntree3',$_POST['VendrediEntree3'],PDO::PARAM_INT);
  $req->bindValue('VendrediViande1',$_POST['VendrediViande1'],PDO::PARAM_INT);
  $req->bindValue('VendrediViande2',$_POST['VendrediViande2'],PDO::PARAM_INT);
  $req->bindValue('VendrediLegume1',$_POST['VendrediLegume1'],PDO::PARAM_INT);
  $req->bindValue('VendrediLegume2',$_POST['VendrediLegume2'],PDO::PARAM_INT);
  $req->bindValue('VendrediAss',$_POST['VendrediAss'],PDO::PARAM_INT);
  $req->bindValue('VendrediLaitier1',$_POST['VendrediLaitier1'],PDO::PARAM_INT);
  $req->bindValue('VendrediLaitier2',$_POST['VendrediLaitier2'],PDO::PARAM_INT);
  $req->bindValue('VendrediLaitier3',$_POST['VendrediLaitier3'],PDO::PARAM_INT);
  $req->bindValue('VendrediDess1',$_POST['VendrediDess1'],PDO::PARAM_INT);
  $req->bindValue('VendrediDess2',$_POST['VendrediDess2'],PDO::PARAM_INT);
  $req->bindValue('VendrediDess3',$_POST['VendrediDess3'],PDO::PARAM_INT);
  $req->bindValue('SamediP',$_POST['SamediP'],PDO::PARAM_INT);
  $req->bindValue('SamediEntree1',$_POST['SamediEntree1'],PDO::PARAM_INT);
  $req->bindValue('SamediEntree2',$_POST['SamediEntree2'],PDO::PARAM_INT);
  $req->bindValue('SamediEntree3',$_POST['SamediEntree3'],PDO::PARAM_INT);
  $req->bindValue('SamediViande1',$_POST['SamediViande1'],PDO::PARAM_INT);
  $req->bindValue('SamediViande2',$_POST['SamediViande2'],PDO::PARAM_INT);
  $req->bindValue('SamediLegume1',$_POST['SamediLegume1'],PDO::PARAM_INT);
  $req->bindValue('SamediLegume2',$_POST['SamediLegume2'],PDO::PARAM_INT);
  $req->bindValue('SamediAss',$_POST['SamediAss'],PDO::PARAM_INT);
  $req->bindValue('SamediLaitier1',$_POST['SamediLaitier1'],PDO::PARAM_INT);
  $req->bindValue('SamediLaitier2',$_POST['SamediLaitier2'],PDO::PARAM_INT);
  $req->bindValue('SamediLaitier3',$_POST['SamediLaitier3'],PDO::PARAM_INT);
  $req->bindValue('SamediDess1',$_POST['SamediDess1'],PDO::PARAM_INT);
  $req->bindValue('SamediDess2',$_POST['SamediDess2'],PDO::PARAM_INT);
  $req->bindValue('SamediDess3',$_POST['SamediDess3'],PDO::PARAM_INT);
  $req->bindValue('DimancheP',$_POST['DimancheP'],PDO::PARAM_INT);
  $req->bindValue('DimancheEntree1',$_POST['DimancheEntree1'],PDO::PARAM_INT);
  $req->bindValue('DimancheEntree2',$_POST['DimancheEntree2'],PDO::PARAM_INT);
  $req->bindValue('DimancheEntree3',$_POST['DimancheEntree3'],PDO::PARAM_INT);
  $req->bindValue('DimancheViande1',$_POST['DimancheViande1'],PDO::PARAM_INT);
  $req->bindValue('DimancheViande2',$_POST['DimancheViande2'],PDO::PARAM_INT);
  $req->bindValue('DimancheLegume1',$_POST['DimancheLegume1'],PDO::PARAM_INT);
  $req->bindValue('DimancheLegume2',$_POST['DimancheLegume2'],PDO::PARAM_INT);
  $req->bindValue('DimancheAss',$_POST['DimancheAss'],PDO::PARAM_INT);
  $req->bindValue('DimancheLaitier1',$_POST['DimancheLaitier1'],PDO::PARAM_INT);
  $req->bindValue('DimancheLaitier2',$_POST['DimancheLaitier2'],PDO::PARAM_INT);
  $req->bindValue('DimancheLaitier3',$_POST['DimancheLaitier3'],PDO::PARAM_INT);
  $req->bindValue('DimancheDess1',$_POST['DimancheDess1'],PDO::PARAM_INT);
  $req->bindValue('DimancheDess2',$_POST['DimancheDess2'],PDO::PARAM_INT);
  $req->bindValue('DimancheDess3',$_POST['DimancheDess3'],PDO::PARAM_INT);


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
     <div class="alert warning">
       <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
         <?php echo $message; ?>
     </div>


   </body>
 </html>
