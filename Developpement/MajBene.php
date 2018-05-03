<?php
require 'ConnexionBDD.php';
$req = $bdd->prepare('UPDATE client set Civi=:Civi,Nom=:Nom,Prenom=:Prenom,Adress=:Adress,Commune=:Commune,Regime=:Regime,DateNais=:DateNais,ContactCivi=:ContactCivi,Contact=:Contact,TelContact=:TelContact,Telephone=:Telephone WHERE  Id=:num LIMIT 1');

  $req->bindValue(':num', $_POST['Id'],PDO::PARAM_INT);
  $req->bindValue(':Civi', $_POST['mon_champ'],PDO::PARAM_INT);
  $req->bindValue(':Nom', $_POST['Nom'],PDO::PARAM_INT);
  $req->bindValue(':Prenom', $_POST['Prenom'],PDO::PARAM_INT);
  $req->bindValue(':Adress', $_POST['Adresse'],PDO::PARAM_INT);
  $req->bindValue(':Commune', $_POST['Commune'],PDO::PARAM_INT);
  $req->bindValue(':Regime', $_POST['Regime'],PDO::PARAM_INT);
  $req->bindValue(':DateNais', $_POST['DateNais'],PDO::PARAM_INT);
  $req->bindValue(':ContactCivi', $_POST['mon_champ1'],PDO::PARAM_INT);
  $req->bindValue(':Contact', $_POST['Contact'],PDO::PARAM_INT);
  $req->bindValue(':TelContact', $_POST['TelContact'],PDO::PARAM_INT);
  $req->bindValue(':Telephone', $_POST['Telephone'],PDO::PARAM_INT);


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

  <?php echo $message; ?>

   </body>
 </html>
