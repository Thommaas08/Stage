<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ajouter un réfugié</title>
    <link rel="stylesheet" type="text/css" href="css/reboot.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
      <?php include 'header.php' ?>
      <div class="FORMAdd">
        <!-- Formulaire HTML pour ajouter un client -->
        <form enctype="multipart/form-data" class="ADDForm" action="insertrefugie.php" method="post">
          <section class="bloc left">
            <label for="name">Nom</label>
            <input class="inputText" type="text" name="NameRef" value="" placeholder="Nom...">

            <label for="name">Prénom</label>
            <input class="inputText" type="text" name="PrenomRef" value="" placeholder="Prénom...">

            <label for="DateNais">Date de naissance</label>
            <div class="SelectDate">
              <!-- Listes déroulantes pour date de naissance allant jusqu'a 1931 (à mettre en BBD!) -->
              <select class="selectD" name="DateNaisJ">
                <option value="00">Jour</option><option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option>
                <option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
                <option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option>
                <option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option>
                <option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option>
                <option value="31">31</option>
              </select>
              <select class="selectD" name="DateNaisM">
                <option value="00">Mois</option>
                <option value="01">Janvier</option>
                <option value="02">Fevrier</option>
                <option value="03">Mars</option>
                <option value="04">Avril</option>
                <option value="05">Mai</option>
                <option value="06">Juin</option>
                <option value="07">Juillet</option>
                <option value="08">Août</option>
                <option value="09">Septembre</option>
                <option value="10">Octobre</option>
                <option value="11">Novembre</option>
                <option value="12">Decembre</option>
              </select>
              <select class="selectD" name="DateNaisA">
                  <option value="0000">Année</option>
                  <option value="1999">1999</option>
                  <option value="1998">1998</option>
                  <option value="1997">1997</option>
                  <option value="1996">1996</option>
                  <option value="1995">1995</option>
                  <option value="1994">1994</option>
                  <option value="1993">1993</option>
                  <option value="1992">1992</option>
                  <option value="1991">1991</option>
                  <option value="1990">1990</option>
                  <option value="1989">1989</option>
                  <option value="1988">1988</option>
                  <option value="1987">1987</option>
                  <option value="1986">1986</option>
                  <option value="1985">1985</option>
                  <option value="1984">1984</option>
                  <option value="1983">1983</option>
                  <option value="1982">1982</option>
                  <option value="1981">1981</option>
                  <option value="1980">1980</option>
                  <option value="1979">1979</option>
                  <option value="1978">1978</option>
                  <option value="1977">1977</option>
                  <option value="1976">1976</option>
                  <option value="1975">1975</option>
                  <option value="1974">1974</option>
                  <option value="1973">1973</option>
                  <option value="1972">1972</option>
                  <option value="1971">1971</option>
                  <option value="1970">1970</option>
                  <option value="1969">1969</option>
                  <option value="1968">1968</option>
                  <option value="1967">1967</option>
                  <option value="1966">1966</option>
                  <option value="1965">1965</option>
                  <option value="1964">1964</option>
                  <option value="1963">1963</option>
                  <option value="1962">1962</option>
                  <option value="1961">1961</option>
                  <option value="1960">1960</option>
                  <option value="1959">1959</option>
                  <option value="1958">1958</option>
                  <option value="1957">1957</option>
                  <option value="1956">1956</option>
                  <option value="1955">1955</option>
                  <option value="1954">1954</option>
                  <option value="1953">1953</option>
                  <option value="1952">1952</option>
                  <option value="1951">1951</option>
                  <option value="1950">1950</option>
                  <option value="1949">1949</option>
                  <option value="1948">1948</option>
                  <option value="1947">1947</option>
                  <option value="1946">1946</option>
                  <option value="1945">1945</option>
                  <option value="1944">1944</option>
                  <option value="1943">1943</option>
                  <option value="1942">1942</option>
                  <option value="1941">1941</option>
                  <option value="1940">1940</option>
                  <option value="1939">1939</option>
                  <option value="1938">1938</option>
                  <option value="1937">1937</option>
                  <option value="1936">1936</option>
                  <option value="1935">1935</option>
                  <option value="1934">1934</option>
                  <option value="1933">1933</option>
                  <option value="1932">1932</option>
                  <option value="1931">1931</option>
              </select>
            </div>

            <label for="ListeCivilité">Civilité</label>
            <select class="select" name="ListeCivilité">
              <option value="Monsieur">Monsieur</option>
              <option value="Madame">Madame</option>
            </select>
          </section>
          <label for="name">Adresse</label>
            <input class="inputText" type="text" name="Adresse" value="" placeholder="10 rue...">
          <section class="bloc right">
            <label for="ListeNationalité">Communes</label>
            <!-- Liste déroulante de 20 communes (à mettre en BDD)-->
            <select class="select" name="ListeCommunes">
              <option value="N"></option>
            	<option value="ATY">ATTICHY</option>
            	<option value="AUT">AUTRECHES</option>
            	<option value="BER">BERNEUIL-SUR-AISNE</option>
            	<option value="BIT">BITRY</option>
            	<option value="CLL">CHELLES</option>
            	<option value="CLY">COULOISY</option>
            	<option value="CTX">COURTIEUX</option>
            	<option value="CTY">CROUTOY</option>
            	<option value="CLM">CUISE-LA-MOTTE</option>
            	<option value="HTF">HAUTEFONTAINE</option>
            	<option value="JLY">JAULZY</option>
            	<option value="MST">MOULIN-SOUS-TOUVENT</option>
            	<option value="NPL">NAMPCEL</option>
            	<option value="PFS">PIERREFONDS</option>
            	<option value="RTD">RETHONDES</option>
            	<option value="SCB">SAINT-CREPIN-AUX-BOIS</option>
            	<option value="SER">SAINT-ETIENNE-ROILAYE</option>
            	<option value="SPB">SAINT-PIERRE-LES-BITRY</option>
            	<option value="TLM">TRACY-LE-MONT</option>
            	<option value="TBL">TROSLY-BREUIL</option>
            </select>

            <label for="name">Numéro de Téléphone</label>
            <input class="inputText"type="tel" name="usrtel "placeholder="03-44....">

            <label for="name">Personne à contacter </label>
            <input class="inputText" type="text" name="Contact" value="" placeholder="Monsieur....">

            <label for="name">Numéro de Téléphone</label>
            <input class="inputText"type="telContact" name="usrtel "placeholder="03-44....">
          </section>

          <input class="btnAddRef" type="submit" name="" value="AJOUTER CLIENT">
        </form>
      </div>
  </body>
</html>
