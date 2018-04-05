<?php
require 'CoBDD.php';
session_start();
//Conversion de 3 string en type date pour la BDD
$date = $_POST['DateNaisA']."-".$_POST['DateNaisM']."-".$_POST['DateNaisJ'];
//Photo du réfugié : Nom stocké sur la bdd (ex : photo.jpg) + upload dans un dossier sur le serveur
//Formatage du nom de la photo pour l'upload sur bdd et serveur
$nouveau_nom = $_FILES['Photo']['name'];
$content_dir = 'img/Photo/';
$tmp_file = $_FILES['Photo']['tmp_name'];
$nouveau_nom = rand (1, 100000);

$camps = intval($_SESSION['Camps'],8);
//Si il n'y a pas d'erreur dans le formatage
if (isset($_FILES['Photo']) AND $_FILES['Photo']['error'] == 0)
{
    //Test si la photo est supérieur à 10Mo, ne peux pas upload
    if ($_FILES['Photo']['size'] <= 10000000)
    {
        $infosfichier = pathinfo($_FILES['Photo']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        if (in_array($extension_upload, $extensions_autorisees))
          {
            $nouveau_nom=$nouveau_nom.'.'.$extension_upload;
            //move_uploaded_file permet d'upload l'image sur le serveur
            move_uploaded_file($tmp_file, $content_dir.$nouveau_nom);
            //Requete de l'insertion d'un réfugié
            $test = $bdd->exec("INSERT INTO Refugies(ID,Nom,Prenom,Civilite,Profession,Date_Naissance,Photo,Ville,Nationalite,Grp_Sanguin,Etat,ID_Camps)
                        VALUES ('','".$_POST['NameRef']."','".$_POST['PrenomRef']."','".$_POST['ListeCivilité']."',
                        '".$_POST['Prof']."','$date','".$nouveau_nom."','".$_POST['VilleRef']."','".$_POST['ListeNationalite']."',
                        '".$_POST['GrpSang']."','".$_POST['Etat']."',$camps)");
            echo ("L'envoi a bien été effectué !");
          }
    }
}

//$lastid = $bdd->exec('SELECT ID FROM Refugies');
header("Location: index.php ");

?>
