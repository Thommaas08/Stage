<?php
require 'ConnexionBDD.php';
session_start();
            $nouveau_nom=$nouveau_nom.'.'.$extension_upload;
            //Requete de l'insertion menu classique
            $req = $bdd->prepare('INSERT INTO client(Civi,Nom,Prenom,Adress,Commune,Regime,DateNais,ContactCivi,Contact,TelContact)
            VALUES (:Civi,:Nom,:Prenom,:Adress,:Commune,:Regime,:DateNais,:ContactCivi,:Contact,:TelContact)');

            $req->execute(array(
              "Civi"=>$_POST['mon_champ'],
              "Nom"=>$_POST['Nom'],
              "Prenom"=>$_POST['Prenom'],
              "Adress"=>$_POST['Adresse'],
              "Commune"=>$_POST['Commune'],
              "Regime"=>$_POST['mon_Menu'],
              "DateNais"=>$_POST['DateNais'],
              "ContactCivi"=>$_POST['mon_champ1'],
              "Contact"=>$_POST['Contact'],
              "TelContact"=>$_POST['TelContact']));

            echo ("L'envoi a bien été effectué !");


header("Location: index.php ");

?>
