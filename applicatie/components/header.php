<?php

function maakHeader() {
    echo '<div class="navbar topnav">';
    echo '<nav class="topnav">';
    echo '<a class="logo" href="home.php"><img alt="logo" class="logo" src="images/plane.png"></a>';
    echo '<a href="vluchten.php">Vluchten</a>';

    if (!isset($_SESSION['user'])) {
        echo '<a href="login.php">Inloggen</a>';
    }

    echo '<input type="text" placeholder="Search..">';

    if (isset($_SESSION['user'])) {
        echo '<a>' . $_SESSION['user']['gebruikersnaam'] . '</a>';
        echo '<a href="uitloggen.php">Uitloggen</a>';
    }

    echo '</nav>';
    echo '</div>';
}


