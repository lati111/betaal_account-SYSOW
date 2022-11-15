<?php
require("IbetaalAccount.php");

class Paypal implements IbetaalAccount
{
    private string $username;
    private int $saldo = 100;

    function __construct(string $username, string $password) {
        $this->username = $username;
    }

    function betaal(float $hoeveelheid, string $rekeningOntvanger, string $naamOntvanger): bool
    {
        if ($this->saldo > $hoeveelheid) {
            echo "U hebt gekozen om te betalen met paypal.<br>";
            echo "Het bedrag van $hoeveelheid euro wordt afgeschreven van dit account<br>";
            echo "Het bedrag wordt overgemaakt aan $naamOntvanger met rekeningnummer $rekeningOntvanger<br>";
            $this->saldo -=  $hoeveelheid;
            return true;
        } else {
            echo "Uw paypal heeft onvoldoende saldo";
            return false;
        }
    }
}

$paypal = new Creditcard("username", "password");
$paypal->betaal(80, "4353535345", "persoon4");