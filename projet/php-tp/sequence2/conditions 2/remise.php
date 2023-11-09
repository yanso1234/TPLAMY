<?php
$prix = readline("saisir le prix de l'article : ");
if ($prix < 1000 ) {
    $remise = $prix*0.05;
    echo "la remise est de 5% soit $remise euros sur le prix de l'article";
    echo " le prix aprés remises est de $prix";
}elseif ($prix ==1000 && 5000 ) {
    $remise = $prix * 0.1;
    echo "la remise est de 10% soit la $remise euros sur le prix de l'article";
    echo " le prix aprés remises est de $prix";
}else{
$remise= $prix * 0.2;
    echo "la remise est de 20% soit la $remise euros sur le prix";
    echo " le prix aprés remises est de $prix";



}
