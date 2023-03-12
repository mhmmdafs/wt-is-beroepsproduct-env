<?php
session_start();
require_once 'components/header.php';
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
        <div class="flexbox-container">
            <h2>Detail pagina</h2>
        </div>

        <div class="loginFormulieren">
            <p>
                Hierin ziet u extra informatie over uw aankomende vlucht.
                Zoals de tijden en ook het type ticket
            </P>
        </div>

        <div class="grid">
            <div class="grid-item">
                <span class="grid-item-column">
                    <strong>Vanaf</strong>
                </span>
                <span class="grid-item-row">Gelre Airport</span>
            </div>
            <div class="grid-item">
                <span class="grid-item-column">
                    <strong>Datum vertrek</strong>
                </span>
                <span class="grid-item-row">12:00 || 10-03-2023</span>
            </div>
            <div class="grid-item">
                <span class="grid-item-column">
                    <strong>Datum aankomst</strong>
                </span>
                <span class="grid-item-row">16:00 || 10-03-2023</span>
            </div>
            <div class="grid-item">
                <span class="grid-item-column">
                    <strong>Vlucht</strong>
                </span>
                <span class="grid-item-row">KLM</span>
            </div>
            <div class="grid-item">
                <span class="grid-item-column">
                    <strong>Landcode</strong>
                </span>
                <span class="grid-item-row">(IBZ)</span>
            </div>


            <div class="grid-item">
                <span class="grid-item-column">
                    <strong>Bestemming</strong>
                </span>
                <span class="grid-item-row">Ibiza</span>
            </div>
            <div class="grid-item">
                <span class="grid-item-column">
                    <strong>Prijs</strong>
                </span>
                <span class="grid-item-row">€200.00 p.p</span>
            </div>
            <div class="grid-item">
                <span class="grid-item-column">
                    <strong>Vluchtnummer</strong>
                </span>
                <span class="grid-item-row">5</span>
            </div>
            <div class="grid-item">
                <span class="grid-item-column">
                    <strong>Terminal</strong>
                </span>
                <span class="grid-item-row">1</span>
            </div>
            <div class="grid-item">
                <span class="grid-item-column">
                    <strong>Type ticket</strong>
                </span>
                <span class="grid-item-row">Basis</span>
            </div>
        </div>
    </main>

        <?php maakFooter();?>
</body>
</html>