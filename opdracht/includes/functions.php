<?php

function getInput()
{
  
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    // echo var_dump($input); // Dit returned altijd string
    // echo gettype($input); // Dit returned altijd string

    // Er zijn andere manieren om te check wat het type is
    // Maar die zijn niet besproken in de opdrachten
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