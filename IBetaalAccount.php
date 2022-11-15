<?php

interface IbetaalAccount {
    public function betaal(float $hoeveelheid, string $rekeningOntvanger, string $naamOntvanger) : bool;
}