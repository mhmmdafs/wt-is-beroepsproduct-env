<?php
session_start();
require_once 'components/header.php';
require_once 'components/footer.php';
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <!-- Link/resource pagina's -->
    <link rel="stylesheet" href="css/design.css">
    <link rel="stylesheet" href="css/normalize.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geldre Airport</title>
</head>

<body>
  <div class="navbar topnav">
    <nav class="topnav">
      <a class="logo" href="home.php"><img alt="logo" class="logo" src="images/plane.png"></a>
      <a href="vluchten.php">Vluchten</a>
      <a href="login.php">Inloggen</a>
      <input type="text" placeholder="Search..">
    </nav>
  </div>
    
    <main>
        <section class="container">
          <form method="post" action="action/medewerker/vluchtgegevens.php">
            <h2>Inloggen Medewerker</h2>
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
          </form>
        </section>
      </main>
      
      <?php maakFooter();?>
</body>
</html>