<?php
// Tableau associatif
$notes = [
    'Dupont' => ['anglais' => 12, 'français' => 9, 'math' => 8],
    'Franck' => ['anglais' => 2, 'français' => 19, 'math' => 12],
    'Alice'  => ['anglais' => 10, 'français' => 11, 'math' => 10],
    'Stephane'=> ['anglais' => 14, 'français' => 15, 'math' => 18],
    'Coralie'=> ['anglais' => 12, 'français' => 19, 'math' => 5],
];

// Affiche le tableau
echo "Contenu du tableau :\n";
print_r($notes);
echo "\n";

// Parcours et affiche les étudiants qui ont 10 de moyenne ou plus
foreach ($notes as $nom => $matieres) {
    $somme = 0;
    $nombre = 0;
    foreach ($matieres as $matiere => $note) {
        $somme += $note;
        $nombre++;
    }
    $moyenne = $somme / $nombre;
    if ($moyenne >= 10) {
        // formatage sur 2 décimales
        echo "{$nom} a obtenu l'examen avec une moyenne de " . number_format($moyenne, 2) . "\n";
    }
}