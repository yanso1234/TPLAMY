<?php
//demander la saisie d'un nombre, afficher si le nombre est pair ou impair
$nombre = readline("Saisir un nombre  : ");
if ($nombre %2==0) {
    echo "le $nombre est pair ";
 
} else {
echo "le $nombre est impair ";
}