<?php

$note = readline("Saisir une note (q pour arrêter) : ");
$maxTentatives = 5;

while ($maxTentatives > 0) {
$note = readline("\n Saisissez un nombre entre 0 et 20 : ");

while ($note > 20 || $note < 0) {
echo "Le nombre saisi n'est pas entre 0 et 20.\n"; }

$note = readline("Saisir  un nombre entre 0 et 20 : ");
$note++
