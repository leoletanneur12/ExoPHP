<?php
class Etudiant
{
    private string $nom;

    private float $note;

    public function __construct(string $nom, float $note)
    {
        $this->nom = trim($nom);
        $this->setNote($note);
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getNote(): float
    {
        return $this->note;
    }

    public function setNote(float $note): void
    {
        if ($note < 0.0 || $note > 20.0) {
            throw new InvalidArgumentException('La note doit être comprise entre 0 et 20.');
        }

        $this->note = $note;
    }

    public function afficher(): string
    {
        return 'Nom : ' . $this->getNom() . ' — Note : ' . $this->getNote();
    }
}

$et1 = new Etudiant('Dupont', 15.5);
$et2 = new Etudiant('Martin', 19.0);

echo $et1->afficher() . "\n";
echo $et2->afficher() . "\n";
