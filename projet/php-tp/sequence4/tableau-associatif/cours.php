<?php
# Déclarer et initialiser un tableau associatif
# Clé : nom d'un étudiant
# Valeur sera une note
$notes = [
    "durand" => 12,
    "Martin" => 10,
    "Dupond" => 8,
    "dupont" => 15
];

foreach ($notes as $note) {
    echo "$note ";
}
echo PHP_EOL;

# Afficher l'ensemble des notes (l'ensemble des valeurs)
# Afficher le nom de chaque étudiant avec sa note
# Affichage Possible : print_r($notes);

// clé        // valeur
foreach ($notes as $étudiant => $note) {
    echo "$étudiant: $note";
    echo PHP_EOL;
}
echo PHP_EOL;

# Afficher le nom de tous les étudiants (les clés)
$nom = array_keys($notes);

foreach ($nom as $étudiant) {
    echo "$étudiant";
    echo PHP_EOL;
}

# Ajouter l'étudiant "petit" avec une note égale à 9
$notes["petit"] = 9; // nom du tableau, ensuite la clé, ensuite la valeur
print_r($notes);

# Modifier la note de durand et attribuer la note de 13
$notes['durand'] = 13;
print_r($notes);

# Afficher le nom et la note de chaque étudiant
# Contraintes : le nom de l'étudiant doit être en minuscule, la première lettre doit être majuscule
foreach ($notes as $étudiant => $note) {
    $étudiant = ucfirst(strtolower($étudiant));
    echo "$étudiant : $note";
    echo PHP_EOL;
}
echo PHP_EOL;

// Supprimer l'étudiant 'petit' avec sa note
unset($notes["petit"]);
print_r($notes);

// Afficher la liste des étudiants triée par l'ordre alphabétique
$nom = array_keys($notes);
sort($nom);
print_r($nom);
echo PHP_EOL;

// Afficher la note maximale
$meilleureNote = max($notes);
echo "Note maximale : $meilleureNote";
echo PHP_EOL;


//Rechercher et afficher les noms des étudiants ayant une note >=10

//recuperer uniquement les élements qui satisfont une conditions
$étudiantss = [];
foreach ($notes as $noms => $note) {
    if ($note >= 10) {
        $étudiantss[] = $noms;
    }

}
//l'affichage
if (empty($étudiantss)){
    // liste vide
    echo "Aucun étudiant avec une note supérieur ou égal à 10";
}else {
    foreach ($étudiantss as $étudiant){
        echo "$étudiant";
    }
}
PHP_EOL;
//calculer et afficher la moyenne des notes !!

//version 1 : rapide (foreach)
if (empty($notes) ==false){
$somme = 0;
foreach ($notes as $note) {
    $somme += $note;
}
$moyenne = round($somme / count($notes));
echo $moyenne;
echo PHP_EOL;
}

//version 2 : propre
if (empty($notes) ==false) {
    $sum = array_sum($notes);
    $average = $sum / count($notes);
    echo $average;
}
