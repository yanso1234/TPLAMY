<?php

/**
 * @var PDO $connexion
 */
require "config/db-config.php";

//Demander la saisie d'un étudiant
$IdEtudiant = readline('Saisir un ID étudiant : ');

//Préparer la requête
$requete = $connexion->prepare("SELECT * FROM etudiants WHERE id_etudiant = :id");
//$requete->bindValue(":id",2);
//Exécuter la requête
$requete->execute([
    ":id" => $IdEtudiant

    ]
);

//Récuperer le résultat
$resultats = $requete->fetch(PDO::FETCH_ASSOC);

//Tester si l'enregistrement (etudiant) existe
if ($resultats) {


//Traiter le résultat
print_r ($resultats);

} else {

    echo "Etudiant recherché n'existe pas";

}