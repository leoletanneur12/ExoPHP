<?php
class Employe {
    public function calculerSalaire(): float { return 2000.0; }
}

class Manager extends Employe {
    public function calculerSalaire(): float { return 3000.0; }
    public function presenter(): void { echo "Je suis un manager, salaire: " . $this->calculerSalaire() . "\n"; }
}

class Ouvrier extends Employe {
    public function calculerSalaire(): float { return 1900.0; }
    public function presenter(): void { echo "Je suis un ouvrier, salaire: " . $this->calculerSalaire() . "\n"; }
}

$employes = [new Employe(), new Manager(), new Ouvrier()];
foreach ($employes as $e) {
    echo "Salaire : " . $e->calculerSalaire() . "\n";
}

// Appel de presenter si la méthode existe
foreach ($employes as $e) {
    if (method_exists($e, 'presenter')) {
        $e->presenter();
    }
}