<?php

echo "                    Jeu de la devinette !\n";
echo "Le but du jeu est de deviner un nombre entre 1 et 100.\n";
echo "Vous disposez de 10 à 15 essais pour trouver le nombre correct.\n\n";

while (true) {
    echo "1. Jouer\n";
    echo "2. Voir les résultats\n";
    echo "3. Voir les résultats d'un jour\n";
    echo "4. Voir les résultats d'un joueur\n";
    echo "5. Quittere\n";

    $menu = readline("Votre choix (1, 2, 3, 4, 5) : ");

    if ($menu == 1) {
        echo "\nLe jeu commence !\n";
        $pseudo = readline("Entrez votre nom de joueur : ");

        $nombre = rand(1, 100);
        $nombretentative = rand(10, 15);
        $tentativeuser = 0;

        while ($nombretentative > 0) {
            $nombreuser = readline("\nSaisissez un nombre entre 1 et 100 : ");

            while ($nombreuser > 100 || $nombreuser < 1) {
                echo "Le nombre saisi n'est pas entre 1 et 100.\n";
                $nombreuser = readline("Saisissez un nombre entre 1 et 100 : ");
            }

            if ($nombreuser < $nombre) {
                echo "Saisissez un nombre plus grand !\n";
                $nombretentative--;
                $tentativeuser++;
                echo "Il vous reste $nombretentative tentatives pour réussir à trouver le chiffre.\n";
            } elseif ($nombreuser > $nombre) {
                echo "Saisissez un nombre plus petit !\n";
                $nombretentative--;
                $tentativeuser++;
                echo "Il vous reste $nombretentative tentatives pour réussir à trouver le chiffre.\n";
            } else {
                echo "Bravo $pseudo, vous avez trouvé le nombre !\n";
                echo "Vous l'avez trouvé en $tentativeuser tentatives.\n";

                $resultat = date('d/m/Y à H:i:s') . " - Pseudo: $pseudo - Résultat: ";
                $resultat .= $tentativeuser <= 10 ? "Excellent ! Vous l'avez trouvé en $tentativeuser tentatives !" : "Bien joué ! Vous l'avez trouvé en $tentativeuser tentatives.";

                $fichierResultats = fopen("resultats.txt", "a+");
                //fwrite($fichierResultats, $resultat . "\n"); ne marche pas
                //fclose($fichierResultats);
                break;
            }
        }

        if ($nombretentative == 0) {
            echo "\nVous avez épuisé toutes vos tentatives, $pseudo !\n";
        }
    } elseif ($menu == 2) {
        echo "\nVoici les résultats :\n";
        $fichierResultats = fopen("resultats.txt", "r");
        while (!feof($fichierResultats)) {
            echo fgets($fichierResultats);
        }
        fclose($fichierResultats);
        echo PHP_EOL;
    } elseif ($menu == 3) {
        echo "\nVoici les résultats du jour :\n";
        $date = readline("Entrez la date au format JJ/MM/AAAA : ");
        $fichierResultats = fopen("resultats.txt", "r");
        while (!feof($fichierResultats)) {
            $ligne = fgets($fichierResultats);
            if (strpos($ligne, $date) !== false) {
                echo $ligne;
            }
        }
        fclose($fichierResultats);
        echo PHP_EOL;
    } elseif ($menu == 4) {
        echo "Voir les résultats pour un joueur spécifique :\n";
        $pseudoRecherché = readline("Entrez le nom du joueur : ");
        echo PHP_EOL;
        $fichierResultats = fopen("resultats.txt", "r");
        while (!feof($fichierResultats)) {
            $ligne = fgets($fichierResultats);
            if (strpos($ligne, "Pseudo: $pseudoRecherché") !== false) {
                echo $ligne;
            }
        }
        fclose($fichierResultats);
        echo PHP_EOL;
    } else {
    }
}
