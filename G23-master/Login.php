<?php
session_start();
$pdo = new PDO('mysql:host=mysql-migrant2017.alwaysdata.net;dbname=migrant2017_projet', '144190_migrant', 'Migrant2017');
$pdo->query("SET NAMES UTF8");
$stmt=$pdo->prepare("select * from Utilisateurs where Login=?");
$stmt->execute(array($_POST['identifiant']));

$grain = "Projet";
$sel = "Migrant";
$mdp = $_POST['password'];
$sha1 = sha1($grain.$mdp.$sel);

if($stmt->rowCount()==1){

	$ligne=$stmt->fetch(PDO::FETCH_ASSOC);
	if($ligne['Mdp']==($sha1)) {
		$_SESSION['id']=$_POST['identifiant'];
		header("Location:index.php");
		$_SESSION['Role'] = $ligne['Role'];
		$_SESSION['Camps'] = $ligne['ID_Camps'];
	}
	else
	{
		header("Location:Connexion.php");


	}
}
?>
