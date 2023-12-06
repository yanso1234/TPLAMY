<?php

// Déclaration d'un tableau indexé bi-dimensionnel
// dont les valeurs sont des tableaux indexés d'entiers
// Chaque valeur peut être un tableau de taille différente
$tab = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9, 10]
];

// Afficher une valeur particulière du tableau
echo "-------------------------------------"  . PHP_EOL;
echo $tab[0][1];

// Afficher toutes les valeurs du tableau
echo "-------------------------------------" . PHP_EOL;
foreach ($tab as $ligne) {
    // $ligne est un tableau indexé
    foreach ($ligne as $nombre);
    echo "$nombre ";
}
echo PHP_EOL;

// Afficher tous les éléments (index et valeur) du tableau
echo "-------------------------------------" . PHP_EOL;
foreach ($tab as $index => $ligne){
    echo "$index : ";
    foreach ($ligne as $index2 => $valeur){
        echo "[$index2] $valeur ";
    }
    echo PHP_EOL;
}

