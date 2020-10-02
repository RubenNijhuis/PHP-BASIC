<?php

function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    if ($input === 'true') {
        $input = true; // hiermee maak je van string 'true' boolean true
    } en dan vanaf hier verder met else if ("false")
    
    // met is_numeric() kan je checken of een string een int is
    // als is_nummeric true is, string omzetten naar int met bijvoorbeeld intval()
    // als is_numeric false is, niks doen met $input
    echo var_dump($input);
}


function getProductNr()
{
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    echo $productnummer;
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    echo $aantalProd;
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    echo $leeftijd;
}

?>