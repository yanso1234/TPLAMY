<?php
//Définir une focntion qui affiche bonjour
function saluer() : void {
    echo "bonjour" .PHP_EOL;
}
//Appeler la fonction saluer pour l'éxecuter
saluer();



//Définir une fonction qui affiche bonjour avec un prénom (fonction parametré)
function saluerPrenom(string $prenom) : void {
    echo "bonjour $prenom " . PHP_EOL;
}
saluerPrenom("yanis");
saluerPrenom("monnot");
saluerPrenom("pascal");

//Définir une fonction permettant de calculer la somme de deux nombres
function additionner(int $nb1, int $nb2) : int {
    // $somme est une variable locale
    return $nb1 + $nb2;
}
//appeler la fonction
$resultat = additionner(10,20);
echo "le résultat est égal à : " . $resultat ;
PHP_EOL;
//Alternative secondaire
echo "la somme est égale  à : ". additionner(10,20);


