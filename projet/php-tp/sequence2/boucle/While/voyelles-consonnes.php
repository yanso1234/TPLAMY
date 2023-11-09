<?php
$phrase = readline("Saisir une phrase : ");
$tab = array('a', 'e', 'i', 'o', 'u', 'y');
$tot = 0;
foreach($tab as $voyelle){
    $tot += substr_count(($phrase),$voyelle);
}
echo $tot.' voyelles';
?>