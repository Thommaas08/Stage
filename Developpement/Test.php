<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ajouter un Test</title>
  <link rel="stylesheet" type="text/css" href="css/reboot.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
  <?php include 'Header.php' ?>
  <div class="FORMAdd">
    <!-- Formulaire HTML pour ajouter un client -->
    <form enctype="multipart/form-data" class="ADDForm" action="TestInsert.php" method="post">
      <section class="bloc left">
        <h1>Information Bénéficiaire</h1>
        <label for="name">Civilité</label>
        <input type="radio" name="mon_champ" value="Monsieur"/>Monsieur
        <input type="radio" name="mon_champ" value="Madame"/>Madame

        <label for="name">Nom</label>
        <input class="inputText" type="text" name="Nom"  placeholder="Nom...">
        <label for="name">Prenom</label>
        <input class="inputText" type="text" name="Prenom"  placeholder="Prenom...">

        <label for="name">Adresse</label>
        <input class="inputText" type="text" name="Adresse"  placeholder="12 rue...">

        <label for="name">Commune</label>
        <input class="inputText" type="text" name="Commune"  placeholder="Commune">

        <label for="name">Regime</label>
        <input type="radio" name="mon_Menu" value="Normal"/>Normal
        <input type="radio" name="mon_Menu" value="Sans Sel"/>Sans Sel
        <input type="radio" name="mon_Menu" value="Sans Sucre"/>Sans Sucre

        <label for="name">Date de naissance</label>
        <input class="inputText" type="date" name="DateNais"  placeholder="">
        <label for="name">Numero de téléphone </label>
        <input class="inputText" type="text" name="Telephone"  placeholder="Numero de telephone">


      </section>

      <section class="bloc right">
        <h1>Informations Complémentaires</h1>
        <label for="name">Civilité</label>
        <input type="radio" name="mon_champ1" value="Monsieur"/> Monsieur
        <input type="radio" name="mon_champ1" value="Madame"/> Madame

        <label for="name">Personne a contacter</label>
        <input class="inputText" type="text" name="Contact"  placeholder="Nom de famille">
        <label for="name">Numero de téléphone </label>
        <input class="inputText" type="text" name="TelContact"  placeholder="Numero de telephone">
        <br>

      <input class="btnAddRef" type="submit" name="" value="AJOUTER CLIENT">

    </section>
  </form>
</div>
</body>
</html>
