<?php 
require_once '../db_connectie.php';

function detailvluchten ($data){

    foreach ($data as $vlucht) {
    echo <<<OTD
    
<div class="loginFormulieren">
    <p>
        Hierin ziet u extra informatie over uw aankomende vlucht.
        Zoals de tijden en ook het type ticket
    </P>
</div>
    <div class="grid">
<div class="grid-item">
    <span class="grid-item-column">
        <strong>Vanaf</strong>
    </span>
    <span class="grid-item-row">Gelre Airport</span>
</div>
<div class="grid-item">
    <span class="grid-item-column">
        <strong>Datum vertrek</strong>
    </span>
    <span class="grid-item-row">12:00 || 10-03-2023</span>
</div>
<div class="grid-item">
    <span class="grid-item-column">
        <strong>Datum aankomst</strong>
    </span>
    <span class="grid-item-row">16:00 || 10-03-2023</span>
</div>
<div class="grid-item">
    <span class="grid-item-column">
        <strong>Vlucht</strong>
    </span>
    <span class="grid-item-row">KLM</span>
</div>
<div class="grid-item">
    <span class="grid-item-column">
        <strong>Landcode</strong>
    </span>
    <span class="grid-item-row">(IBZ)</span>
</div>


<div class="grid-item">
    <span class="grid-item-column">
        <strong>Bestemming</strong>
    </span>
    <span class="grid-item-row">Ibiza</span>
</div>
<div class="grid-item">
    <span class="grid-item-column">
        <strong>Prijs</strong>
    </span>
    <span class="grid-item-row">€200.00 p.p</span>
</div>
<div class="grid-item">
    <span class="grid-item-column">
        <strong>Vluchtnummer</strong>
    </span>
    <span class="grid-item-row">5</span>
</div>
<div class="grid-item">
    <span class="grid-item-column">
        <strong>Terminal</strong>
    </span>
    <span class="grid-item-row">1</span>
</div>
<div class="grid-item">
    <span class="grid-item-column">
        <strong>Type ticket</strong>
    </span>
    <span class="grid-item-row">Basis</span>
</div>
</div>
OTD;
}
}
?>