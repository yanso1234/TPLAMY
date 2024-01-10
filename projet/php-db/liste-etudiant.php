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
$requeteSQL = "SELECT * FROM etudiant";
$requete = $connexion->prepare($requeteSQL);
//Execution de la requête : envoie de la requête au SGBD
$requete->execute();
//envoie SELECT * FROM etudiant au SGBD
//Récupération des enregistrement
//Comment récupérer les enregistrements
$requete->setFetchMode(PDO::FETCH_ASSOC);
//Récupérer les enregistrements sous la forme demandée (tableau associatif)
$resultats = $requete ->fetchAll();







//Affichage des étudiants
foreach ($resultats as $resultat) {
//$resultat : un enregistrement
    echo $resultat["id_etudiant"] . "".
         $resultat["prenom_etudiant"] . "".
         $resultat["nom_etudiant"] . "".
         $resultat["email_etudiant"] . PHP_EOL;

}

