<?php
$nombre1 = readline("Saisir un prix ht  : ");
$nombre2 = readline("Saisir un taux de tva en pourcentage :");
$convertiseur = $nombre1 + $nombre1 *($nombre2/100);
$calcul = number_format($convertiseur,2);
echo "le prix TTC est de " . $calcul;

