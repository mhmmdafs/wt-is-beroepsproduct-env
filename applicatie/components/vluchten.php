<?php
include_once 'db_connectie.php';

function verkrijgVluchten()
{
    $vluchten = [];
    $vlucht = [];

    $verbinding = maakVerbinding();
    $query = $verbinding->prepare("SELECT * FROM [dbo].[Vlucht]");
    $query->execute();
    while ($rij = $query->fetch()) {
        $vlucht = [
            "vluchtnummer" => $rij['vluchtnummer'], "bestemming" => $rij['bestemming'], "gatecode" => $rij['gatecode'], "max_aantal" => $rij['max_aantal'],
            "max_gewicht_pp" => $rij['max_gewicht_pp'], "max_totaalgewicht" => $rij['max_totaalgewicht'], "vertrektijd" => $rij['vertrektijd'],
            "maatschappijcode" => $rij['maatschappijcode']
        ];
        array_push($vluchten, $vlucht);
    }
    return $vluchten;
}

function verkrijgVlucht($vluchtnummer) 
{
    $verbinding = maakVerbinding();
    $query = $verbinding-> prepare("SELECT * FROM Vlucht WHERE vluchtnummer = :vluchtnummer");
    $query->execute([':vluchtnummer' => $vluchtnummer]);
    return $query->fetch();
}

function verkrijgBestemmingen() {
    $verbinding = maakVerbinding();
    $query = ("SELECT bestemming FROM Vlucht");
    $data = $verbinding->query($query);
    return $data->fetchAll();
}

function verkrijgTijden() {
    $verbinding = maakVerbinding();
    $query = ("SELECT vertrektijd FROM Vlucht");
    $data = $verbinding->query($query);
    return $data->fetchAll();
}

function verkrijgKoffergewichten() {
    $verbinding = maakVerbinding();
    $query = ("SELECT DISTINCT max_gewicht_pp from Vlucht");
    $data = $verbinding->query($query);
    return $data->fetchAll();
}

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

