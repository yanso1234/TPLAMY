<?php
$email = readline("Saisir une adresse e-mail  : ");
if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
    echo "l'adresse $email est valide";
 
} else {
    echo "l'adresse $email est pas valide";

}