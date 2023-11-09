<?php
echo "Aujourd'hui, Nous le " . date("d/m/Y");
echo PHP_EOL;
echo "il est " . date("H\hi");
if (date('D')=="Sat"){
    echo "je vous souhaite un bon weekend";
    } elseif (date('D')=="Sun"){
    echo "je vous souhaite un bon dimanche";
    }  else {
    echo "je vous souhaite une bonne semaine";
}