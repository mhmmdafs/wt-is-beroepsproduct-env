<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/db_connectie.php';

function gebruikersRegistratie($voornaam, $achternaam, $geboortedatum, $geslacht, $email, $gebruikersnaam, $wachtwoord, $land, $rekeningnummer, $betaalwijze) {
    $passwordHashed = password_hash($wachtwoord, PASSWORD_DEFAULT);
    $verbinding = maakVerbinding();
    $query = $verbinding->prepare("INSERT INTO users (voornaam, achternaam, geboortedag, geslacht, email, gebruikersnaam, wachtwoord, landnaam, rekeningnummer, betaalwijze)
                                                        VALUES
                                                        (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $result = $query->execute([$voornaam, $achternaam, $geboortedatum, $geslacht, $email, $gebruikersnaam, $passwordHashed, $land, $rekeningnummer, $betaalwijze]);
    return $result;
    }


function verkrijgGegevens($gebruikersnaam) {
    $verbinding = maakVerbinding();
    $query = $verbinding-> prepare("SELECT * FROM users WHERE gebruikersnaam = :gebruikersnaam");
    $query->execute([':gebruikersnaam' => $gebruikersnaam]);
    return $query->fetch();
}

function verkrijgGebruikers() {
    $users =[];
    $verbinding = maakVerbinding();
    $query = $verbinding-> prepare("SELECT email FROM users WHERE user_level < 1");
    $query->execute();
    while ($rij = $query->fetch()) {
        $user = [
            'email' => $rij['email']
        ];
        array_push($users, $user);
    }
    return $users;
}