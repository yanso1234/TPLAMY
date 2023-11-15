<?php

// Définir la taille du tableau
$taille_tableau = 100000;

// Définir la valeur que chaque élément du tableau aura
$valeur_element = 42; // Remplace 42 par la valeur souhaitée

// Créer le tableau avec la même valeur pour chaque élément
$tableau = array_fill(0, $taille_tableau, $valeur_element);

// Parcourir le tableau et afficher le pourcentage d'avancement
foreach ($tableau as $index => $element) {
    // Calculer le pourcentage d'avancement
    $pourcentage_avancement = ($index + 1) / $taille_tableau * 100;

    // Afficher le pourcentage d'avancement
    echo "Avancement : " . number_format($pourcentage_avancement, 2) . "%\n";

    // Ici, tu peux faire ce que tu veux avec chaque élément du tableau ($element)
    // Par exemple, afficher la valeur de l'élément
    echo "Valeur de l'élément : " . $element . "\n";

    // Tu peux ajouter d'autres traitements selon tes besoins

    // Pour éviter que le script s'exécute trop rapidement, tu peux ajouter un léger délai
    usleep(1000); // Délai de 1 milliseconde (facultatif)
}

?>
