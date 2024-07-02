<?php

if (isset($_POST['btnsubmit'])) {

    if (isset($_POST['book_name']) && !empty($_POST['book_name'])) {
        $book_name = $_POST['book_name'];
    } else {
        $error_book_name = "Book name field is required!";
    }

    if (isset($_POST['category']) && !empty($_POST['category'])) {
        $category = $_POST['category'];
    } else {
        $error_category = "Category field is required!";
    }

    if (isset($_POST['author_name']) && !empty($_POST['author_name'])) {
        $author_name = $_POST['author_name'];
    } else {
        $error_author_name = "Author name field is required!";
    }

    if (isset($_POST['price']) && !empty($_POST['price'])) {
        $price = $_POST['price'];
    } else {
        $error_price = "Price field is required!";
    }

    if (isset($_POST['created_by']) && !empty($_POST['created_by'])) {
        $created_by = $_POST['created_by'];
    } else {
        $error_created_by = "Created By field is required!";
    }

    $status = $_POST['status'];

    if (
        isset($book_name) &&
        isset($category) &&
        isset($author_name) &&
        isset($price) &&
        isset($status) &&
        isset($created_by)
    ) {
        // database connetion
        $connection  = new mysqli('localhost', 'root', '', 'college_newsportal');

        // query for insert data
        $sql = "INSERT INTO tbl_library
                (book_name,category,author_name,price,status,created_by)
                VALUES('$book_name','$category','$author_name',$price,$status,'$created_by')";

        // execute query
        $connection->query($sql);
    }

    // test purpose only
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <section class="form-section">
        <div class="container">
            <h1>
                Library Management
                <a href="book_list.php" class="btn btn-primary">Book List</a>
            </h1>
            <form method="POST">
                <div class="form-group">
                    <label for="book_name">Book Name</label>
                    <input type="text" id="book_name" name="book_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" id="category" name="category" class="form-control">
                </div>
                <div class="form-group">
                    <label for="author_name">Author Name</label>
                    <input type="text" id="author_name" name="author_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" min="1" id="price" name="price" class="form-control">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <label>
                        <input type="radio" name="status" value="1" checked> Yes
                    </label>
                    <label>
                        <input type="radio" name="status" value="0"> No
                    </label>
                </div>
                <div class="form-group">
                    <label for="created_by">Created By</label>
                    <input type="text" id="created_by" name="created_by" class="form-control">
                </div>
                <button type="submit" name="btnsubmit" class="btn btn-success">Create Book</button>
            </form>
        </div>
    </section>
</body>

</html>