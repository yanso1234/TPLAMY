<?php
//demande à l'utilisateur de saisir un mots de passe
$nombre = readline("Saisir un mots de passe  : ");
$longeurmdp = strlen($nombre);
$majuscule = ctype_upper($nombre);
$no_lettre = 0;
$c1 = 0;
$c2 = 0;
$c3 = 0;
$c4 = 0;

//au moins 8 caractéres

if ($longeurmdp >=8 ) {
    $c1 ++;
}

while ($longeurmdp!=$no_lettre){
    $s=substr($nombre,$no_lettre,1);
    if (ctype_upper($s)) {
        $c2 ++;
    }elseif (ctype_lower($s)){
        $c3 ++;
    }elseif (is_numeric($s)){
        $c4 ++;
    }
    $no_lettre ++;
}

echo "C1 $c1 C2 $c2 C3 $c3 C4 $c4\n ";

if ($c1 and $c2 and $c3 and $c4) {
    echo "le mots de passe est valide";}
    else {
        echo "le mots de passe est invalide";
}
