<?php
require 'ConnexionBDD.php';
session_start();

            //Requete de l'insertion menu classique
            $req = $bdd->prepare('INSERT INTO commande(Id_b,Id_M,LundiPotage,LundiEntree,LundiViande,LundiLegume,LundiAss)
            VALUES (:Id_b,:Id_M,:LundiPotage,:LundiEntree,:LundiViande,:LundiLegume,:LundiAss)');

            $req->execute(array(
              "Id_b"=>$_POST['Id'],
              "Id_M"=>$_POST['IdMenu'],
              "LundiPotage"=>$_POST['mon_champ'],
              "LundiEntree"=>$_POST['mon_champ1'],
              "LundiViande"=>$_POST['Viande1'],
              "LundiLegume"=>$_POST['legume1'],
              "LundiAss"=>$_POST['LAsc']



              ));
            // echo ("L'envoi a bien été effectué !");
//,,,,,,
// header("Location: index.php ");
 //print_r($req);
 if ($req) {
   $message= 'La commande a été Enregistrer';

 }
 else {
   $message="Echec de l'enregistrement de la commande";
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
