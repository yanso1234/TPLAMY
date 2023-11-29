<?php
// Ce fichier va contenir l'ensemble des fonctions du projet
function estPair(int $nb) : bool{

    return $nb % 2 == 0;
}
function creerIdentifie(string $prenomn, string $nom ) : string
{ return ucfirst(strtolower($prenomn))
    . ''
    . ucfirst(strtolower($nom));
}
function incrementer (int& $nb) : int {
    $nb +=1;
    return $nb;
}