<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Affichage du Stock disponible</title>
    <link rel="stylesheet" type="text/css" href="css/reboot.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
    <?php include 'header.php' ?>
    <div class="FORMAdd">
      <form enctype="multipart/form-data" class="ADDForm" action="AffStock.php" method="Post">
        <section class="bloc left">
          <label for="pays">Dans quel camp voulez vous vérifier le stock?</label><br />
          <select class="select" name="Choix_camp">
            <?php
            require'CoBDD.php';
            $reponse = $bdd->query('SELECT * FROM Camps');
              while ($donnees = $reponse->fetch())
                {
            ?>
                  <option value=<?php echo $donnees['ID']; ?>><?php echo $donnees['Nom']; ?></option>
            <?php
                }

            ?>
          </select>

      </form>
      <input class="btnAddRef" type="submit" name="" value="Afficher stock">
        </section>

      </form>
  </body>
</html>
