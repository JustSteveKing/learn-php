<?php

// An array is basically a way to collect things under one variable.
$empty = [];

// var_dump($empty);

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
    // echo $name;
}

// Arrays can get a little more complex, by using what is called an associative array -> meaning that the values you store have keys to reference them by

// Notice this simple array you don't quite understand what the values mean?
$person = [
    32, // what is this
    'Green', // what is this too?
];

$person = [
    'age' => 32,
    'hair' => 'none',
    'beard' => true
];

// echo $person['age'];

// You can add a new value easily
$person['name'] = 'Steve';

// You can also update a value easily
$person['age'] = 33;

// Removing an item is simple too
unset($person['hair']);

// var_dump($person);

// You can even start embedding arrays in arrays to start building up something a little more complex
$tasks = [
    [
        'title' => 'Learn HTML',
        'complete' => true
    ],
    [
        'title' => 'Learn PHP',
        'complete' => false
    ],
    [
        'title' => 'Build Website',
        'complete' => false
    ],
];

var_dump($tasks);
