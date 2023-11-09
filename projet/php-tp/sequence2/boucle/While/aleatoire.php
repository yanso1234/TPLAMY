<?php
$nombre = readline("Saisir un nombre entre 0 et 1000 : ");
$coup = 1;
$aleatoire = random_int(0, 1000);
while ($nombre > 1000) {
    echo " le nombre n'est pas bon";
    $nombre = readline(" ,Saisir un nombre entre 0 et 1000 svp : ");
}

while ($nombre != $aleatoire) {
    if ($coup == 1000) {
        echo "tu n'a pas deviné";

        break;
    }

    $random = random_int(0, 1000);
    $coup = $coup+1;

}


echo "le nombre a été deviné en $coup";