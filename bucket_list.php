<?php

$a = readline("Hoeveel activiteiten wil je toevoegen? ");

if (is_numeric($a)) {
    $lijst = array();
} else {
    exit($a . " is geen getal, probeer het opnieuw ");
}

for ($i=0; $i < $a; $i++) { 
    $c = readline("Wat wil je toevoegen aan jouw bucket list? ");
    array_push($lijst,$c);
}

echo ("Op jouw bucket list staat " . PHP_EOL);

foreach ($lijst as $b) {
    echo ($b) . PHP_EOL;
}
?>