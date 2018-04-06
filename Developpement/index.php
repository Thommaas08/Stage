<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Projet Communauté de Commune des Lisière de L'Oise</title>
    <link rel="stylesheet" type="text/css" href="css/reboot.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/responsiveslides.js"></script>
  </head>
  <body>
  <?php include 'Header.php' ?>

  <script>
      //Script du slider étant obligatoirement dans l'index.
      $(function () {
        $("#slider4").responsiveSlides({
          auto: true,
          pager: false,
          nav: true,
          speed: 500,
          namespace: "callbacks",
          before: function () {
            $('.events').append("<li>before event fired.</li>");
          },
          after: function () {
            $('.events').append("<li>after event fired.</li>");
          }
        });

      });
    </script>

    <div class="text_slider">
        <p>Bienvenue sur le site de la Communauté de Commue des Lisière de L'Oise! <br>
        Ce site nommé vous permettra la saisie des menus pour le portage de repas  <br>
        Ce site à été fait par : Thomas Samul,Etudiant en Deuxième Année de Dut Informatique de l'Université Technologique d'Amiens  </p>
    </div>
  <?php include 'Footer.php' ?>
  </body>
</html>
