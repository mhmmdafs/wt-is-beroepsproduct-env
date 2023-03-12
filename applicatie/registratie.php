<?php
session_start();
require_once 'components/header.php';
require_once 'components/footer.php';
require_once 'db_connectie.php'

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
  <?php
  maakHeader();
  ?>

  <main>
    <h1 id="linkcolor" class="registreer">Meld je aan bij Geldre Airport</h1>
    <?php
    if (isset($_GET['./components/registratieverificatie.php'])) {

      if (isset($_GET['./components/registratieverificatie.php'])) {
        $foutmelding = $_GET['./components/registratieverificatie.php'];

        echo 'ik ben er';
        switch ($foutmelding) {
          case 'empty':
            echo '<p class="foutmelding">Niet alle velden zijn ingevuld</p>';
            break;
          case 'voornaam':
            echo '<p class="foutmelding">De voornaam kan alleen letters, streepjes, apostrofs en spaties bevatten</p>';
            break;
          case 'achternaam':
            echo '<p class="foutmelding">De achternaam kan alleen letters, streepjes, apostrofs en spaties bevatten</p>';
            break;
          case 'geboortedag':
            echo '<p class="foutmelding">Voer uw geboortedatum in</p>';
            break;
          case 'geslacht':
            echo '<p class="foutmelding">Selecteer uw gender</p>';
            break;
          case 'email':
            echo '<p class="foutmelding">Voer uw e-mailadres in het formaat: voorbeeld@gmail.com</p>';
            break;
          case 'gebruikersnaam':
            echo '<p class="foutmelding">Voer uw gebruikersnaam in</p>';
            break;
          case 'wachtwoord':
            echo '<p class="foutmelding">Het wachtwoord moet minimaal 10 karakters lang zijn</p>';
            break;
          case 'herhaal-wachtwoord':
            echo '<p class="foutmelding">Het wachtwoord komt niet overeen</p>';
            break;
          case 'rekeningnummer':
            echo '<p class="foutmelding">Een rekeningnummer bestaat uit 2 letters, 2 cijfers, 4 letters en vervolgens nog 10 cijfers</p>';
            break;
          case 'betaalwijze':
            echo '<p class="foutmelding">Selecteer uw betaalwijze</p>';
            break;
        }
      }
    }
    ?>
    <section class="container">
      <form method="post" action="components/registratieverificatie.php">
        <div>
          <label for="voornaam">Voornaam</label>
          <input type="text" name="voornaam" id="voornaam" required />
        </div>
        <div>
          <label for="achternaam">Achternaam</label>
          <input type="text" name="achternaam" id="achternaam" required />
        </div>
        <div>
          <label for="geboortedag">Geboortedag</label>
          <input type="date" name="geboortedag" id="Geboortedag" required>
        </div>
        <div>
          <label for="geslacht">Geslacht</label>
          <select name="geslacht" id="geslacht" required>
            <option value="" selected>Kies je geslacht</option>
            <option value="man">Man</option>
            <option value="vrouw">Vrouw</option>
          </select>
        </div>
        <div>
          <label for="email">E-mail</label>
          <input type="email" name="email" placeholder="E-mail" required>
        </div>
        <div>
          <label for="gebruikersnaam">Gebruikersnaam</label>
          <input type="text" name="gebruikersnaam" placeholder="gebruikersnaam" required>
        </div>
        <div>
          <label for="wachtwoord">Wachtwoord</label>
          <input type="password" name="wachtwoord" placeholder="••••••••" pattern=".{10,}" title="U wachtwoord moet minimaal 10 karakters lang zijn" required>
        </div>

        <div>
          <label for="herhaal-wachtwoord">Herhaal wachtwoord</label>
          <input type="password" name="herhaal-wachtwoord" placeholder="••••••••" pattern=".{8,}" title="U wachtwoord moet minimaal 8 karakters lang zijn" required>
        </div>
        <div>
          <label for="landnaam"> Land </label>
          <select name="landnaam" id="landnaam" required>
            <option value="" selected>Kies jouw land</option>
            <option value='Nederland'>Nederland</option>
            <option value='Duitsland'>Duitsland</option>
            <option value='België'>België</option>
          </select>
        </div>

        <div>
          <label for="rekeningnummer">Rekeningnummer</label>
          <input type="text" name="rekeningnummer" id="rekeningnummer" minlength="18" maxlength="18" placeholder="NL00INGB0000111122" pattern="[A-Z]{2}[0-9]{2}[A-Z]{4}[0-9]{10}" title="Een rekeningnummer bestaat uit 2 letters, 2 cijfers, 4 letters en vervolgens nog 10 cijfers" required>
        </div>

        <div>
          <label for="betaalwijze">Betaalwijze</label>
          <select name="betaalwijze" id="betaalwijze" required>
            <option value="" selected>Kies uw betaalwijze</option>
            <option value="Amex">Amex</option>
            <option value="Mastercard">Mastercard</option>
            <option value="Sepa">Sepa</option>
            <option value="Ideal">Ideal</option>
            <option value="Visa">Visa</option>
          </select>
        </div>
        <div>
          <button type="submit" class="login-btn">Registreren</button>
        </div>
      </form>
    </section>
  </main>

  <?php maakFooter(); ?>
</body>

</html>