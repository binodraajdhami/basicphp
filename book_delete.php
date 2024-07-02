<?php
$book_id = $_GET['id'];

// database connetion
$connection  = new mysqli('localhost', 'root', '', 'college_newsportal');

// query for fetch data
$sql = "DELETE from tbl_library where id=$book_id";

// execute query
$connection->query($sql);

header("location:book_list.php");
