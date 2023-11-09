<?php
$km = readline("saisir une distance (en kms)  : ");
$hd = readline( "saisir une durée (H:MM)     : ");
$heure = substr($hd, 0,1);
$minutes = substr($hd, 2,4);
$heure= intval($heure)+(intval($minutes)/60);
$conversion = ($km / $heure);
echo "la vitesse moyenne du trajet est de $conversion ";

if ($conversion<=90) {
    echo "Vous êtes en dessous de 90\n $couleurverte" ;
} else {
    echo "vous êtes aux dessus des 90 ";
}

$couleurverte ="\037[42m";