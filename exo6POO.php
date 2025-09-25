<?php

trait Horodatage {
	public function maintenant(): string { return date('c'); }
}

class Commande {
	use Horodatage;
	public function enregistrer(): void { echo 'Commande enregistrée à ' . $this->maintenant() . "\n"; }
}

$c = new Commande();
$c->enregistrer();

