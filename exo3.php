<?php
// Génère un tableau de 5 nombres aléatoires entre 0 et 99
$numbers = [];
for ($i = 0; $i < 5; $i++) {
	$numbers[] = random_int(0, 99);
}

echo "Voici le tableau des nombres aléatoires générés :\n";
print_r($numbers);


//afficher le plus grand et le plus petit nombre du tableau via 2 fonction 

function plusGrand($array) {
    return max($array);
}

function plusPetit($array) {
    return min($array);
}

echo "Le plus grand nombre est : " . plusGrand($numbers) . "\n";
echo "Le plus petit nombre est : " . plusPetit($numbers) . "\n";