<?php
require("IbetaalAccount.php");

class Creditcard implements IbetaalAccount
{
    private array $debits = [

    ];

    function betaal(float $hoeveelheid, string $rekeningOntvanger, string $naamOntvanger): bool
    {
        echo "U hebt gekozen om te betalen met een creditcard.<br>";
        echo "Aan het eind van de maand wordt er $hoeveelheid euro meer afgeschreven van deze kaart<br>";
        echo "Het bedrag wordt overgemaakt aan $naamOntvanger met rekeningnummer $rekeningOntvanger<br>";
        $this->debits[] = ["hoeveelheid" => $hoeveelheid, "naar" => $rekeningOntvanger];
        return true;
    }
}

$creditCard = new Creditcard();
$creditCard->betaal(80, "4353535345", "persoon4");