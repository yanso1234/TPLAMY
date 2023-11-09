<?php
$note = readline("Saisir une note  : ");
while ($note >20 || $note<0){
    echo "la note doit etre comprise entre 0 et 20 ";
        $note = readline("Saisir une nouvelle note : ");

}
echo " la note est correcte ";