<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ajouter un bénéficiare</title>
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
        <h1>Informations Bénéficiaire</h1>
        <label for="name">Civilité</label>
        <input type="radio" name="mon_champ" value="Monsieur"/> Monsieur
        <input type="radio" name="mon_champ" value="Madame"/> Madame

        <label for="name">Nom</label>
        <input class="inputText" type="text" name="Nom"  placeholder="Nom...">
        <label for="name">Prénom</label>
        <input class="inputText" type="text" name="Prenom"  placeholder="Prénom...">

        <label for="name">Adresse</label>
        <input class="inputText" type="text" name="Adresse"  placeholder="12 rue...">
        <label for="name">Adresse complémentaire</label>
        <input class="inputText" type="text" name="AdresseComplet"  placeholder="Complément...">
        <label for="name">Code postal</label>
        <input class="inputText" type="text" name="AdresseCodeP"  placeholder="60350 par exemple">

        <label for="name">Commune</label>
        <input class="inputText" type="text" name="Commune"  placeholder="Commune">

        <label for="name">Régime</label>
        <input type="radio" name="mon_Menu" value="Normal"/> Normal
        <input type="radio" name="mon_Menu" value="Sans Sel"/> Sans Sel
        <input type="radio" name="mon_Menu" value="Sans Sucre"/> Sans Sucre

        <label for="name">Date de naissance</label>
        <input class="inputText" type="date" name="DateNais"  placeholder="">
        <label for="name">Numéro de téléphone </label>
        <input class="inputText" type="text" name="Telephone"  placeholder="Numéro de téléphone">


      </section>

      <section class="bloc right">
        <h1>Informations Complémentaires</h1>
        <label for="name">Civilité</label>
        <input type="radio" name="mon_champ1" value="Monsieur"/> Monsieur
        <input type="radio" name="mon_champ1" value="Madame"/> Madame

        <label for="name">Personne à contacter</label>
        <input class="inputText" type="text" name="Contact"  placeholder="Nom ">
        <label for="name">Prénom</label>
        <input class="inputText" type="text" name="ContactPre"  placeholder="Prénom">
        <label for="name">Lien de parené</label>
        <input type="radio" name="mon_champ2" value="Voisin"/> Voisin
        <input type="radio" name="mon_champ2" value="Enfant"/> Enfant
        <input type="radio" name="mon_champ2" value="Frère/soeur"/> Frère/Soeur
        <input type="radio" name="mon_champ2" value="Autre"/> Autre


        <label for="name">Numéro de téléphone </label>
        <input class="inputText" type="text" name="TelContact"  placeholder="Numéro de téléphone">
        <label for="name">Adresse mail </label>
        <input class="inputText" type="text" name="MailContact"  placeholder="">
        <br>
        <br>

      <input class="btnAddRef" type="submit" name="" value="Valider">

    </section>
  </form>
</div>
</body>
</html>
