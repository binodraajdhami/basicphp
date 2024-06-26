<h1>Loop in PHP</h1>
<p>Types of Loop</p>
<ul>
    <li>while</li>
    <li>for</li>
    <li>foreach</li>
</ul>

<h3>While Loop</h3>
<?php
$i = 1;
while ($i <= 10) {
    echo $i;
    $i++;
}
?>
<h3>For Loop</h3>
<?php
for ($j = 1; $j <= 50; $j++) {
    if (($j % 2) != 0) {
        echo $j;
        echo "<br>";
    }
}
?>

<h3>Foreach</h3>
<?php
$fruits = ['Mango', 'Apple', 'Banana'];


foreach ($fruits as $value) {
    echo $value;
    echo "<br>";
}

echo "===========================";
echo "<br>";

$single_student = [
    "id" => "A01",
    "name" => "Ram",
    "email" => "ram@gmail.com"
];

foreach ($single_student as $key => $value) {
    echo $key . ' : ' . $value;
    echo "<br>";
}


echo "========== Multidimenssion Array ============";
echo "<br>";

$group_of_sudents = [
    [
        "id" => "A01",
        "name" => "Ram",
        "email" => "ram@gmail.com"
    ],
    [
        "id" => "A02",
        "name" => "Sita",
        "email" => "site@gmail.com"
    ],
    [
        "id" => "A03",
        "name" => "Hari",
        "email" => "hair@gmail.com"
    ]
];

// foreach ($group_of_sudents as $stud) {
//     foreach ($stud as $key => $value) {
//         echo $key . ' : ' . $value;
//         echo "<br>";
//     }
// }

foreach ($group_of_sudents as $stud) {
    echo "id" . ' : ' . $stud['id'];
    echo "name" . ' : ' . $stud['name'];
    echo "email" . ' : ' . $stud['email'];
    echo "======================";
    echo "<br>";
}




?>