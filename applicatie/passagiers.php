<?php
session_start();
require_once 'components/header.php';
require_once 'components/footer.php';

require_once 'data/bezoeker.php';
$users = verkrijgGebruikers();

require_once 'components/vluchten.php';
$vluchten = verkrijgVluchten();
$vluchtenpassagiers = verkrijgVluchtenPassagiers();
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
    <header>
        <?= maakHeader() ?>
    </header>

    <main>
        <form method="post" action="../components/incheckverificatie.php" class='loginFormulieren'>
            <label for="email">E-mail gebruiker:</label>
            <select name="email" id="email">
                <option value="">Selecteer gebruiker</option>
                <?php
                foreach ($users as $user) {
                    echo '<option>' . $user['email'] . '</option>';
                }
                ?>
            </select>
            <label for="vluchtnummer">Vluchtnummer:</label>
            <select name="vluchtnummer" id="vluchtnummer">
                <option value="">Selecteer vluchtnummer</option>
                <?php
                foreach ($vluchten as $vlucht) {
                    echo '<option>' . $vlucht['vluchtnummer'] . '</option>';
                }
                ?>
            </select>
            <label for="aantal_koffers">Aantal koffers:</label>
            <input name="aantal_koffers" type="number" min="0" max="4" value="0" />
            <label for="koffer_gewicht">Gewicht koffers:</label>
            <input name="koffer_gewicht" type="number" min="0" max="32" value="0" />

            <div class="loginFormulieren">
                <div>
                    <button type="submit" class="btn">Inchecken passagier</button>
                </div>
            </div>
        </form>

        <div class="grid-passagiers">
            <?php foreach ($vluchtenpassagiers as $vluchtpassagier) {
                echo '<div class="grid-item">
                <span class="grid-item-column">
                    <strong>Passagier e-mail</strong>
                </span>
                <span class="grid-item-row">' . $vluchtpassagier['email'] . '</span>
            </div>
            <div class="grid-item">
                <span class="grid-item-column">
                    <strong>Vluchtnummer</strong>
                </span>
                <span class="grid-item-row">' . $vluchtpassagier['vluchtnummer'] . '</span>
            </div>
            <div class="grid-item">
                <span class="grid-item-column">
                    <strong>Aantal koffers</strong>
                </span>
                <span class="grid-item-row">' . $vluchtpassagier['aantal_koffers'] . '</span>
            </div>
            <div class="grid-item">
                <span class="grid-item-column">
                    <strong>Gewicht koffers</strong>
                </span>
                <span class="grid-item-row">' . $vluchtpassagier['koffer_gewicht'] . '</span>
            </div>
            <div class="grid-item">
                <span class="grid-item-column">
                    <strong>Verwijderen</strong>
                </span>
                <div>
                    <span class="grid-item-row">
                        <a href="#!">verwijder</a>
                    </span>
                </div>
            </div>';
            } ?>
        </div>

    </main>

    <footer>
        <?= maakFooter() ?>
    </footer>

</body>

</html>