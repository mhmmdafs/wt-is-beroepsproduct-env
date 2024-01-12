<?php
session_start();
require_once 'components/header.php';
require_once 'components/header.php';
require_once 'components/footer.php';
require_once 'components/incheckstatus.php';
require_once 'components/vluchten.php';

$vlucht = verkrijgVlucht($_GET['vluchtnr']);
$userIngecheckt = isGebruikerIngecheckt($_GET['vluchtnr'], $_SESSION['user']['email']);

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
        <div class="flexbox-container">
            <h2>Detail pagina</h2>
        </div>
        <?php if (!isset($_SESSION['user'])) { ?>
        <div class="loginFormulieren">
            <p>
                Hierin ziet u extra informatie over uw aankomende vlucht.
                Zoals de tijden en ook het type ticket
            </P>
        </div>


        <div class="grid">
            <div class="grid-item">
                <span class="grid-item-column">
                    <strong>Vluchtnummer</strong>
                </span>
                <span class="grid-item-row"><?php echo $vlucht['vluchtnummer']; ?></span>
            </div>
            <div class="grid-item">
                <span class="grid-item-column">
                    <strong>Bestemming</strong>
                </span>
                <span class="grid-item-row"><?php echo $vlucht['bestemming']; ?></span>
            </div>
            <div class="grid-item">
                <span class="grid-item-column">
                    <strong>Gatecode</strong>
                </span>
                <span class="grid-item-row"><?php echo $vlucht['gatecode']; ?></span>
            </div>
            <div class="grid-item">
                <span class="grid-item-column">
                    <strong>Max. aantal passagiers</strong>
                </span>
                <span class="grid-item-row"><?php echo $vlucht['max_aantal']; ?></span>
            </div>


            <div class="grid-item">
                <span class="grid-item-column">
                    <strong>Max. koffergewicht p.p (Kilo)</strong>
                </span>
                <span class="grid-item-row"><?php echo $vlucht['max_gewicht_pp']; ?></span>
            </div>
            <div class="grid-item">
                <span class="grid-item-column">
                    <strong>Max. totaal gewicht</strong>
                </span>
                <span class="grid-item-row"><?php echo $vlucht['max_totaalgewicht']; ?></span>
            </div>
            <div class="grid-item">
                <span class="grid-item-column">
                    <strong>Vertrektijd</strong>
                </span>
                <span class="grid-item-row"><?php echo $vlucht['vertrektijd']; ?></span>
            </div>
            <div class="grid-item">
                <span class="grid-item-column">
                    <strong>Vliegmaatschappij</strong>
                </span>
                <span class="grid-item-row"><?php echo $vlucht['maatschappijcode']; ?></span>
            </div>
        </div>
        <section class="loginFormulieren">
            <p>
                klik hieronder om u aan te melden voor uw vlucht
            </p>

            <div><?php

                    if (!$userIngecheckt && $_SESSION['user']['user_level'] < 1) { ?>
                    <form method="post" action="components/incheckverificatie.php">
                        <input type="hidden" name="vluchtnummer" value="<?php echo $vlucht['vluchtnummer'] ?>">
                        <input type="hidden" name="email" value="<?php echo $_SESSION['user']['email'] ?>">
                        <input placeholder="aantal koffers" name="aantal_koffers" type="number" min="0" max="4" value="0" />
                        <input placeholder="koffer gewicht" name="koffer_gewicht" type="number" min="0" max="32" value="0" />
                        <div class="loginFormulieren">
                            <div>
                                <button type="submit" class="btn">inchecken</button>
                            </div>
                        </div>
                    </form>
            </div>
        <?php }} else echo '<p>U bent al ingecheckt voor deze vlucht!</p>'; ?>
        </section>


    </main>

    <footer>
        <?= maakFooter() ?>
    </footer>
</body>

</html>