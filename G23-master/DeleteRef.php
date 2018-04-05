<?php
  require 'CoBDD.php';
  date_default_timezone_set('UTC');
  $bdd->exec("UPDATE Historique SET Date_Fin = now() WHERE Refugies='".$_POST['user_id']."'");
  header("Location:index.php");
?>
