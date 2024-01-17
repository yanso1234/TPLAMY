<?php


/**
 * @var PDO $connexion
 */

require "config/db-config.php";

//Afficher le nombre d'étudiants par promotion
//BTS SIO 1 : 2
//BTS SIO 2 : 1


$requete = $connexion->prepare("SELECT nom_promotion, COUNT(*) as nbEtudiants FROM promotion,etudiants WHERE promotion.id_promotion=etudiants.id_promotion GROUP BY nom_promotion;  ");
$requete->execute();
$resultats = $requete ->fetchAll();
print_r($resultats);

PHP_EOL;

foreach ($resultats as $resultat) {
    echo $resultat['nom_promotion'] . " :" . $resultat['nbEtudiants'] . PHP_EOL;
}