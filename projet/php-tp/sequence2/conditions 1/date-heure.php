<?php
$date = date("d-m-Y");
$heure = date("H:i");
echo"nous somme le $date\n";
echo"il est $heure\n";
if ($heure>13) {
 echo "bonne aprem";
} else {
echo "bonne matinée";
}


