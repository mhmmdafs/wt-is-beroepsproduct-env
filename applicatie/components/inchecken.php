<?php
require_once 'db_connectie.php';


function inchecken($vluchtnummer, $email, $aantal_koffers, $koffer_gewicht) {
    $verbinding = maakVerbinding();
    $query = $verbinding->prepare("INSERT INTO vluchtpassagier (vluchtnummer, email, aantal_koffers, koffer_gewicht) VALUES (?, ?, ?, ?)");

    $result = $query->execute([$vluchtnummer, $email, $aantal_koffers, $koffer_gewicht]);
    return $result;
    }

