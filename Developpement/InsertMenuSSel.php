<?php
require 'ConnexionBDD.php';
session_start();
            $nouveau_nom=$nouveau_nom.'.'.$extension_upload;
            //Requete de l'insertion menu classique
            $test = $bdd->exec("INSERT INTO MenuNormal (ID_Menu, Nom_Menu,
              LP, LE1, LE2, LE3, LV1, LV2, LLE1, LLE2, LASC, LLAIT1, LLAIT2, LLAIT3, LDES1, LDES2, LDES3,
              MP, ME1, ME2, ME3, MV1, MV2, MLE1, MLE2, MASC, MLAIT1, MLAIT2, MLAIT3, MDES1, MDES2, MDES3,
              MEP, MEE1, MEE2, MEE3, MEV1, MEV2, MELE1, MELE2, MEASC,
              JP, JE1, JE2, JE3, JV1, JV2, JLE1, JLE2, JASC, JLAIT, JLAIT2, JLAIT3, JDES1, JDES2, JDES3,
              VP, VE1, VE2, VE3, VV1, VV2, VLE1, VLE2, VASC, VLAIT1,VLAIT2, VLAIT3, VDES1, VDES2, VDES3,
              SP, SE1, SE2, SE3, SV1, SV2, SLE1, SLE2, SASC, SLAIT1, SLAIT2, SLAIT3, SDES1, SDES2, SDES3,
              DP, DE1, DE2, DE3, DV1, DV2, DLE1, DLE2, DASC, DLAIT1, DLAIT2, DLAIT3, DDES1, DDES2, DDES3,
              MELAIT1, MELAIT2, MELAIT3, MEDES1, MEDES2, MEDES3)
              VALUES (NULL, '".$_POST['NomMenu']."',
                 '".$_POST['lP']."','".$_POST['lEntre1']."', '".$_POST['lEntre2']."', '".$_POST['lEntre3']."', '".$_POST['lviande1']."', '".$_POST['lviande2']."', '".$_POST['llegume1']."', '".$_POST['llegume2']."',
                  '".$_POST['LAsc']."', '".$_POST['llaitage1']."', '".$_POST['llaitage2']."', '".$_POST['llaitage3']."', '".$_POST['ldessert1']."', '".$_POST['ldessert2']."', '".$_POST['ldessert3']."',
                 '".$_POST['Mp']."','".$_POST['MEntre1']."', '".$_POST['MEntre2']."', '".$_POST['MEntre3']."', '".$_POST['Mviande1']."', '".$_POST['Mviande2']."', '".$_POST['Mlegume1']."', '".$_POST['Mlegume2']."',
                 '".$_POST['MAsc']."', '".$_POST['Mlaitage1']."', '".$_POST['Mlaitage2']."', '".$_POST['Mlaitage3']."', '".$_POST['Mdessert1']."', '".$_POST['Mdessert2']."', '".$_POST['Mdessert3']."',
                 '".$_POST['MerP']."','".$_POST['MerEntre1']."', '".$_POST['MerEntre2']."', '".$_POST['MerEntre3']."', '".$_POST['Merviande1']."', '".$_POST['Merviande2']."', '".$_POST['Merlegume1']."', '".$_POST['Merlegume2']."',
                 '".$_POST['MerAsc']."',
                 '".$_POST['Jp']."','".$_POST['JeuEntre1']."', '".$_POST['JeuEntre2']."', '".$_POST['JeuEntre3']."', '".$_POST['Jeuviande1']."', '".$_POST['Jeuviande2']."', '".$_POST['Jeulegume1']."', '".$_POST['Jeulegume2']."',
                 '".$_POST['JeuAsc']."', '".$_POST['Jeulaitage1']."', '".$_POST['Jeulaitage2']."', '".$_POST['Jeulaitage3']."', '".$_POST['Jeudessert1']."', '".$_POST['Jeudessert2']."', '".$_POST['Jeudessert3']."',
                 '".$_POST['VP']."','".$_POST['VEntre1']."', '".$_POST['VEntre2']."', '".$_POST['VEntre3']."', '".$_POST['Vviande1']."', '".$_POST['Vviande2']."', '".$_POST['Vlegume1']."', '".$_POST['Vlegume2']."',
                 '".$_POST['VAsc']."', '".$_POST['Vlaitage1']."', '".$_POST['Vlaitage2']."', '".$_POST['Vlaitage3']."', '".$_POST['Vdessert1']."', '".$_POST['Vdessert2']."', '".$_POST['Vdessert3']."',
                 '".$_POST['SP']."','".$_POST['SEntre1']."', '".$_POST['SEntre2']."', '".$_POST['SEntre3']."', '".$_POST['Sviande1']."', '".$_POST['Sviande2']."', '".$_POST['Slegume1']."', '".$_POST['Slegume2']."',
                 '".$_POST['SAsc']."', '".$_POST['Slaitage1']."', '".$_POST['Slaitage2']."', '".$_POST['Slaitage3']."', '".$_POST['Sdessert1']."', '".$_POST['Sdessert2']."', '".$_POST['Sdessert3']."',
                 '".$_POST['DP']."','".$_POST['DEntre1']."', '".$_POST['DEntre2']."', '".$_POST['DEntre3']."', '".$_POST['Dviande1']."', '".$_POST['Dviande2']."', '".$_POST['Dlegume1']."', '".$_POST['Dlegume2']."',
                 '".$_POST['DAsc']."', '".$_POST['Dlaitage1']."', '".$_POST['Dlaitage2']."', '".$_POST['Dlaitage3']."', '".$_POST['Ddessert1']."', '".$_POST['Ddessert3']."', '".$_POST['Ddessert3']."',
                 ,'".$_POST['Merlaitage1']."', '".$_POST['Merlaitage2']."', '".$_POST['Merlaitage3']."', '".$_POST['Merdessert1']."', '".$_POST['Merdessert2']."', '".$_POST['Merdessert3']."')");
            echo ("L'envoi a bien été effectué !");


header("Location: index.php ");

?>
