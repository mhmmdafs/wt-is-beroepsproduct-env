<?php
require_once 'db_connectie.php';
function maak($email, $wachtwoord, $voornaam, $achternaam, $land, $geboortedatum, $rekeningnummer, $abonnement, $betaalwijze) {
$passwordHashed = password_hash($wachtwoord, PASSWORD_DEFAULT);
$verbinding = maakVerbinding();
$query = $verbinding->prepare("INSERT INTO Customer (customer_mail_address, lastname, firstname, payment_card_number, payment_method,
                                                        contract_type, subscription_start, user_name, password, country_name, birth_date) VALUES
                                                        (?, ?, ?, ?, ?, ?, GETDATE(), ?, ?, ?, ?)");

$result = $query->execute([$email, $achternaam, $voornaam, $rekeningnummer, $betaalwijze, $abonnement, $email, $passwordHashed, $land, $geboortedatum]);
return $result;
}