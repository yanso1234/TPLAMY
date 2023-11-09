<?php
$tabNotes = array(10, 12, 5, 14, 7, 15, 9.5, 8);
$MeilleurNote=0;
echo "La meilleur ".max($tabNotes);

echo PHP_EOL;

foreach ($tabNotes as $note){
    if ($MeilleurNote<=$note){
        $MeilleurNote=$note;
    }
}
echo "Le meilleur est $MeilleurNote";