<?php require 'ConnexionBDD.php' ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/reboot.css">
  <link rel="stylesheet" type="text/css" href="css/MonStyle.css">
  <link rel="stylesheet" type="text/css" href="css/simplegrid.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <title></title>
</head>
<?php include 'Header.php'?>
<body>
  <div class="FORMAdd">
    <form enctype="multipart/form-data" class="ADDForm" action="Searchfour.php" method="post">
      <div class="grid grid-pad">
        <div class="col-1-3">
          <div class="content">

          </div>
        </div>
        <div class="col-1-3">
          <div class="content">
            <h1>Informations</h1>
            <label for="name">DateMenu</label>
            <input type="date" name="Date" value="">
            <br>
            <label for="name">Type de regime</label>
            <input type="text" name="TypeM" value="">
            <label for="name"> Rappel: Normal=1 SanSel=2 SanSucre=3 </label>
            <input class="btnAddRef" type="submit" name="" value="recherche">
          </div>
        </div>
        <div class="col-1-3">
          <div class="content">
          </div>
        </div>
      </div>
    </form>
  </div>
</body>
</html>
