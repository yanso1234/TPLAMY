<?php
#Déclarer er initaliser un tableau associatif
#Clé : nom d'un étudiant
#Valeur sera une note
$notes = [
    "durand" => 12,
    "Martin" => 10,
    "Dupond" => 8,
    "dupont" =>15
];
foreach ($notes as $note ){
    echo "$note ";
}
echo PHP_EOL;

#Afficher l'ensemble des notes (l'ensemble des valeurs)
#Afficher le nom de chaque étudiant avec sa note
#Affichage Possible : print_r($notes);

                   //clé        // valeur
foreach ($notes as $étudiants => $note){
    echo "$étudiants:$note";
    echo PHP_EOL;
}
echo PHP_EOL;

#Afficher le nom de tous les étudiants (les clés)

$nom = array_keys($notes);

foreach ($nom as $étudiant) {
    echo "$étudiant";
    echo PHP_EOL;
}

#Ajouter l'étudiant "petit" avec une note égal à 9
$notes["petit"] = 9; // nom du tableau, ensuite la clé, ensuite la valeurs
print_r($notes);

# modifier la note de durand est attriubé la note de 13
$notes['durand'] = 13;
print_r($notes);

# Afficher le nom et la note de chaque étudiant
# contraintes, le nom de l'étudiant doit être en Minuscule, la première lettre doit être majusucule

foreach ($notes as $étudiants => $note){
    echo $etudiant = ucfirst(strtolower($étudiant));
   echo "$etudiant : $note";
   echo PHP_EOL;
}
echo PHP_EOL;

//Supprimer l'étudiant 'petit' avec sa note
unset($notes["petit"]);
print_r($notes);