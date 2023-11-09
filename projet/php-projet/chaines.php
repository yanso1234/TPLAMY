<?php
$prenom="yanis\n";
//afficher le contenu de la variable $prenom en MAJUSCULES
echo strtoupper($prenom);
echo strlen($prenom);
echo "\n";
echo strtoupper($prenom) . "a une longeur de " . strlen($prenom);
echo strtoupper($prenom[1]);
//echo strtoupper(substr($prenom,0,1));
//marche aussi 