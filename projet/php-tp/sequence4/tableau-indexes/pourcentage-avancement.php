<?php
$taille_tableau = 100000;
$tableau = array_fill(0, $taille_tableau, $jusqua);
$jusqua = 100000;
$rouge = 


foreach ($tableau as $index => $element) {
    $pourcentage_avancement = ($index + 1) / $taille_tableau * 100;
    echo '<p style="color:#778899;"> En cours</p>' . number_format($pourcentage_avancement, 2) . "%\n";
}