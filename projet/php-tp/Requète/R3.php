<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";

/*
 * Test requête R3
*/
$resultatsR3 = recupererTousLesArticles($tableArticles, $tableCategories);
print_r($resultatsR3);