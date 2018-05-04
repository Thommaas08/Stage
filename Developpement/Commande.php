<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Cree une commande</title>
  <link rel="stylesheet" type="text/css" href="css/reboot.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
  <?php  include 'Header.php' ;?>
  <div class="FORMAdd">
    <section class="bloc center">
      <!-- Formulaire HTML pour ajouter un client -->
      <form enctype="multipart/form-data" class="ADDForm" action="#" method="post">
        <label for="DateNais">Selectionner Un Bénéficiaire</label>
        <select class="selectD" name="client" >
          <?php require 'ConnexionBDD.php';
          $req = $bdd->query('SELECT * FROM client');

          while ($data = $req->fetch())
          {
            ?>
            <option value=" <?php echo $data['Nom']; ?>"> <?php echo $data['Nom'] ?>    <?php echo $data['Prenom'] ?></option>
            <?php
          }

          $req->closeCursor();

          ?>
        </select>

        <label for="DateNais">Selectionner Un menu</label>
        <select name="pays" id="pays">
          <?php require 'ConnexionBDD.php';
          $req = $bdd->query('SELECT * FROM client');

          while ($data = $req->fetch())
          {
            ?>
            <option value=" <?php echo $data['Nom']; ?>"> <?php echo $data['Nom'] ?>    <?php echo $data['Prenom'] ?></option>
            <?php
          }

          $req->closeCursor();

          ?>
        </select>
      </section>
      <input class="btnAddRef" type="submit" name="" value="Suite Commande">
    </form>
  </div>
</body>
</html>
