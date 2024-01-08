<?php

/********************************************************************
 * Ce fichier PHP contient la liste des fonctions permettant de
 * simuler les requêtes dans la base de données
 *******************************************************************/

/* Requête R1
 * Récupérer les articles actifs (articles à afficher)
 * On souhaite récupérer l'id, le titre, le contenu et la date de création de chaque article
*/
function rechercherArticlesActifs(array $tableArticle) : array {
    $resultats = [];

    foreach ($tableArticle as $id => $article){
        if($article["actif"]){

            $resultats[] = [
                "id" => $id,
                "titre" => $article["titre"],
                "contenu" => $article["contenu"],
                "date_creation" => $article["date_creation"]
            ];
        }
    }
    return $resultats;
}



/* Requête R2
 * Récupérer les articles d'une catégorie donnée
 * On souhaite récupérer l'id, le titre, le contenu et la date de création de chaque article
*/
// PLACER ICI VOTRE FONCTION
function rechercherArticlesParCategorie(array $tableArticle, int $idCategorie) : array {
    $resultats = [];

    foreach ($tableArticle as $id => $article){
        if($article["id_categorie"] === $idCategorie){

            $resultats[] = [
                "id" => $id,
                "titre" => $article["titre"],
                "contenu" => $article["contenu"],
                "date_creation" => $article["date_creation"]
            ];
        }
    }
    return $resultats;
}

/* Requête R3
 * Récupérer l'ensemble des articles
 * On souhaite récupérer l'id, le titre, le contenu, la date de création et le nom de la catégorie de chaque article
*/
// PLACER ICI VOTRE FONCTION
function recupererTousLesArticles(array $tableArticle, array $tableCategories) : array {
    $resultats = [];

    foreach ($tableArticle as $id => $article){
        $categorie = $tableCategories[$article["id_categorie"]]["libelle"];

        $resultats[] = [
            "id" => $id,
            "titre" => $article["titre"],
            "contenu" => $article["contenu"],
            "date_creation" => $article["date_creation"],
            "categorie" => $categorie
        ];
    }
    return $resultats;
}

/* Requête R4
 * Récupérer les articles dont la date de création est supérieure à une date donnée
 * On souhaite récupérer l'id, le titre, le contenu, la date de création, le prénom et le nom de l'auteur de
 * chaque article
*/
// PLACER ICI VOTRE FONCTION
function rechercherArticlesParDate(array $tableArticle, array $tableAuteurs, string $dateLimite) : array {
    $resultats = [];

    foreach ($tableArticle as $id => $article){
        if(strtotime($article["date_creation"]) > strtotime($dateLimite)){
            $auteur = $tableAuteurs[$article["id_auteur"]];

            $resultats[] = [
                "id" => $id,
                "titre" => $article["titre"],
                "contenu" => $article["contenu"],
                "date_creation" => $article["date_creation"],
                "prenom_auteur" => $auteur["prenom"],
                "nom_auteur" => $auteur["nom"]
            ];
        }
    }
    return $resultats;
}