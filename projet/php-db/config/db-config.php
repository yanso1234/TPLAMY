<?php

//Définir les information de connexion
const DB_HOST = "localhost:3306";
const DB_NAME = "db_intro";
const DB_USER = "root";
const DB_PASSWORD = "";

//Connexion à la base de donnée
$connexion =  new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);
echo "Connexion OK".PHP_EOL;


