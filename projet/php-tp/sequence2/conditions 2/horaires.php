<?php
$h = readline("Saisir une heure (h:mm) : ");
$temps = time ();

if($h >= 8 && $h < 12) {
    echo "le magasin est ouvert";

}else if($h >= 14 && $h < 19) {
    echo "le magasin est ouvert";

}else{ ($h >= 19 && $h < 8);
    echo "le magasin est fermer";

    }