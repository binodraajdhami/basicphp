<h1>Function</h1>
<p>Function is a reuseable block of code which perform specific task!</p>
<ul>
    <li>Name Function</li>
    <li>Anonymous Function</li>
</ul>

<h2>Name Function</h2>
<?php

// simple function
function sayHello()
{
    echo "Hello Ram";
}

// sayHello();
echo "<br>";

// function with paremeter
function sayHelloWithName($name, $place)
{
    echo "Hello " . $name . " Welcome to : " . $place;
    echo "<br>";
}

sayHelloWithName('Ram', 'College');
sayHelloWithName('Hari', 'Cafe');
sayHelloWithName('Sita', 'Beautiparler');

// return type function
function sum_of_two_number($num1, $num2)
{
    return $num1 + $num2;
}

echo sum_of_two_number(5, 8);
echo "<br>";

?>

<h2>Anonymous Function</h2>
<p>()() : IIFE</p>
<?php

(function ($email) {
    echo "I am anonymous function : " . $email;
})('ram@gmail.com');

echo '<br>';

$contact = 98888;
// nasted function
function greeting()
{
    // closer function
    function welcome()
    {
        echo "Hello";
    }
    return welcome();
}

greeting()();






?>