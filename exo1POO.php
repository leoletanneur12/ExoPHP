<?php

class Livre
{
    private string $titre;

    private string $auteur;

    // permet d'initialiser les propriétés lors de la création de l'objet
    public function __construct(string $titre, string $auteur)
    {
        $this->setTitre($titre);
        $this->setAuteur($auteur);
    }

    public function setTitre(string $titre): void
    {
        $this->titre = trim($titre);
    }

    public function setAuteur(string $auteur): void
    {
        $this->auteur = trim($auteur);
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function getAuteur(): string
    {
        return $this->auteur;
    }

    public function __toString(): string
    {
        return $this->getTitre() . ' — ' . $this->getAuteur();
    }
}

// nouveaux livres
$livre1 = new Livre('1984', 'George Orwell');
$livre2 = new Livre('Le Petit Prince', 'Antoine de Saint-Exupéry');

// Affichage
echo $livre1 . "\n";
echo $livre2 . "\n";
