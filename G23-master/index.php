<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Projet Portage de repas</title>
    <link rel="stylesheet" type="text/css" href="css/reboot.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/responsiveslides.js"></script>
  </head>
  <body>
  <?php include 'header.php' ?>

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
    <!-- Insertion des images du slider sous formes de liste -->
    <div class="callbacks_container">
      <ul class="rslides" id="slider4">
        <li>
          <img src="img/slider/migration1.jpg" alt="">
          <p class="caption">Une image en couleur</p>
        </li>
        <li>
          <img src="img/slider/migration2.jpg" alt="">
          <p class="caption">Une image sans couleur</p>
        </li>
        <li>
          <img src="img/slider/migration3.jpg" alt="">
          <p class="caption">Une image mal proportionnée...</p>
        </li>
      </ul>
    </div>

    <div class="text_slider">
        <p>Bienvenue sur le site du projet DUT Informatique de l'année 2017 ! <br>
        Ce site nommé "I am Alive" vous permettra de retrouver un proche, une simple connaissance, n'importe qui...<br>
        Ce site à été fait par : Robin Bondon, Pierre Blanchard, Thomas Samul, Jamie Genermont, Benjamin Duchanois & Alexandre Prezio </p>
    </div>
  <?php include 'footer.php' ?>
  </body>
</html>
