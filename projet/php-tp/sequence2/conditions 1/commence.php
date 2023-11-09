<?php
//demander la saisie d'un mot et afficher si le mot commence par la lettre p
$mot = readline("Saisir un mot  : ");
$mot = strtolower($mot);
if (str_starts_with($mot,'p')) {
    echo "le mot $mot commence par la lettre p ";
} else {
    echo"le mot $mot ne commence pas par la lettre p";
}
if (strlen($mot)>=5) {
   echo "le $mot comptient au moins de 5 caractères ";
} else {
   echo "le $mot comptient moins de 5 caractèress";

}
