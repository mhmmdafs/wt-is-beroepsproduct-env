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

<!-- Navigatie bar -->

<body>
  <div class="navbar topnav">
    <nav class="topnav">
      <a class="logo" href="home.html"><img alt="logo" class="logo" src="images/plane.png"></a>
      <a href="vluchten.html">Vluchten</a>
      <a href="login.html">Inloggen</a>
      <input type="text" placeholder="Search..">
    </nav>
  </div>

  <!-- Website content -->
  <main id="banner-image-home">
    <div class="hero-text">
      <h1>Geldre Airport</h1>
    </div>
  </main>

  <div class="hoverbutton">
    <h3><a href="vluchten.html">BOEK NU JOU VLUCHT!</a></h3>
  </div>

  <div>
    <form method="post" action="registratie.html" class="loginFormulieren">
      <button type="submit" class="btn">
        Klik hier om uw reis te beginnen! (bezoekers)
      </button>
    </form>

    <form method="post" action="loginmedewerker.html" class="loginFormulieren">
      <button type="submit" class="btn">
        Klik hier om in te loggen (medewerker)
      </button>
    </form>
  </div>
    <div class="flexbox-container">
      <ul class="flexbox-list-1">
        <li>Onze populairste bestemmingen</li>
        <li>
          <a href="detail.html"><img src="images/curacao.jpg" alt="" /><span>Curaçao</span></a>
          <p>
            Op een vakantie op Curaçao zijn de witte stranden omzoomd met
            palmbomen in grote getale aanwezig.
          </p>
        </li>
        <li>
          <a href="detail.html"><img src="images/kaapverdie.jpg" alt="" /><span>Kaapverdië</span></a>
          <p>
            De tropische eilandengroep Kaapverdië is dé plek voor een
            zonvakantie.
          </p>
        </li>
        <li>
          <a href="detail.html"><img src="images/egypte.jpg" alt="" /><span>Egypte</span><span></span></a>
          <p>
            Laat je verrassen door Egyptische gastvrijheid en de kleurrijke
            onderwaterwereld.
          </p>
        </li>
        <li>
          <a href="detail.html"><img src="images/griekenland.jpg" alt="" /><span>Griekenland</span></a>
          <p>
            De zon schijnt en de zee is in dit Zuid-Europese land altijd binnen
            handbereik.
          </p>
        </li>
        <li>
          <a href="detail.html"><img src="images/bonaire.jpg" alt="Bonaire" /><span>Bonaire</span></a>
          <p>
            Dit zonovergoten eiland in de Caribische Zee is dé bestemming voor
            een zalige strand- en duikvakantie.
          </p>
        </li>
      </ul>
    
      <ul class="flexbox-list-2">
        <li>Meest geboekte bestemmingen</li>
        <li>
          <a href="detail.html"><img src="images/curacao.jpg" alt="" /><span>Curaçao</span></a>
          <p>
            Op een vakantie op Curaçao zijn de witte stranden omzoomd met
            palmbomen in grote getale aanwezig.
          </p>
        </li>
        <li>
          <a href="detail.html"><img src="images/kaapverdie.jpg" alt="" /><span>Kaapverdië</span></a>
          <p>
            De tropische eilandengroep Kaapverdië is dé plek voor een
            zonvakantie.
          </p>
        </li>
        <li>
          <a href="detail.html"><img src="images/egypte.jpg" alt="" /><span>Egypte</span><span></span></a>
          <p>
            Laat je verrassen door Egyptische gastvrijheid en de kleurrijke
            onderwaterwereld.
          </p>
        </li>
        <li>
          <a href="detail.html"><img src="images/griekenland.jpg" alt="" /><span>Griekenland</span></a>
        <p>
          De zon schijnt en de zee is in dit Zuid-Europese land altijd binnen
          handbereik.
        </p>
      </li>
      <li>
        <a href="detail.html"><img src="images/bonaire.jpg" alt="" /><span>Bonaire</span></a>
        <p>
          Dit zonovergoten eiland in de Caribische Zee is dé bestemming voor
          een zalige strand- en duikvakantie.
        </p>
      </li>
    </ul>
  </div>

  <!-- Onderkant pagina (footer) -->
  <footer class="footer">
    <a id="privacyfooter" href="privacy.html">Privacy</a>
    <a id="overonsfooter" href="overons.html">Over ons</a>
    <p id="makerfooter">&copy; 2023 - Mohammed Afentrous</p>
  </footer>
</body>

</html>