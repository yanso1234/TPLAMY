<?php
$emails = [
    "Bouvet" => "yanisbouvet@free.fr",
    "Monnot" => "monnot@gmail.com",
    "Loberst" => "loberst@laposte.net",
];

$utilisateurSaisi = readline("Saisir un nom de domaine : ");

foreach ($emails as $etudiant => $email) {
    $nomDeDomaine = explode("@", $email, 2);
    if ($nomDeDomaine[1] == $utilisateurSaisi) {
        echo "$etudiant : $email\n";
    }
}

?>
