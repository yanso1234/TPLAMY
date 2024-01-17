<?php
/**
 * @var PDO $connexion
 */
require "config/db-config.php";

//Preparation de la requête
$requeteSQL = "SELECT prenom_etudiant, nom_etudiant FROM etudiants ORDER BY nom_etudiant";
$requete = $connexion->prepare($requeteSQL);
//Execution de la requête : envoie de la requête au SGBD
$requete->execute();
//envoie SELECT * FROM etudiant au SGBD
//Récupération des enregistrement
//Comment récupérer les enregistrements
//$requete->setFetchMode(PDO::FETCH_ASSOC); // gagner une ligne de code grâce à la commande ci-dessous
//Récupérer les enregistrements sous la forme demandée (tableau associatif)
$resultats = $requete ->fetchAll(PDO::FETCH_ASSOC);






//Affichage des étudiants
foreach ($resultats as $resultat) {
//$resultat : un enregistrement
    echo $resultat["prenom_etudiant"] . "".
         $resultat["nom_etudiant"] . PHP_EOL;

}

