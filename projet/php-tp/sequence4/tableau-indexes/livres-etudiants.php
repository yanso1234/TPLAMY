<?php


//echo "1. Afficher la liste des livres\n";
//echo "2. Rechercher un livre par auteur\n";
//echo "3. Modifier l'année de parution d'un livre\n";
//echo "4. Voir les résultats d'un joueur\n";
//  echo "5. Quitter\n";
//

$livres = [
    "Les Misérables:Victor Hugo:1862:Roman historique:978-0-679-60129-2",
    "Notre-Dame de Paris:Victor Hugo:1831:Roman gothique:978-0-679-60136-0",
    "Le Comte de Monte-Cristo:Alexandre Dumas:1844:Roman d'aventure:978-0-679-60130-8",
    "Les Trois Mousquetaires:Alexandre Dumas:1844:Roman d'aventure:978-0-679-60137-7",
    "Madame Bovary:Gustave Flaubert:1857:Roman réaliste:978-0-679-60131-5",
    "L'Éducation sentimentale:Gustave Flaubert:1869:Roman:978-0-679-60138-4",
    "Le Petit Prince:Antoine de Saint-Exupéry:1943:Roman:978-2-07-040850-4",
    "Vol de nuit:Antoine de Saint-Exupéry:1931:Roman:978-2-07-040851-1",
    "Candide:Voltaire:1759:Conte philosophique:978-0-679-60132-2",
    "Zadig:Voltaire:1747:Conte philosophique:978-0-679-60139-1"
];

// Afficher pour chaque livre son titre, son auteur et son année de parution
// Format d'affichage : "Titre" écrit par "Auteur" en "Année de parution"
echo "------------ Liste des livres ------------".PHP_EOL;


// Rechercher et afficher tous les livres écrits par un auteur donné
// L'auteur est saisi par l'utilisateur (respecter la casse)
// Format d'affichage : "Titre" ("Genre") écrit en "Année de parution"
// Si aucun livre n'est trouvé, afficher "Aucun livre trouvé pour cet auteur"
echo "------------ Recherche de livres par auteur ------------".PHP_EOL;


// Modifier l'année de parution d'un livre dont l'ISBN est saisi par l'utilisateur
// L'année de parution est également saisie par l'utilisateur
// Si l'ISBN n'est pas trouvé, afficher "ISBN non trouvé"
// sinon afficher "L'année de parution a été modifiée avec succès et afficher la liste des livres mise à jour"
echo "------------ Modification de l'année de parution ------------".PHP_EOL;


// Rechercher et afficher tous les livres publiés entre deux années spécifiques.
// Les années sont saisies par l'utilisateur (Année de début et Année de fin)
// Format d'affichage : "Titre" de "Auteur" (Publié en "Année de parution")
echo "------------ Recherche de livres entre deux années ------------".PHP_EOL;


// Rechercher et afficher tous les livres dont le titre contient une chaine de caractères spécifique.
// La chaine de recherche  est saisie par l'utilisateur
// La recherche doit être insensible à la casse
// Format d'affichage : "Titre" de "Auteur" ("Année de parution")
echo "------------ Recherche de livres par mot clé dans le titre ------------".PHP_EOL;

// Rechercher tous les genres proposés et stocker dans un tableau
// Attention un même genre ne doit être stocké qu'une seule fois
// Afficher les genres
echo "------------ Recherche des genres ------------".PHP_EOL;

// Afficher le nombre de livres pour un auteur donné
// L'auteur est saisi par l'utilisateur (attention la casse n'est pas forcément respectée pour le nom de l'auteur)
// Format d'affichage : "Auteur" a écrit "Nombre de livres" livres
// Si aucun livre n'est trouvé, afficher "Aucun livre trouvé pour cet auteur"

echo "------------ Nombre de livres pour un auteur donné ------------".PHP_EOL;


// BONUS
// Créer un menu permettant à l'utilisateur de choisir une action à effectuer
// 1. Afficher la liste des livres
// 2. Rechercher un livre par auteur
// 3. Modifier l'année de parution d'un livre
// 4. Rechercher des livres par plage d'années
// 5. Rechercher des livres par mot clé dans le titre
// 6. Rechercher tous les genres
// 7. Afficher le nombre de livres pour un auteur donné
// 8. Quitter

