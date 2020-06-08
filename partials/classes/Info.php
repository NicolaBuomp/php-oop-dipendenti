<?php

include_once __DIR__ . '/Manager.php';

$Dipendenti = [
    ['Nicola', 'Buompane', rand(0, 100), 'Capo', rand(1500, 1900)],
    ['Paolo', 'Duzioni', rand(0, 100), 'Vice Capo', rand(1200, 1500)],
    ['Marco', 'Madeddu', rand(0, 100), 'Dipendente semplice', rand(1000, 1200)]
];

$inventoryDip = [];

foreach($Dipendenti as $Dipendente) {
    $inventoryDip[] = new Manager(...$Dipendente);
}