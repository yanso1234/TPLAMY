<?php
$tabNotes = array (20, 12.5, 14, 20, 15, 9.5, 8);
$somme = $tabNotes[0] + $tabNotes[1] + $tabNotes[2] + $tabNotes[3] + $tabNotes[4] + $tabNotes [5] + $tabNotes [6];
$moyenne = number_format($somme / 7,2);
echo ' Votre moyenne est de : ' . $moyenne ;
PHP_EOL;
if ($moyenne <=10){
    echo " vous n'avez pas la moyenne";
}
elseif ($moyenne = 10 && 12 ) {
    echo " Mention passable";
}
elseif  ($moyenne = 12 && 14 ) {
    echo " Mention assez bien";
}
elseif  ($moyenne = 14 && 16) {
    echo " Mention bien";
}
elseif  ($moyenne >=16) {
    echo " Mention trés bien ";
}