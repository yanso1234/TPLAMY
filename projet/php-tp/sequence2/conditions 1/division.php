<?php
$nombre1 = readline("Saisir un nombre entier :");
$nombre2 = readline("Saisir un nombre entier :");


if ($nombre2==0){

    echo"le resultat de la division est égal à $resultat alors ca ne marche impossible ";
} else {

    $resultat = round($nombre1 / $nombre2,2);
    echo"le resultat de la division est égal à $resultat alors ca marche ";
}