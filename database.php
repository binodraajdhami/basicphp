<?php

$connection  = new mysqli('localhost', 'root', '', 'college_newsportal');

// echo "<pre>";
// print_r($connection);
// echo "</pre>";

// insert data
// $connection->query("INSERT INTO tbl_student (name,phone,dob,status) values('Shyam',9888,'2024/06/28',1)");

// delete
// $connection->query("DELETE from tbl_student where id=1");

// udpate
$connection->query("UPDATE tbl_student set name='Ram Bahadur Thapa', phone=999999, dob='2024-02-02' and status=0 where id=3");

// fetch data
$datas = $connection->query("SELECT * FROM tbl_student");

$alldata = [];

while ($result = $datas->fetch_assoc()) {
    array_push($alldata, $result);
}

echo "<pre>";
print_r($alldata);
echo "</pre>";
