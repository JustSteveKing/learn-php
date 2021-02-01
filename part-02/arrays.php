<?php

// An array is basically a way to collect things under one variable.
$empty = [];

var_dump($empty);

// Arrays in PHP are very flexible, and can store various different things
$lotteryNumbers = [
    04, 28, 31, 36, 51, 55, 42
];

$names = [
    'Steve',
    'Dan',
    'Amy',
    'Faye',
];

// With arrays we can perform actions on each item.

// lets take our names array, and for each one of them -> do something with the current name we are on.
foreach ($names as $name) {
    echo $name;
}
