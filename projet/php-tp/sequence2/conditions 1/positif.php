<?php
//demander la saisie d'un nombre, afficher si le nombre est positif ou négatif
$nombre1 = readline("Saisir un nombre  : ");
if ($nombre1>=0) {
    echo "le nombre $nombre1 est positif";
} else {
    echo "le nombre $nombre1 est negatif";
}
