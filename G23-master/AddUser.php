<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ajouter Utilisateur</title>
    <link rel="stylesheet" type="text/css" href="css/reboot.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
    <?php include 'header.php' ?>
    <!-- Formulaire HTML de connexion-->
    <form class="FORMAdd" action="InsertUser.php" method="post">
      <section class="bloc left">
          <label for="identifiant">Identifiant</label>
          <input class="inputText" type="text" name="identifiant" value="" placeholder="Identifiant...">

          <label for="password">Mot de passe</label>
          <input class= "inputText" type="password" name="password" value="">

          <label for="password">Adresse mail</label>
          <input class= "inputText" type="email" name="email" value="">
      </section>

      <section class="bloc right">
          <label for="password">Role</label>
          <select class="select" name="role">
            <option value="9">Administrateur</option>
            <option value="8">Employé</option>
            <option value="7">Magasinier</option>
          </select>

          <label for="password">Camp</label>
          <select class="select" name="camp">
            <option value="1">camp1</option>
            <option value="2">camp2</option>
          </select>
      </section>
      <input class="btnCo" type="submit" name="" value="Ajouter">
    </form>
  </body>
</html>
