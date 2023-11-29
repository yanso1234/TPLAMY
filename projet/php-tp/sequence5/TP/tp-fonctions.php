<?php
function convertirCelsiusFahrenheit (int $celsius): int {
return ($celsius * 9/5) + 32;
}
function genererMotsDepasse(int $longueur) : string {
    $caracteres = 'AZERTYUIOPQSDFGHJKLMWXCVBNazertyuiopqsdfghjklmwxcvbn1234567890!@#$%^&*()'; // Liste de caractères possibles
    $motDePasse = '';
    for ($i = 0; $i < $longueur; $i++) {
        $motDePasse .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    return $motDePasse;}
