<footer>
  <p id="help"><a href="#">Nous aider</a></p>
  <?php
    if((isset($_SESSION['id']))) {
      if($_SESSION['Role']==10) { ?>
        <!-- Si une session est existante affiche "se déconnecter" est renvoi à logout-->
        <a href="Logout.php" id="btnConnexion">Se déconnecter</a><br>
        <a href="AddUser.php" id="btnConnexion">Ajouter un Utilisateurs</a>
        <?php }
      else { ?>
        <a href="Logout.php" id="btnConnexion">Se déconnecter</a>
    <?php }} else { ?>
      <!-- Si pas de session affiche "se connecter" et renvoi a Connexion.php-->
      <a href="Connexion.php" id="btnConnexion">Se connecter</a>
    <?php
    }
  ?>
</footer>
