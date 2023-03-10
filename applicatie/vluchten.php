<?php
session_start();
// require_once 'includes/header.php';
// require_once 'includes/footer.php';
require_once 'components/vluchten.php';
require_once 'components/toonVluchten.php';

$vluchten = verkrijgVluchten();
$bestemmingen = verkrijgBestemmingen();
$vertrektijden = verkrijgTijden();
$koffergewichten = verkrijgKoffergewichten();


// if (!isset($_SESSION['user'])) {
//     header('Location: login.php?login=error');
// }
// 
?>

<!DOCTYPE html>
<html lang="nl">

<head>
  <!-- Link/resource pagina's -->
  <link rel="stylesheet" href="./CSS/design.css">
  <link rel="stylesheet" href="./CSS/normalize.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Geldre Airport</title>
</head>
  <body>
    <div class="navbar topnav">
      <nav class="topnav">
        <a class="logo" href="home.html"><img alt="logo" class="logo" src="images/plane.png"></a>
        <a href="vluchten.html">Vluchten</a>
        <a href="login.html">Inloggen</a>
        <input type="text" placeholder="Search..">
      </nav>
    </div>

    <!-- filterbalk -->

    <main>
      <div id="banner-image-vluchten">
        <div class="hero-text">
          <div class="parent">
            <div class="child">
              <label for="vakantie-type">Van</label>
              <select class="select-field" name="vakantie-type" id="vakantie-type" required>
                <option value="" selected disabled>Vakantie type</option>
                <option value="1">Alle vluchten</option>
                <option value="2">All inclusive</option>
                <option value="3">Autovakanties</option>
              </select>
            </div>
  
            <div class="child">
              <label for="bestemming">Naar</label>
              <select class="select-field" name="bestemming" id="bestemming" required>
                <option value="" selected disabled>Bestemming</option>
                <option value="1">Nederland</option>
                <option value="2">Duitsland</option>
                <option value="3">België</option>
              </select>
            </div>
  
            <div class="child">
              <label for="vlucht">Vlucht</label>
              <select class="select-field" name="vlucht" id="vlucht" required>
                <option value="" selected disabled>Vlucht</option>
                <option value="1">Enkele reis</option>
                <option value="2">Retour reis</option>
              </select>
            </div>
  
            <div class="child">
              <label for="personen">Personen</label>
              <select class="select-field" name="personen" id="personen" required>
                <option value="" selected disabled>Aantal personen</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6+">6+</option>
              </select>
            </div>
  
            <div class="child">
              <label for="luchthaven">Luchthaven</label>
              <select class="select-field" name="luchthaven" id="luchthaven" required>
                <option value="" selected disabled>Luchthaven</option>
                <option value="1">Amsterdam</option>
                <option value="2">Berlijn</option>
                <option value="3">Brussel</option>
              </select>
            </div>
            <div class="flexbox-container">
              <button class="search-btn" type="submit">Zoeken</button>
            </div>
          </div>
        </div>
      </div>

      <!-- kaarten van de vluchten -->

      <div class="overflow">
            <?php
                toonVluchten($vluchten);
            ?>
    </main>

    <footer class="footer">
      <a id="privacyfooter" href="privacy.html">Privacy</a>
      <a id="overonsfooter" href="overons.html">Over ons</a>
      <p id="makerfooter">&copy; 2023 - Mohammed Afentrous</p>
    </footer>
  </body>

</html>