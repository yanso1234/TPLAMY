<?php

//demande à l'utilisateur de saisir un mots de passe
$nombre = readline("Saisir un mots de passe  : ");
$longeurmdp = strlen($nombre);

if ($longeurmdp >=8 ){
    " le mots de passe est valide ";
}

else {
    echo 'saisir 8 caractères ,  ';

}
if (preg_match('/[A-Z]/',$nombre)) {
    " le mots de passe est valide  ";
}
else {
    echo 'saisir une majuscule   ';

}
if (preg_match('/[a-z]/',$nombre)){
    " le mots de passe est valide ";
}
else {
    echo 'saisir une minuscule ';
}
if (preg_match('/[1-99]/',$nombre)){
echo " le mots de passe est valide !  ";
}
else {
    echo 'saisir un chiffre ';
}
