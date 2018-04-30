<?php
session_start();
require 'ConnexionBDD.php';
//Conversion de 3 string en type date pour la BDD
$date = $_POST['DateNaisA']."-".$_POST['DateNaisM']."-".$_POST['DateNaisJ'];
            //Requete de l'insertion d'un Bénéficiaire
            $req = $bdd->prepare('INSERT INTO bénéficiare(Nom_Clt, Prenom_Clt, Adresse_Clt, Commune_Clt, Type_Menu, etat, Civilité, NumeroTel, Contact, TelContact, DateNais)
            VALUES (:Nom_Clt,:Prenom_Clt,:Adresse_Clt,:Commune_Clt,:Type_Menu,:etat,:Civilité,:NumeroTel,:Contact,:TelContact,:DateNais)');

            $req->execute(array(
              "Nom_Clt"=> $_POST['Nom_Clt'],
              "Prenom_Clt"=> $_POST['Prenom_Clt'],
              "Adresse_Clt"=> $_POST['AdreBenef'],
              "Commune_Clt"=> $_POST['ListeCommunes'],
              "Type_Menu"=> $_POST['ListeMenu'],
              "etat"=> 'Actif',
              "Civilité"=> $_POST['ListeCivilité'],
              "NumeroTel"=> $_POST['usrtel'],
              "Contact"=> $_POST['PersoContact'],
              "TelContact"=> $_POST['PersoUsrtel'],
              "DateNais"=>$date
              ));
//header("Location: index.php ");
print_r($req);
?>
