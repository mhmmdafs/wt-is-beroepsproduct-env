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
      <h1 id="linkcolor" class="registreer">Meld je aan bij Geldre Airport</h1>
      <section class="container">
        <form method="post" action="login.html">
          <div>
            <label for="voornaam">Voornaam</label>
            <input type="text" name="voornaam" id="voornaam" required />
          </div>
          <div>
            <label for="achternaam">Achternaam</label>
            <input type="text" name="achternaam" id="achternaam" required />
          </div>
          <div>
            <label for="land">Land</label>
            <input
              type="text"
              name="land"
              id="land"
              value="Nederland"
              required
            />
          </div>
          <div>
            <label for="geboortedatum">Geboortedatum</label>
            <input
              type="date"
              name="geboortedatum"
              id="geboortedatum"
              required
            />
          </div>
          <div>
            <label for="rekeningnummer">Rekeningnummer</label>
            <input
              type="text"
              name="rekeningnummer"
              id="rekeningnummer"
              minlength="18"
              maxlength="18"
              pattern="[A-Z]{2}[0-9]{2}[A-Z]{4}[0-9]{10}"
              title="Een rekeningnummer bestaat uit 2 letters, 2 cijfers, 4 letters en vervolgens nog 10 cijfers"
              required
            />
          </div>
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
            <label for="wachtwoord">Herhaal Wachtwoord</label>
            <input
              type="password"
              name="hwachtwoord"
              id="hwachtwoord"
              pattern=".{8,}"
              title="Een wachtwoord bestaat uit minimaal 8 letters of cijfers"
              required
            />
          </div>
          <div>
            <button type="submit" class="login-btn">Registreren</button>
          </div>
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
