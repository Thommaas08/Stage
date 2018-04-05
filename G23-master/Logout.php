<?php
// On démarre la session
session_start ();

session_unset ();
// On détruit notre session
session_destroy ();
// On redirige vers la page d'accueil
header ('location: index.php');
?>
