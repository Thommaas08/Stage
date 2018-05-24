<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Recherche Menu </title>
  <link rel="stylesheet" type="text/css" href="css/reboot.css">
  <link rel="stylesheet" type="text/css" href="css/MonStyle.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
  <?php include 'header.php' ?>
  <div class="FORMAdd">
    <form enctype="multipart/form-data" class="ADDForm" action="SearchMenuSSel.php" method="post">
      <section class="bloc center">
          <h2>Recherche menu sans sel</h2>

        <label for="name">Nom menu</label>
        <input class="inputText" type="text" name="NomMenu" value="" placeholder="Nom...">

        <label for="name">Date du menu</label>
        <input class="inputText" type="date" name="DATE"  >

        <br>

        <input class="btnAddRef" type="submit" name="" value="RECHERCHER ">
      </section>
    </div>

  </form>
</body>
</html>
