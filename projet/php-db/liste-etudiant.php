<?php
//Définir les information de connexion
const DB_HOST = "localhost:3306";
const DB_NAME = "db_intro";
const DB_USER = "root";
const DB_PASSWORD = "";

//Connexion à la base de donnée
$connexion =  new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);

echo "Connexion OK".PHP_EOL;


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

