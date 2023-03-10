<?php
session_start();

?>


<!DOCTYPE html>
<html lang="nl">
  <head>
    <!-- Link/resource pagina's -->
    <link rel="stylesheet" href="css/design.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

    <main>
      <section class="container">
        <form method="post" action="inloggen.php">
          <h2>Inloggen</h2>
          <?php
          if (isset($_GET['inloggen'])) {
                    $foutmelding = $_GET['inloggen'];
                    switch ($foutmelding) {
                        case 'error':
                            echo '<p class="foutmelding">U moet eerst inloggen</p>';
                            break;
                        case 'login':
                            echo '<p class="foutmelding">Uw gebruikersnaam en/of wachtwoord komen niet overeen</p>';
                            break;
                        case 'empty':
                            echo '<p class="foutmelding">Niet alle velden zijn ingevuld</p>';
                            break;
                        default:
                            break;
                    }
                }
                ?>
          <div>
            <label for="gebruikersnaam">Gebruikersnaam</label>
            <input
              type="text"
              name="gebruikersnaam"
              id="gebruikersnaam"
              required
            />
          </div>
          <div>
            <label for="wachtwoord">Wachtwoord</label>
            <input
              type="password"
              name="wachtwoord"
              id="wachtwoord"
              pattern=".{8,}"
              title="Een wachtwoord bestaat uit minimaal 8 letters of cijfers"
              required
            />
          </div>
          <div>
            <button type="submit" class="login-btn">Login</button>
          </div>
          <p>
            Heb je nog geen account?
            <a id="likcolor" href="registratie.php">Meld je aan</a>
          </p>
        </form>
      </section>
    </main>
    <!-- Onderkant pagina (footer) -->
    <footer class="footer">
        <a id="privacyfooter" href="privacy.html">Privacy</a>
        <a id="overonsfooter" href="overons.html">Over ons</a>
        <p id="makerfooter">&copy; 2023 - Mohammed Afentrous</p>
      </footer>
  </body>
</html>
