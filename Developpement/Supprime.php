<?php
require 'ConnexionBDD.php';
$req=$bdd->prepare("DELETE FROM client WHERE Id = :num limit 1");
$req -> bindValue(':num',$_GET['numclient'],PDO::PARAM_INT);
$executeIsOk = $req->execute();
if ($executeIsOk) {
  $message= 'le contact a été supprimer';

}
else {
  $message="Echec de la suppression du Bénéficiaire";
  // code...
}

// header("Location:index.php");

?>
<!DOCTYPE html>
<html lang="fr" >
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/reboot.css">
  <link rel="stylesheet" type="text/css" href="css/MonStyle.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
  <?php include 'Header.php';?>
  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <?php echo $message ?>
  </div>
</body>
</html>
