<?php
global $jusqua;
$taille_tableau = 100000;
$tableau = array_fill(0, $taille_tableau, $jusqua);
$jusqua = 100000;
$texteRouge = "\033[31m";

foreach ($tableau as $index => $element) {
    $pourcentage_avancement = ($index + 1) / $taille_tableau * 100;
    $normal = "\033[0m";
    echo $normal . "en cours  : " . $texteRouge .  number_format($pourcentage_avancement, 2)  . "%\n" . $normal;
}
// echo " élements on éte traités. ";