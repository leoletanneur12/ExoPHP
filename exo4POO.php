<?php

abstract class Employe {
    public string $nom;
    abstract public function calculerSalaire(): float;
}

class Ouvrier extends Employe {
    public int $heures; public float $taux;
    public function calculerSalaire(): float { return $this->heures * $this->taux; }
}

class Manager extends Employe {
    public float $base; public int $equipe; public float $prime;
    public function calculerSalaire(): float { return $this->base + $this->equipe * $this->prime; }
}

$o = new Ouvrier();
$o->nom = 'Dupont';
$o->heures = 100; $o->taux = 12.5; // 1250

$m = new Manager();
$m->nom = 'Martin';
$m->base = 2000; $m->equipe = 4; $m->prime = 150; // 2000 + 4*150 = 2600

echo $o->calculerSalaire() . "\n";
echo $m->calculerSalaire() . "\n";
