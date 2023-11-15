<?php

$temp_celsius = [25, 30, 15, 22, 10];

function celsiusToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

$temp_fahrenheit = array_map('celsiusToFahrenheit', $temp_celsius);
echo "Températures en Fahrenheit :\n";
foreach ($temp_fahrenheit as $temp) {
    echo $temp . " °F\n";
}


