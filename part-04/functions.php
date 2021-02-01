<?php declare(strict_types=1);

// PHP has a lot of built in functions. They let you isolate a little bit of logic, and trigger it in your script when you need to.
// // Let us create a simple function to add two values together
// function add($a, $b) {
//     return $a + $b;
// }

// // Let's add 2 and 2 together
// var_dump(add(2, 2));






// PHP is classed as a loosely typed language, meaning we do not have to tell functions what data type we are passing - however we can do
// Let us create a simple function to add two values together
// function add(int $a, int $b) {
//     return $a + $b;
// }

// Let's add 2 and 2 together
// var_dump(add(2, 2));

// Look what happens when we pass the wrong type
// var_dump(add(2, '2'));






// We can even declare what the return type is going to be
function add(int $a, int $b): int {
    return $a + $b;
}

// Let's add 2 and 2 together
var_dump(add(2, 2));
