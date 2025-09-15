<?php
class Vehicule {
    public function rouler() : void {
        echo "Le véhicule roule.\n";
    }
}

class Moto extends Vehicule {
    public function rouler() : void {
        echo "La moto roule .\n";
    }
}

$rex = new Moto();
$rex->rouler();