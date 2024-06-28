<?php

class Student
{
    var $id, $name, $email, $roll_no, $phone, $gender, $addrss, $status;

    function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    function sayHello($book_name)
    {
        echo "Hello World";
        echo "<br>";
    }
}

$ram = new Student(1001, "Ram Thapa");

echo "<pre>";
print_r($ram);
echo "</pre>";

$hari = new Student(1002, "Hari KC");

echo "<pre>";
print_r($hari);
echo "</pre>";
