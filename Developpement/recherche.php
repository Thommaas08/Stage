<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Recherche Client </title>
  <link rel="stylesheet" type="text/css" href="css/reboot.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
  <?php include 'header.php' ?>
  <div class="FORMAdd">
    <!-- Formulaire HTML de la Recherche d'un client -->
    <form enctype="multipart/form-data" class="ADDForm" action="SearchClt.php" method="post">
      <section class="bloc center">
          <h2>Recherche Bénéficiaire</h2>

        <label for="name">Nom</label>
        <input class="inputText" type="text" name="Nom" value="" placeholder="Nom...">
        <label for="name">Prénom</label>
        <input class="inputText" type="text" name="Prenom" value="" placeholder="Prénom...">
        <label for="name">Code postal</label>
        <input class="inputText" type="text" name="CodePostal"  placeholder="Exemple: 60350">
        <label for="name">Commune</label>
        <input class="inputText" type="text" name="Commune"  placeholder="Commune">

        <br>

        <input class="btnAddRef" type="submit" name="" value="RECHERCHER Bénéficiaire">
      </section>
    </div>

  </form>
</body>
</html>
