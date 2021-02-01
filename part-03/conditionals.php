<?php

// Conditionals are simple checks within your script to know what needs to be done or what has been done

// This is a simple light array, which lets us know if the light is turned on at all.
$light = [
    'power' => false,
    // 'power' => true,
];

// Pretend we are the electric company, we want to charge our users when they have their lights turned on.
// $bill = 0;
// if ($light['power']) {
//     $bill += 100;
// }

// echo $bill;

// Most electric companies in the UK charge a standing charge. Let's implement this logic in our script
$bill = 0;
if ($light['power']) {
    $bill += 100;
} else {
    $bill += 10;
}

// echo $bill;

// Conditionals provide a great way to let our script know what to do next.
$modes = [
    'off',
    'standby',
    'on',
];
$radio = [
    'power' => false,
    // 'power' => true,
    'mode' => $modes[0],
    'playing' => false
];

// Currently our radio is off at the wall
// Let's turn our radio on at the wall
$radio['power'] = true;

if($radio['power']) {
    // When we turn the radio on at the wall it enters standby mode.
    $radio['mode'] = $modes[1];
}

// Our radio is on at the wall in standby mode, so let us turn in on to play music
$radio['mode'] = $modes[2];
if($radio['mode'] === 'on') {
    // Now we have turned our radio on to play, we can switch the playing to true.
    $radio['playing'] = true;
}

var_dump($radio);
