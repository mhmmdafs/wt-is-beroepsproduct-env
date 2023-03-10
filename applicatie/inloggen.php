<?php
session_start();
require_once './data/bezoeker.php';

session_start();
if(!empty($_POST['gebruikersnaam']) && !empty($_POST['wachtwoord'])) {
    $user = verkrijgGegevens($_POST['gebruikersnaam']);
    if (password_verify($_POST['wachtwoord'], $user['wachtwoord']) && $user) {
        $_SESSION['user'] = $user;
        header('Location: home.php');
    } else {
        header('Location: login.php?inloggen=login');
    }
} else {
    header('Location: login.php?inloggen=empty');
}