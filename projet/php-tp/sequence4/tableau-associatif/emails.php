<?php
$emails = [
    "Bouvet" => "yanisbouvet@free.fr",
    "Monnot" => "monnot@gmail.com",
    "Loberst" => "loberst@laposte.net",
];
$utilisateurs = readline("Saisir un nom de domaine : ");
foreach ($emails as $étudiant => $email) {
    $nomded=explode("@",$email,2);
    if ($nomded[1]== $utilisateurs)
    echo "$étudiant : $email";
}




