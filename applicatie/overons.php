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
    <?php
    maakHeader();
    ?>

    <main>
      <section class="overons-container">
        <article class="overons-content">
          <h2>Wie zijn wij?</h2>
          <p>
            Geldre Airport is een vakantieboek website waar je voor een
            goedkopere prijs vakanties en vluchten kan boeken.
          </p>
          <p>
            Geldere Airport is een specifiek gericht op de doelgroep studenten
            en jong volwassenen, Geldre Airport is opgericht in 2022.
          </p>
        </article>
      </section>
    </main>

    <?php maakFooter();?>
  </body>
</html>
