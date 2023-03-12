<?php

function isGebruikerIngecheckt($vluchtnummer, $email) {
    $verbinding = maakVerbinding();
    $query = $verbinding-> prepare("SELECT * FROM vluchtpassagier WHERE vluchtnummer = :vluchtnummer AND email = :email");
    $query->execute([':vluchtnummer' => $vluchtnummer, ':email' => $email]);
    return $query->fetch();
}
