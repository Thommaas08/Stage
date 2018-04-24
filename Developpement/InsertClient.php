<?php
require 'ConnexionBDD.php';
session_start();
//Conversion de 3 string en type date pour la BDD
$date = $_POST['DateNaisA']."-".$_POST['DateNaisM']."-".$_POST['DateNaisJ'];
            $nouveau_nom=$nouveau_nom.'.'.$extension_upload;
            //Requete de l'insertion d'un Bénéficiaire
            $test = $bdd->exec("INSERT INTO Client(ID_Clt, Nom_Clt, Prenom_Clt, Adresse_Clt, Commune_Clt, Type_Menu, Status, Civilité, NumeroTel, Contact, TelContact, DateNais)
            VALUES ('NULL','".$_POST['Nom_Clt']."','".$_POST['Prenom_Clt']."', '".$_POST['AdreBenef']."', '".$_POST['ListeCommunes']."', '".$_POST['ListeCommunes']."',
             'ACTIF','".$_POST['ListeCivilité']."','".$_POST['usrtel']."', '".$_POST['PersoContact']."', '".$_POST['PersoUsrtel']."','$date')");
            echo ("L'envoi a bien été effectué !");


header("Location: index.php ");

?>
