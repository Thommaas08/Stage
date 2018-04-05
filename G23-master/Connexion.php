<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="css/reboot.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
    <?php include 'header.php' ?>
    <!-- Formulaire HTML de connexion-->
    <form class="FormConnexion" action="Login.php" method="post">
      <section class="formulaireCo">
        <label for="identifiant">Identifiant</label>
        <input class="inputText" type="text" name="identifiant" value="" placeholder="Identifiant...">

        <label for="password">Mot de passe</label>
        <input class= "inputText" type="password" name="password" value="">
      </section>
      <input class="btnCo" type="submit" name="" value="SE CONNECTER">
    </form>
  </body>
</html>
