<?php
session_start();
require 'ConnexionBDD.php';
//Conversion de 3 string en type date pour la BDD
            //Requete de l'insertion d'un Bénéficiaire
            $req = $bdd->prepare('INSERT INTO client(Civi,Nom,Prenom,Adress,Commune,Regime,DateNais,ContactCivi,Contact,TelContact,Telephone)
            VALUES (:Civi,:Nom,:Prenom,:Adress,:Commune,:Regime,:DateNais,:ContactCivi,:Contact,:TelContact,:Telephone)');

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
              "TelContact"=>$_POST['TelContact'],
              "Telephone"=>$_POST['Telephone']

              ));
header("Location:index.php");
// print_r($req);
?>
