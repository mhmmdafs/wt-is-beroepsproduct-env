<!-- pagina werkt niet 

<?php
// require_once 'db_connectie.php';

// function haalBestemmingOp() {
//     $verbinding = maakVerbinding();
//     $query = $verbinding->prepare("SELECT bestemming FROM Vlucht");
//     $query->execute([$query]);
//     return $query->fetch();
// }

// function haalVertrektijdOp() {
//     $verbinding = maakVerbinding();
//     $query = $verbinding->prepare("SELECT vertrektijd FROM Vlucht");
//     $query->execute([$query]);
//     return $query->fetch();
// }

// function haalmax_aantalOp() {
//     $verbinding = maakVerbinding();
//     $query = $verbinding->prepare("SELECT max_aantal FROM Vlucht");
//     $query->execute([$query]);
//     return $query->fetch();
// }

// function haalmax_gewicht_ppOp() {
//     $verbinding = maakVerbinding();
//     $query = $verbinding->prepare("SELECT max_gewicht_pp FROM Vlucht");
//     $query->execute([$query]);
//     return $query->fetch();
// }

// function verkrijgVluchtMetAlleGegevens($bestemming, $datum, $passagiers, $gewicht) {
//     $verbinding = maakVerbinding();
//     $query = $verbinding->prepare("SELECT * FROM Vlucht WHERE bestemming = ? AND vertrektijd = CONVERT(datetime, ?) AND max_aantal = ? AND max_gewicht_pp = ?");
//     $query->execute([$bestemming, $datum, $passagiers, $gewicht]);
//     return $query->fetchAll();
// } -->
