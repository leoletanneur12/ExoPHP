<?php

$evenements = [
    "Formation PHP" => ["debut" => "2024-10-01", "fin" => "2024-10-15"],
    "Stage en entreprise" => ["debut" => "2024-11-01", "fin" => "2024-11-30"],
    "Examen final" => ["debut" => "2024-12-10", "fin" => "2024-12-12"],
];

// Date actuelle. Format YYYY-MM-DD
$aujourdhui = date('Y-m-d');
$aujourdhui_ts = strtotime($aujourdhui);

echo "Date actuelle : {$aujourdhui}\n\n";

foreach ($evenements as $nom => $periode) {
    $debut_ts = strtotime($periode['debut']);
    $fin_ts = strtotime($periode['fin']);

    if ($aujourdhui_ts < $debut_ts) {
        $etat = 'À venir';
    } elseif ($aujourdhui_ts >= $debut_ts && $aujourdhui_ts = $fin_ts) {
        $etat = 'En cours';
    } else {
        $etat = 'Terminé';
    }

    echo "{$nom} : {$etat}\n";
}
