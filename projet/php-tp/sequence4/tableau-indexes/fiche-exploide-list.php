<?php
$livre = "Les Misérables:Victor Hugo:1862: Roman historique:978-0-679-60129-2";

//1.extraire et afficher les informatiions d'un livre
// utiliser la fonction explode

$livretabl = explode(':', $livre);
foreach ($livretabl as $info) {
    echo $info;
}
echo PHP_EOL;

//2. utiliser list()

list($titre,$auteur,$année,$genre,$isbm) = explode(":",$livre);
echo "$titre $auteur $année $genre$isbm";

echo PHP_EOL;

//3. utiliser le destructuring de tableau (à partir de php 7.1)
[$titre, $auteur, $année, $genre, $isbm] = explode(':', $livre);
echo "$titre $auteur $année $genre $isbm";

echo PHP_EOL;

//4. Afficher le titre et l'année du livre
$livretabl = explode(":",$livre);
echo "$livretabl[0] $livretabl[2]";
echo PHP_EOL;

// 5. Afficher le titre et l'année avec  list()
list($titre,,$année) = explode(":",$livre);
echo "le titre est $titre , il est paru en $année";
echo PHP_EOL;

//6. Afficher le titre et l'année avec le destruring
[$titre,,$année] = explode(":",$livre);
echo "le titre est $titre , il est paru en $année";
echo PHP_EOL;

//7 . Affciher l'auteur du livre
[,$auteur] = explode(":",$livre);
echo "$auteur";
echo PHP_EOL;

//8 . Afficher l'isbn du livre
[,,,,$isbm] = explode(":",$livre);
echo "$isbm";
echo PHP_EOL;
