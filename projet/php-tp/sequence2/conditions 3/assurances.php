<?php
$s = readline("Saisir un Sexe (m/f) : ");
$h = readline("Saisir un âge (décimal) :  ");

if ($h >= 22&& $s="m"  ) {
    echo "les hommes payent la supprime";

}elseif(($h>=20 && $h<=30)&&($s="f")) {
    echo "les femmes  payent  la supprime";
}else{
    echo"Vous ne payer pas de surprime";
}


