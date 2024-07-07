<?php
$book_id = $_GET['id'];

// database connetion
$connection  = new mysqli('localhost', 'root', '', 'college_newsportal');

// query for fetch data
$fetch_sql = "SELECT * from tbl_library where id=$book_id";

// execute query
$result = $connection->query($fetch_sql);

// fetch single data
$book_data = $result->fetch_assoc();

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

    if (isset($_POST['updated_by']) && !empty($_POST['updated_by'])) {
        $updated_by = $_POST['updated_by'];
    } else {
        $error_updated_by = "Updated By field is required!";
    }

    $status = $_POST['status'];

    print_r($status);
    print_r($updated_by);

    if (
        isset($book_name) &&
        isset($category) &&
        isset($author_name) &&
        isset($price) &&
        isset($status) &&
        isset($updated_by)
    ) {

        // query for insert data
        $sql = "UPDATE tbl_library set 
                book_name='$book_name',
                category='$category',
                author_name='$author_name',
                price=$price,
                status=$status,
                updated_by='$updated_by'
                where id=$book_id ";

        // execute query
        $connection->query($sql);

        // redirect to list page
        header("location:book_list.php");
    }
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
                Edit Book
            </h1>
            <form method="POST">
                <div class="form-group">
                    <label for="book_name">Book Name</label>
                    <input type="text" id="book_name" name="book_name" class="form-control" value="<?php echo $book_data['book_name']; ?>">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" id="category" name="category" class="form-control" value="<?php echo $book_data['category']; ?>">
                </div>
                <div class="form-group">
                    <label for="author_name">Author Name</label>
                    <input type="text" id="author_name" name="author_name" class="form-control" value="<?php echo $book_data['author_name']; ?>">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" min="1" id="price" name="price" class="form-control" value="<?php echo $book_data['price']; ?>">
                </div>
                <div class="form-group">
                    <label>Status</label>

                    <?php if ($book_data['status'] == 1) { ?>
                        <label>
                            <input type="radio" name="status" value="1" checked> Yes
                        </label>
                        <label>
                            <input type="radio" name="status" value="0"> No
                        </label>
                    <?php } else { ?>
                        <label>
                            <input type="radio" name="status" value="1"> Yes
                        </label>
                        <label>
                            <input type="radio" name="status" value="0" checked> No
                        </label>
                    <?php } ?>

                </div>
                <div class="form-group">
                    <label for="created_by">Created By</label>
                    <input type="text" id="created_by" name="created_by" class="form-control" value="<?php echo $book_data['created_by']; ?>">
                </div>

                <div class="form-group">
                    <label for="updated_by">Updated By</label>
                    <input type="text" id="updated_by" name="updated_by" class="form-control" value="<?php echo $book_data['updated_by']; ?>">
                </div>

                <button type="submit" name="btnsubmit" class="btn btn-success">Updated Book</button>
            </form>
        </div>
    </section>
</body>

</html>