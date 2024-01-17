<?php

/**
 * @var PDO $connexion
 */

require "config/db-config.php";



$requete = $connexion->prepare("SELECT count(*) as nbEtudiants FROM etudiants");
$requete->execute();
$resultats = $requete ->fetchColumn();
echo "Il y'en a $resultats";


