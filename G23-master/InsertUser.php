<?php
require 'CoBDD.php';
//Hashage en Sha1 avec la technique "Un grain de Sel" -> Ajouté un mot au début et à la fin du mot de passe et tout hashé ensemble, mots qui doivent bien sur
//être normalement complexe et inconnu.
$grain = "Projet";
$sel = "Migrant";
$mdp = $_POST['password'];
$sha1 = sha1($grain.$mdp.$sel);
try {
  $bdd->exec("INSERT INTO Utilisateurs(ID,Login,Mdp,Adresse_mail, Role,ID_Camps)
    VALUES ('','".$_POST['identifiant']."','".$sha1."','".$_POST['email']."',
    '".$_POST['role']."','".$_POST['camp']."')");
  header("Location: index.php ");
} catch (Exception $e) {
  var_dump($e->getMessage());
}
?>
