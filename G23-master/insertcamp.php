<?php
require'CoBDD.php';
//Requete SQL de l'insertion d'un camp depuis le formulaire "AddCamp.php"
$bdd->exec("INSERT INTO Camps(ID, Nom, Capacite,Ville, Pays,ID_Centrale) VALUES ('','".$_POST['NomCamp']."',".$_POST['CapaciteCamp'].",'".$_POST['VilleCamp']."','".$_POST['ListeNat']."',1)");

header("Location: index.php ")
?>
