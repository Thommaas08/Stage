<?php
try   //Connexion à la base de donnée avec message d'erreur
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:mysql-stage042018.alwaysdata.net;dbname=stage042018_cclo', '156947_stage', 'STAGE2018');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
