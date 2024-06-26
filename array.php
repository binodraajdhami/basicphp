<h1>Array</h1>
<h2>Types of Array</h2>
<ul>
    <li>Numeric Array (Indexed Array)</li>
    <li>Associative Array</li>
    <li>Multidimensional Array</li>
</ul>

<h3>Numeric Array (Indexed Array)</h3>
<?php
$fruits = ['Mango', 'Apple', 'Lichi'];
$vegetables = array('Patato', 'Tamato', 'Cowliflower');
echo "<h1>" . $fruits[1] . "</h1>";
echo "<br>";
echo $vegetables[1];
?>

<h3>Associative Array</h3>
<?php
$student = [
    "id" => "10A",
    "name" => "Ram KC",
    "email" => "ramkc@gmail.com",
    "phone" => 9800000000,
    "address" => "Kathmandu",
    "gender" => "Male",
    "role" => 10
];
echo $student['email'];
?>

<h3>Multidimensional Array</h3>
<p>Multidimensional Numeric Array</p>
<?php
$meals = [
    ['mango', 'apple', 'banana', 'lichi'],
    ['patato', 'carrot', 'cabbiage'],
    ['fish', 'muton', 'pork', 'chiken'],
];

echo $meals[1][0];
echo "<br>";
echo $meals[0][3];
?>

<p>Multidimensional Associative Array</p>
<?php
$students = [
    [
        "id" => "A01",
        "name" => "Ram KC",
        "email" => "ramck@gmail.com",
        "phone" => 985555
    ],
    [
        "id" => "A02",
        "name" => "Sita Thapa",
        "email" => "sitathapa@gmail.com",
        "phone" => 9801111
    ]
];

echo $students[0]['phone'];

?>