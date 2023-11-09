<?php
$note = readline("Saisir une note (q pour arrêter) : ");
$maxTentatives = rand(0,3);

    while ($maxTentatives > 0) {
        $note = readline("\n Saisissez un nombre entre 0 et 20 : ");

        while ($note > 20 || $note < 0) {
            echo "Le nombre saisi n'est pas entre 0 et 20.\n";
            $note = readline("Saisissez un nombre entre 0 et 20 : ");}}





