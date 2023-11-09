<?php
$equipes = ['France', 'Brésil', 'Argentine', 'Espagne', 'Sénégal', 'Australie', 'Belgique'];
echo "Entrez le nom de l'équipe que vous souhaitez vérifier : ";
$equipeRecherchee = readline();
$trouve = false;
foreach ($equipes as $equipe) {
    if ($equipe === $equipeRecherchee) {
        $trouve = true;
        break;
    }
}
if ($trouve) {
    echo "L'équipe $equipeRecherchee sera présente à la prochaine coupe du monde de football.";
} else {
    echo "L'équipe $equipeRecherchee ne sera pas présente à la prochaine coupe du monde de football.";
}

PHP_EOL;
PHP_EOL;

$equipes = ['France', 'Brésil', 'Argentine', 'Espagne', 'Sénégal', 'Australie', 'Belgique'];

echo "Entrez le nom de l'équipe que vous souhaitez vérifier : ";
$equipeRecherchee = readline(); // Lire l'entrée de l'utilisateur

$trouve = false;
$index = 0;
$equipeTrouvee = '';

while (!$trouve && $index < count($equipes)) {
    if ($equipes[$index] === $equipeRecherchee) {
        $trouve = true;
        $equipeTrouvee = $equipeRecherchee;
    }
    $index++;
}

if ($trouve) {
    echo "L'équipe $equipeTrouvee sera présente à la prochaine coupe du monde de football.";
} else {
    echo "L'équipe $equipeRecherchee ne sera pas présente à la prochaine coupe du monde de football.";
}




