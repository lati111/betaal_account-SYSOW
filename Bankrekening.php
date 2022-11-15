<?php
require ("Bankrekening.php");

class Bankrekening implements IbetaalAccount {
    private int $saldo = 100;

     function betaal(float $hoeveelheid, string $rekeningOntvanger, string $naamOntvanger) : bool {
        if ($this->saldo > $hoeveelheid) {
            echo "U hebt gekozen om te betalen met IDeal.<br>";
            echo "Het bedrag van $hoeveelheid euro wordt afgeschreven van rekeningnummer $rekeningOntvanger<br>";
            echo "Het bedrag wordt overgemaakt aan $naamOntvanger met rekeningnummer $rekeningOntvanger<br>";
            return true;
        } else {
            echo "Uw rekening heeft onvoldoende saldo";
            return false;
        }
    }
}