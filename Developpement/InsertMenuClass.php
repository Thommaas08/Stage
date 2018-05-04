<?php
require 'ConnexionBDD.php';
session_start();
            //Requete de l'insertion menu classique
            $req = $bdd->prepare('INSERT INTO menuClassique(Nom_M,Date_M,LundiPotage,LundiEntree1,LundiEntree2,LundiEntree3,LundiViande1,LundiViande2,LundiLegume1,LundiLegume2,LundiAss,LundiLaitier1,LundiLaitier2,LundiLaitier3,LundiDess1,LundiDess2,LundiDess3,MardiPotage,MardiEntree1,MardiEntree2,MardiEntree3,MardiViande1,MardiViande2,MardiLegume1,MardiLegume2)
            VALUES (:Nom_M,:Date_M,:LundiPotage,:LundiEntree1,:LundiEntree2,:LundiEntree3,:LundiViande1,:LundiViande2,:LundiLegume1,:LundiLegume2,:LundiAss,:LundiLaitier1,:LundiLaitier2,:LundiLaitier3,:LundiDess1,:LundiDess2,:LundiDess3,
            :MardiPotage,:MardiEntree1,:MardiEntree2,:MardiEntree3,:MardiViande1,:MardiViande2,:MardiLegume1,:MardiLegume2)');

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
              "MardiLegume2"=>$_POST['Mlegume2']


              ));

            // echo ("L'envoi a bien été effectué !");


// header("Location: index.php ");
 print_r($req);

?>
