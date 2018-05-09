<?php
require 'ConnexionBDD.php';
session_start();
            //Requete de l'insertion menu classique
            $req = $bdd->prepare('INSERT INTO menussucre(Nom_M,Date_M,LundiPotage,LundiEntree1,LundiViande1,LundiLegume1,LundiLaitier1,LundiDess1,
              MardiPotage,MardiEntree1,MardiViande1,MardiLegume1,MardiLaitier1,MardiDess1,
            MercrediP,MercrediEntree1,MercrediViande1,MercrediLegume1,MercrediLaitier1,MercrediDess1,
            JeudiP,JeudiEntree1,JeudiViande1,JeudiLegume1,JeudiLaitier1,JeudiDess1,
            VendrediP,VendrediEntree1,VendrediViande1,VendrediLegume1,VendrediLaitier1,VendrediDess1,
            SamediP,SamediEntree1,SamediViande1,SamediLegume1,SamediLaitier1,SamediDess1,
            DimancheP,DimancheEntree1,DimancheViande1,DimancheLegume1,DimancheLaitier1,DimancheDess1)
            VALUES (:Nom_M,:Date_M,:LundiPotage,:LundiEntree1,:LundiViande1,:LundiLegume1,:LundiLaitier1,:LundiDess1,
            :MardiPotage,:MardiEntree1,:MardiViande1,:MardiLegume1,:MardiLaitier1,:MardiDess1,
            :MercrediP,:MercrediEntree1,:MercrediViande1,:MercrediLegume1,:MercrediLaitier1,:MercrediDess1,
            :JeudiP,:JeudiEntree1,:JeudiViande1,:JeudiLegume1,:JeudiLaitier1,:JeudiDess1,
            :VendrediP,:VendrediEntree1,:VendrediViande1,:VendrediLegume1,:VendrediLaitier1,:VendrediDess1,
            :SamediP,:SamediEntree1,:SamediViande1,:SamediLegume1,:SamediLaitier1,:SamediDess1,
            :DimancheP,:DimancheEntree1,:DimancheViande1,:DimancheLegume1,:DimancheLaitier1,:DimancheDess1)');

            $req->execute(array(
              "Nom_M"=>$_POST['NomMenu'],
              "Date_M"=>$_POST['DateM'],
              "LundiPotage"=>$_POST['lP'],
              "LundiEntree1"=>$_POST['lEntre1'],
              "LundiViande1"=>$_POST['lviande1'],
              "LundiLegume1"=>$_POST['llegume1'],
              "LundiLaitier1"=>$_POST['llaitage1'],
              "LundiDess1"=>$_POST['ldessert1'],
              "MardiPotage"=>$_POST['Mp'],
              "MardiEntree1"=>$_POST['MEntre1'],
              "MardiViande1"=>$_POST['Mviande1'],
              "MardiLegume1"=>$_POST['Mlegume1'],
              "MardiLaitier1"=>$_POST['Mlaitage1'],
              "MardiDess1"=>$_POST['Mdessert1'],
              "MercrediP"=>$_POST['MerP'],
              "MercrediEntree1"=>$_POST['MerEntre1'],
              "MercrediViande1"=>$_POST['Merviande1'],
              "MercrediLegume1"=>$_POST['Merlegume1'],
              "MercrediLaitier1"=>$_POST['Merlaitage1'],
              "MercrediDess1"=>$_POST['Merdessert1'],
              "JeudiP"=>$_POST['Jp'],
              "JeudiEntree1"=>$_POST['JeuEntre1'],
              "JeudiViande1"=>$_POST['Jeuviande1'],
              "JeudiLegume1"=>$_POST['Jeulegume1'],
              "JeudiLaitier1"=>$_POST['Jeulaitage1'],
              "JeudiDess1"=>$_POST['Jeudessert1'],
              "VendrediP"=>$_POST['VP'],
              "VendrediEntree1"=>$_POST['VEntre1'],
              "VendrediViande1"=>$_POST['Vviande1'],
              "VendrediLegume1"=>$_POST['Vlegume1'],
              "VendrediLaitier1"=>$_POST['Vlaitage1'],
              "VendrediDess1"=>$_POST['Vdessert1'],
              "SamediP"=>$_POST['SP'],
              "SamediEntree1"=>$_POST['SEntre1'],
              "SamediViande1"=>$_POST['Sviande1'],
              "SamediLegume1"=>$_POST['Slegume1'],
              "SamediLaitier1"=>$_POST['Slaitage1'],
              "SamediDess1"=>$_POST['Sdessert1'],
              "DimancheP"=>$_POST['DP'],
              "DimancheEntree1"=>$_POST['DEntre1'],
              "DimancheViande1"=>$_POST['Dviande1'],
              "DimancheLegume1"=>$_POST['Dlegume1'],
              "DimancheLaitier1"=>$_POST['Dlaitage1'],
              "DimancheDess1"=>$_POST['Ddessert1']



              ));
            // echo ("L'envoi a bien été effectué !");
//,,,,,,
// header("Location: index.php ");
 print_r($req);

?>
