<?php
require 'tp-fonctions.php';
$temp_celsius = [30, 25, 14, 18, 25, 69];
$temp_farheint = array_map('convertirCelsiusFahrenheit', $temp_celsius);
echo "Temperatures en Fahrenheit ";
PHP_EOL;
foreach ($temp_farheint as $temp) {
    echo $temp . " °F\n";
}
