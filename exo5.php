<?php
// Génère un tableau de 5 nombres aléatoires entre 0 et 99
$numbers = [];
for ($i = 0; $i < 5; $i++) {
	$numbers[] = random_int(0, 99);
}

// affiche le résultat du tableau
echo "Voici le tableau des nombres aléatoires générés :\n";
print_r($numbers);

// Fonction simple qui vérifie si un tableau est trié en ordre croissant
function trier(array $arr): bool
{
	// On parcourt le tableau et on vérifie que chaque élément est <= au suivant
	for ($i = 0; $i < count($arr) - 1; $i++) {
		if ($arr[$i] > $arr[$i + 1]) {
			return false; // si on trouve un élément plus grand que le suivant, ce n'est pas trié
		}
	}
	return true; // sinon, le tableau est trié
}

// Affichage du résultat (true/false)
echo "Trié en ordre croissant : " . (trier($numbers) ? 'true' : 'false') . "\n";

