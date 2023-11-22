<?php
$produits = [
"Yaourt" => 3,
"Frigo" => 260,
"Bière" => 5,
"Sopalin" => 2,
];

foreach ($produits as $produit) {
echo "l'ensemble est : ". "$produit ";
}
echo PHP_EOL;
$produitss = array_sum($produits);
echo "le prix total des produits est : ". $produitss . " euros ";

