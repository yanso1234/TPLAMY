<?php
// déclaration et initialisation d'un tableau de notes
$notes = array(10,12,9,13,7,4,8,6,3,5,4,7,5,5,4,1,2); // également $notes =[10,12,9];

// Afficher les notes du tableau
echo $notes[0]; //10
echo $notes[1];
echo $notes[2];

echo PHP_EOL;

//Afficher les élements du tableau avec une boucle for
for($i=0; $i<count($notes); $i++) {
    echo $notes[$i] . "|";
}

echo PHP_EOL;

//Afficher les élements du tableau avec une boucle foreach
foreach ($notes as $note){
    echo $note . "|";
}


echo PHP_EOL;

//Afficher les élements avec leur index avec une boucle for
for($i=0; $i<count($notes); $i++) {
    echo "$i:$notes[$i]" . "|";
}


echo PHP_EOL;

//Afficher les élements avec leur index avec une boucle foreach
foreach ($notes as $index => $note){
    echo "$index:$note" . "|";
}

// Ajouter une seule nouvelle note dans le tableau
$notes []=15;

// Ajouter plusieurs notes dans le tableau
array_push($notes,12.5,4,6,6,9,7,1);
print_r($notes);


//Affichage ce qu'il y'a dans le tableau :
echo PHP_EOL;
print_r($notes);
