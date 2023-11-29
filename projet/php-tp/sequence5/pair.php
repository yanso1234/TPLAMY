<?php
// Inclure le fichier cours-fonction.php
// dans lequel's la fonction est définie
require "cours-fonction.php";




    $nombre = readline("Saisir un nombre : ");
$resultat = estPair($nombre);

if (estPair($nombre)){
    echo "le nombre est pair";
}else{
    echo "le nombre est impair";
}
