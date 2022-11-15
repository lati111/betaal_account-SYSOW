<?php
require ("IbetaalAccount.php");

class Bankrekening implements IbetaalAccount {
    private string $rekeningNummer = "32235255";
    private int $saldo = 100;

     function betaal(float $hoeveelheid, string $rekeningOntvanger, string $naamOntvanger) : bool {
        if ($this->saldo > $hoeveelheid) {
            echo "U hebt gekozen om te betalen met IDeal.<br>";
            echo "Het bedrag van $hoeveelheid euro wordt afgeschreven van rekeningnummer $this->rekeningNummer<br>";
            echo "Het bedrag wordt overgemaakt aan $naamOntvanger met rekeningnummer $rekeningOntvanger<br>";
            $this->saldo -=  $hoeveelheid;
            return true;
        } else {
            echo "Uw rekening heeft onvoldoende saldo";
            return false;
        }
    }
}

$bankrekening = new Bankrekening();
$bankrekening->betaal(80, "4353535345", "persoon4");