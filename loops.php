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
?>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($group_of_sudents as $student) { ?>
            <tr>
                <td><?php echo $student['id']; ?></td>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['email']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>