<?php
$emails = [
    "Bouvet" => "yanisbouvet@free.fr",
    "Monnot" => "monnot@gmail.com",
    "Loberst" => "loberst@laposte.net",
];
foreach ($emails as $étudiant => $email) {
    echo "$étudiant : $email";
    echo PHP_EOL;
}
