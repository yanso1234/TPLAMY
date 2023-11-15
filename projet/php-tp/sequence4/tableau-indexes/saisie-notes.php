<?php

$note = readline("Saisir une notre entre 0 et 20 (q pour arrêter) : ");
$notes = array();
$max = 0;




while ($max <=20) {
if ($note >= 0 && $note <=20) {
    readline("saisir une note entre 0 et 20 (q pour arrêter) : ");
    array_push($notes, $note);
    $max ++;
}
else {
    readline("veuillez re saisir la note : ");
}$max ++;
}

foreach ($notes as $note){
    echo   $note . " ";
}

echo "vous avez saisis " . count($notes) . " notes ! ";







