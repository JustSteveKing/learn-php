<?php

// Echo out the message directly
echo 'Hello World!';







// Create a variable to store our message
$message = 'Hello World!';

// Echo out the variable instead.
echo $message;






// Create a new variable
$name = 'Steve McDougall';

// Echo Hello followed by name, the braces aren't required but give you a visual point to remember it is a variable
echo "Hello {$name}";

// Alternatively you can concatinate (add to) the message using your variable.
echo 'Hello, ' . $name;






// Variables can store various pieces of data
$age = 32;
$yearOfBirth = 1988;
$houseNumber = 24;





// With variables, it makes performing logic easier
$firstName = 'Steve';
$lastName = 'McDougall';

$fullName = "{$firstName} {$lastName}";
echo $fullName;
