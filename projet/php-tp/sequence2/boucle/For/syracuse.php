<?php
$somme = readline("nombres : ");
for($n=1;$n<=20;$n++){
    if ($somme%2 ==0){
        $somme = $somme/2;
    }else{
        $somme = $somme*3 +1;
    }
echo $somme.' ';
}



