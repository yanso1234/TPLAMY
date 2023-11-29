<?php
function estPair(int $nb) : bool{

    return $nb % 2 == 0;
    }

    $nombre = readline("Saisir un nombre : ");
$resultat = estPair($nombre);

if (estPair($nombre)){
    echo "le nombre est pair";
}else{
    echo "le nombre est impair";
}