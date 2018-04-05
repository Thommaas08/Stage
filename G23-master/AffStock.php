<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Stock</title>
    <link rel="stylesheet" type="text/css" href="css/reboot.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
    <body>
  <?php include 'header.php' ?>
  <?php
    require'CoBDD.php';
    date_default_timezone_set('UTC');

    ?>
    <div class="FORMAdd">
      <form enctype="multipart/form-data" class="ADDForm" action="AffStock.php" method="Post">
        <section class="bloc left">
          <label for="Camp_Stock">Dans quel camp voulez vous vérifier le stock?</label><br />
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
      </div>
        </section>
<?php
  try {
      $req = $bdd->query('SELECT * FROM Inventaire,Camps WHERE Inventaire.ID_Camps=('.$_POST['Choix_camp'].') AND Camps.ID=('.$_POST['Choix_camp'].')');
      $req->execute(array($_POST['Choix_camp']));

      if($req->rowCount()==1){

        while($data = $req->fetch())
            {
              ?>

              <div class="lignestock">
                <section class="Text_stock">

                  <p class="InfoTxtStock">Type d'objet : <?php echo($data['Nom_objet']) ?></p>
                  <p class="InfoTxtStock">Quantité : <?php echo($data['Quantite']) ?></p>
                  <p class="InfoTxtStock">Se situe dans le camp :  <?php echo($data['Nom']) ?></p>

                </div>
                </section>

    <?php   }

      	}
    else {
        ?>
          <div class="lignestockinvalide">
            <p class="InfosStock">Il n'y a pas d'objet dans ce camp</p>
          </div>
            <?php

    }


    }
  catch (PDOException $e) {
      echo 'Échec : ' . $e->getMessage();
  }
  $req->closeCursor();
  ?>
  </body>
</html>
