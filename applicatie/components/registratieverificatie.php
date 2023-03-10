<?php
session_start();
require_once '../../applicatie/data/bezoeker.php';

if (
   isset($_POST['voornaam']) && isset($_POST['achternaam'])
   && isset($_POST['geboortedag']) && isset($_POST['geslacht'])
   && isset($_POST['email']) && isset($_POST['gebruikersnaam'])
   && isset($_POST['wachtwoord'])
   && isset($_POST['landnaam'])
   && isset($_POST['rekeningnummer']) && isset($_POST['betaalwijze'])
) {

   if (gebruikersRegistratie(
      $_POST['voornaam'],
      $_POST['achternaam'],
      $_POST['geboortedag'],
      $_POST['geslacht'],
      $_POST['email'],
      $_POST['gebruikersnaam'],
      $_POST['wachtwoord'],
      $_POST['landnaam'],
      $_POST['rekeningnummer'],
      $_POST['betaalwijze']
   )) {
      header('Location: login.php');
   } else {
      ('Location ../registratie.php');
   }
} else if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST['voornaam'])) {
   header('Location: ../registratie.php?registratie=voornaam');
} else if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST['achternaam'])) {
   header('Location: ../registratie.php?registratie=achternaam');
} else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
   header('Location: ../registratie.php?registratie=email');
} else if (!preg_match('/[A-Z]{2}[0-9]{2}[A-Z]{4}[0-9]{10}/', $_POST['rekeningnummer'])) {
   header('Location: ../registratie.php?registratie=rekeningnummer');
} else if ($allesIngevuld) {
   gebruikersRegistratie(
      $_POST['voornaam'],
      $_POST['achternaam'],
      $_POST['geboortedag'],
      $_POST['geslacht'],
      $_POST['email'],
      $_POST['gebruikersnaam'],
      $_POST['wachtwoord'],
      $_POST['landnaam'],
      $_POST['rekeningnummer'],
      $_POST['betaalwijze']
   );
   header('Location: ../inloggen.php', true, 307);
} else {
   header('Location: ../registratie.php?registratie=empty');
}
