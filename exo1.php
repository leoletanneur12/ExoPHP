<?php
// Génère un tableau de 5 nombres aléatoires entre 0 et 99
$numbers = [];
for ($i = 0; $i < 5; $i++) {
	$numbers[] = random_int(0, 99);
}

// affiche le résultat du tableau
echo "Voici le tableau des nombres aléatoires générés :\n";
print_r($numbers);	

