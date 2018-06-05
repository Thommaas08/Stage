<?php
session_start();
ini_set("display_errors",0);error_reporting(0);
require 'ConnexionBDD.php';


//Conversion de 3 string en type date pour la BDD
            //Requete de l'insertion d'un Bénéficiaire
            $req = $bdd->prepare('INSERT INTO client(Civi,Nom,Prenom,Adress,Commune,Regime,DateNais,ContactCivi,Contact,TelContact,Telephone,AdressComp,ContactPre,ContactMail,CodePostal,LienParent)
            VALUES (:Civi,:Nom,:Prenom,:Adress,:Commune,:Regime,:DateNais,:ContactCivi,:Contact,:TelContact,:Telephone,:AdressComp,:ContactPre,:ContactMail,:CodePostal,:LienParent)');

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
              "Telephone"=>$_POST['Telephone'],
              "AdressComp"=>$_POST['AdresseComplet'],
              "ContactPre"=>$_POST['ContactPre'],
              "ContactMail"=>$_POST['MailContact'],
              "CodePostal"=>$_POST['AdresseCodeP'],
              "LienParent"=>$_POST['mon_champ2']

              ));

// print_r($req);
if ($req) {
  $message= 'Le Bénéficiaire a été Enregistrer';

}
else {
  $message="Echec de l'enregistrement du bénéficiare";
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
