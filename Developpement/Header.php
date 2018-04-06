<header>
  <div class="headercontent">
    <img src="img/Logo.png" alt="Logo">
      <div class="navbar">
        <?php
        session_start(); //Début de session si connexion
        				if((isset($_SESSION['id']))) {  //Test si une session existe
                  if($_SESSION['Role']==10) { ?>
                  <ul>  <!-- Affichage du header avec 4 boutons si session -->
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="AddRefugie.php">Ajouter réfugié</a></li>
                    <li><a href="Addcamp.php">Ajouter camp</a></li>
                    <li><a href="Recherche.php">Rechercher</a></li>
                    <li><a href="Stock.php">Stock</a></li>
                  </ul>
                  <?php
                  }
                  if($_SESSION['Role']==9) { ?>
                  <ul>''
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="AddRefugie.php">Ajouter réfugié</a></li>
                    <li><a href="Addcamp.php">Ajouter camp</a></li>
                    <li><a href="Recherche.php">Rechercher</a></li>
                  </ul>
                <?php }
                  if($_SESSION['Role']==8) { ?>
                    <ul>
                      <li><a href="index.php">Accueil</a></li>
                      <li><a href="AddRefugie.php">Ajouter réfugié</a></li>
                      <li><a href="Recherche.php">Rechercher</a></li>
                    </ul>
                    <?php
                    }
                  if($_SESSION['Role']==7) { ?>
                  <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="AddRefugie.php">Ajouter réfugié</a></li>
                    <li><a href="Addcamp.php">Ajouter camp</a></li>
                    <li><a href="Stock.php">Inventaire</a></li>
                  </ul>
                <?php }
				     } else {
				        ?>
        <ul>  <!-- Affichage du header avec 2 boutons si pas de sessions -->
          <li><a href="index.php">Accueil</a></li>
          <li><a href="Recherche.php">Rechercher</a></li>
        </ul>
        <?php
        }
				?>
    </div>
  </div>
</header>
