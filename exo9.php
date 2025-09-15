<?php

abstract class Media
{
    private string $titre;
    private Auteur $auteur;
    private static int $compteur = 0;

    public function __construct(string $titre, Auteur $auteur)
    {
        $this->setTitre($titre);
        $this->setAuteur($auteur);
        self::$compteur++;
    }

    public function setTitre(string $titre): void
    {
        $this->titre = trim($titre);
    }

    public function setAuteur(Auteur $auteur): void
    {
        $this->auteur = $auteur;
    }

    abstract public function afficherDetails(): string;

    public static function compterMedias(): int
    {
        return self::$compteur;
    }

    public function __toString(): string
    {
        return $this->afficherDetails();
    }


    protected function getTitre(): string
    {
        return $this->titre;
    }

    protected function getAuteur(): Auteur
    {
        return $this->auteur;
    }
}

class Auteur
{
    private string $nom;
    private string $prenom;

    public function __construct(string $nom, string $prenom)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
    }

    public function setNom(string $nom): void
    {
        $this->nom = trim($nom);
    }

    public function setPrenom(string $prenom): void
    {
        $this->prenom = trim($prenom);
    }

    public function __toString(): string
    {
        return $this->prenom . ' ' . $this->nom;
    }
}

class Livre extends Media
{
    private int $anneePublication;

    public function __construct(string $titre, Auteur $auteur, int $anneePublication)
    {
        parent::__construct($titre, $auteur);
        $this->setAnneePublication($anneePublication);
    }

    public function setAnneePublication(int $annee): void
    {
        $this->anneePublication = $annee;
    }

    public function afficherDetails(): string
    {
    return "Livre : {$this->getTitre()} - Auteur : {$this->getAuteur()} - Année : {$this->anneePublication}";
    }
}

class Ebook extends Media
{
    private float $tailleFichier; // en Mo

    public function __construct(string $titre, Auteur $auteur, float $tailleFichier)
    {
        parent::__construct($titre, $auteur);
        $this->setTailleFichier($tailleFichier);
    }

    public function setTailleFichier(float $mo): void
    {
        $this->tailleFichier = $mo;
    }

    public function afficherDetails(): string
    {
    return "Ebook : {$this->getTitre()} - Auteur : {$this->getAuteur()} - Taille : {$this->tailleFichier} Mo";
    }
}

class Audiobook extends Media
{
    private int $duree; // en minutes

    public function __construct(string $titre, Auteur $auteur, int $duree)
    {
        parent::__construct($titre, $auteur);
        $this->setDuree($duree);
    }

    public function setDuree(int $minutes): void
    {
        $this->duree = $minutes;
    }

    public function afficherDetails(): string
    {
    return "Audiobook : {$this->getTitre()} - Auteur : {$this->getAuteur()} - Durée : {$this->duree} min";
    }
}

// déclaration des objets 
$a1 = new Auteur('HUGO', 'Victor');
$a2 = new Auteur('TOLSTOY', 'Leo');
$a3 = new Auteur('DUPONT', 'Jean');

$livre1 = new Livre('Les Misérables', $a1, 1862);
$ebook1 = new Ebook('War and Peace', $a2, 3.7);
$audio1 = new Audiobook('Le tour du monde en 80 jours', $a3, 720);

echo $livre1 . "\n";
echo $ebook1 . "\n";
echo $audio1 . "\n";

echo "Nombre total de médias créés : " . Media::compterMedias() . "\n";
