<?php

function maakHeader($active) {
    echo '<h1 id="logo"><a href="index.php" class=' . ($active == 'logo' ? "'active'" : "") . '>Fletnix</a></h1>';
    echo '<nav>' . '<ul>';
    echo '<li><a href="overons.php" class=' . ($active == 'overons' ? "'active'" : "") . '>Over ons</a>';
    echo '<div class="sub-menu">' . '<ul>';
    echo '<li><a href="privacyverklaring.php">Privacyverklaring</a></li>';
    echo '</ul>' . '</div>' . '</li>';
    echo '<li><a href="filmoverzicht.php" class=' . ($active == 'filmoverzicht' ? "'active'" : "") . '>Filmoverzicht</a></li>';
    echo '<li><a href="login.php" class=' . ($active == 'inloggen' ? "'active'" : "") . '>Inloggen</a></li>';
    echo '</ul>' . '</nav>';
}

function maakHeaderIngelogd($active) {
    echo '<h1 id="logo"><a href="ingelogd.php" class=' . ($active == 'logo' ? "'active'" : "") . '>Fletnix</a></h1>';
    echo '<nav>' . '<ul>';
    echo '<li><a href="zoekopties.php" class=' . ($active == 'zoekopties' ? "'active'" : "") . '>Zoekopties</a></li>';
    echo '<li><a class="ingelogd" href="../logout.php">' . $_SESSION['user']['firstname'] . '</a></li></ul></nav>';
}