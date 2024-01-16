<?php
const DB_HOST = "localhost:3306";
const DB_NAME = "db_intro";
const DB_USER = "root";
const DB_PASSWORD = "";

$connexion =  new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);
echo "Connexion OK".PHP_EOL;

$requeteSQL = "SELECT * FROM articlee ORDER BY nom_article";
$requete = $connexion->prepare($requeteSQL);
$requete->execute();
$requete->setFetchMode(PDO::FETCH_ASSOC);
$resultats = $requete ->fetchAll();

foreach ($resultats as $resultat) {
//$resultat : un enregistrement
    echo $resultat["id_article"] . "".
        $resultat["nom_article"] . "".
        $resultat["prix_article"] . "".
        $resultat["stock_article"] . PHP_EOL;

}