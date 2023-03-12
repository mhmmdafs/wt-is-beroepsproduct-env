<?php
require_once '../db_connectie.php';

function verkrijgVluchtenPassagiers()
{
    $vluchten = [];
    $vlucht = [];

    $verbinding = maakVerbinding();
    $query = $verbinding->prepare("SELECT * FROM vluchtpassagier");
    $query->execute();
    while ($rij = $query->fetch()) {
        $vlucht = [
            "vluchtnummer" => $rij['vluchtnummer'], "email" => $rij['email'], 'aantal_koffers' => $rij['aantal_koffers'], 'koffer_gewicht' => $rij['koffer_gewicht']
        ];
        array_push($vluchten, $vlucht);
    }
    return $vluchten;
}