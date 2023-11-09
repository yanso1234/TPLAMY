<?php

$prix_ttc = 20; //20 €
$tva = "19,6"; //19,6 %

$calcul = $prix_ttc*$tva/100+$prix_ttc; // 20*19,6/100+20 = 23,92 €

echo 'Le prix HT de '.$prix_ttc.' est : '.$calcul.' €.';