<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ajouter un bénéficiare</title>
  <link rel="stylesheet" type="text/css" href="css/reboot.css">
  <link rel="stylesheet" type="text/css" href="css/MonStyle.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <script type="text/javascript">
  function surligne(champ, erreur)
    {
       if(erreur)
          champ.style.backgroundColor = "#ffcc00";
       else
          champ.style.backgroundColor = "";
    }

  function verifNom(champ)
    {
       if(champ.value.length < 2 || champ.value.length > 20)
       {
          surligne(champ, true);
          return false;
       }
       else
       {
          surligne(champ, false);
          return true;
       }
    }
    function verifPrenom(champ)
      {
         if(champ.value.length < 2 || champ.value.length > 20)
         {
            surligne(champ, true);
            return false;
         }
         else
         {
            surligne(champ, false);
            return true;
         }
      }
      function verifAdress(champ)
        {
           if(champ.value.length < 6 || champ.value.length > 50)
           {
              surligne(champ, true);
              return false;
           }
           else
           {
              surligne(champ, false);
              return true;
           }
        }
        function verifCom(champ)
          {
             if(champ.value.length < 6 || champ.value.length > 30)
             {
                surligne(champ, true);
                return false;
             }
             else
             {
                surligne(champ, false);
                return true;
             }
          }
  // function verifMail(champ)
  //   {
  //      var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
  //      if(!regex.test(champ.value))
  //      {
  //         surligne(champ, true);
  //         return false;
  //      }
  //      else
  //      {
  //         surligne(champ, false);
  //         return true;
  //      }
  //   }
  function verifForm(f)
    {
       var NomOk = verifNom(f.Nom);
       var PrenomOk =verifPrenom(f.Prenom);
       var AdressOk =verifAdress(f.Adresse);
       var AdressOk =verifCom(f.Commune);
      // var mailOk = verifMail(f.MailContact);



       if(NomOk && PrenomOk && AdressOk)
          return true;
       else
       {
          alert("Veuillez remplir correctement tous les champs");
          return false;
       }
    }

  </script>
</head>
<body>
  <?php include 'Header.php' ?>
  <div class="FORMAdd">
    <!-- Formulaire HTML pour ajouter un client -->
    <form enctype="multipart/form-data" class="ADDForm" action="TestInsert.php" method="post" onsubmit="return verifForm(this)">
      <section class="bloc left">
        <h1>Informations Bénéficiaire</h1>
        <label for="name">Civilité <b>*</b> </label>
        <input type="radio" name="mon_champ" value="Monsieur"/> Monsieur
        <input type="radio" name="mon_champ" value="Madame"/> Madame

        <label for="name">Nom <b>*</b></label>
        <input class="inputText" type="text" name="Nom"  placeholder="Nom..." onblur="verifNom(this)">
        <label for="name">Prénom <b>*</b></label>
        <input class="inputText" type="text" name="Prenom"  placeholder="Prénom..."onblur="verifPrenom(this)">

        <label for="name">Adresse <b>*</b></label>
        <input class="inputText" type="text" name="Adresse"  placeholder="12 rue..."onblur="verifAdress(this)">
        <label for="name">Adresse complémentaire</label>
        <input class="inputText" type="text" name="AdresseComplet"  placeholder="Complément...">
        <label for="name">Code postal</label>
        <input class="inputText" type="text" name="AdresseCodeP"  placeholder="60350 par exemple">

        <label for="name">Commune <b>*</b></label>
        <input class="inputText" type="text" name="Commune"  placeholder="Commune" onblur="verifCom(this)">
        <label for="name">Date de naissance</label>
        <input class="inputText" type="date" name="DateNais"  placeholder="">
        <label for="name">Numéro de téléphone </label>
        <input class="inputText" type="text" name="Telephone"  placeholder="Numéro de téléphone">
        <label for="name">Régime <b>*</b></label>
        <input type="radio" name="mon_Menu" value="Normal"/> Normal
        <input type="radio" name="mon_Menu" value="Sans Sel"/> Sans Sel
        <input type="radio" name="mon_Menu" value="Sans Sucre"/> Sans Sucre



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
        <label for="name">Lien de parenté</label>
        <input type="radio" name="mon_champ2" value="Enfant"/> Enfant
        <input type="radio" name="mon_champ2" value="Frère/soeur"/> Frère/Soeur
        <input type="radio" name="mon_champ2" value="Voisin"/> Voisin
        <input type="radio" name="mon_champ2" value="Autre"/> Autre


        <label for="name">Numéro de téléphone </label>
        <input class="inputText" type="text" name="TelContact"  placeholder="Numéro de téléphone">
        <label for="name">Adresse mail </label>
        <input class="inputText" type="text" name="MailContact"  placeholder="" onblur="verifMail(this)">
        <br>
        <br>

      <input class="btnAddRef" type="submit" name="" value="Valider">

    </section>
  </form>
</div>
</body>
</html>
