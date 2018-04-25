<?php
require 'ConnexionBDD.php';
session_start();
            $nouveau_nom=$nouveau_nom.'.'.$extension_upload;
            //Requete de l'insertion menu classique
            $test = $bdd->exec("INSERT INTO MenuNormal (ID_Menu, Nom_Menu,
              LP, LE1, LV1, LLE1, LASC, LLAIT1, LDES1,
              MP, ME1, MV1,  MLE1, MASC, MLAIT1, MDES1,
              MEP, MEE1,  MEV1, MELE1, MEASC,
              JP, JE1, JV1, JLE1, JASC, JLAIT, JDES1,
              VP, VE1, VV1, VLE1, VASC, VLAIT1, VDES1,
              SP, SE1, SV1, SLE1, SASC, SLAIT1,  SDES1,
              DP, DE1, DV1, DLE1, DASC, DLAIT1,  DDES1,
              MELAIT1, MEDES1)
              VALUES (NULL, '".$_POST['NomMenu']."',
                '".$_POST['lP']."','".$_POST['lEntre1']."','".$_POST['lviande1']."', '".$_POST['llegume1']."',
                '".$_POST['LAsc']."', '".$_POST['llaitage1']."','".$_POST['ldessert1']."',
                 '".$_POST['Mp']."','".$_POST['MEntre1']."','".$_POST['Mviande1']."', '".$_POST['Mlegume1']."',
                 '".$_POST['MAsc']."', '".$_POST['Mlaitage1']."','".$_POST['Mdessert1']."',
                 '".$_POST['MerP']."','".$_POST['MerEntre1']."', '".$_POST['Merviande1']."','".$_POST['Merlegume1']."',
                 '".$_POST['MerAsc']."',
                 '".$_POST['Jp']."','".$_POST['JeuEntre1']."','".$_POST['Jeuviande1']."','".$_POST['Jeulegume1']."',
                 '".$_POST['JeuAsc']."', '".$_POST['Jeulaitage1']."', '".$_POST['Jeudessert1']."',
                 '".$_POST['VP']."','".$_POST['VEntre1']."','".$_POST['Vviande1']."','".$_POST['Vlegume1']."',
                 '".$_POST['VAsc']."', '".$_POST['Vlaitage1']."', '".$_POST['Vdessert1']."',
                 '".$_POST['SP']."','".$_POST['SEntre1']."','".$_POST['Sviande1']."', '".$_POST['Slegume1']."',
                 '".$_POST['SAsc']."', '".$_POST['Slaitage1']."', '".$_POST['Sdessert1']."',
                 '".$_POST['DP']."','".$_POST['DEntre1']."', '".$_POST['Dviande1']."', '".$_POST['Dlegume1']."',
                 '".$_POST['DAsc']."', '".$_POST['Dlaitage1']."','".$_POST['Ddessert1']."',
                 ,'".$_POST['Merlaitage1']."', '".$_POST['Merdessert1']."')");
            echo ("L'envoi a bien été effectué !");


header("Location: index.php ");

?>
