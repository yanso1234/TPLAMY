<?php
$contacts = [
    "Grégoire0" => "+33 8 65 23 18 15",
    "Grégoire1" => "+33 9 89 56 42 98",
    "Grégoire2" => "+33 6 55 99 55 99 ",
];
$nomRecherche = readline("Saisir un nom à rechercher : ");
if (array_key_exists($nomRecherche, $contacts)) {
    $numeroTelephone = $contacts[$nomRecherche];
    echo "Le numéro de téléphone de $nomRecherche est : $numeroTelephone\n";
} else {
    echo "Le nom suivant :  $nomRecherche , n'a pas été trouvé.\n";
}

?>

