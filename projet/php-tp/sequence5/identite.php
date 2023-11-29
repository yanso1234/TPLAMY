<?php
require 'cours-fonction.php';
//test
$prenomn = readline("Prénom : ");
$nom = readline("Nom : ");
$identite = creerIdentifie($prenomn, $nom);
echo $identite;

