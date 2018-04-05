<?php
try   //Connexion à la base de donnée avec message d'erreur
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=mysql-migrant2017.alwaysdata.net;dbname=migrant2017_projet', '144190_migrant', 'Migrant2017',$pdo_options);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
