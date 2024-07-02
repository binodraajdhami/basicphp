<?php
// database connetion
$connection  = new mysqli('localhost', 'root', '', 'college_newsportal');

// query for fetch data
$sql = "SELECT * from tbl_library";

// execute query
$result = $connection->query($sql);

$book_list = [];

while ($data = $result->fetch_assoc()) {
    array_push($book_list, $data);
}

// test purpose only
// echo "<pre>";
// print_r($book_list);
// echo "</pre>";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <section class="book-list">
        <div class="container">
            <h1>
                Book List
                <a href="book_create.php" class="btn btn-success">Create Book</a>
            </h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Book Name</th>
                        <th>Category</th>
                        <th>Author Name</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Created By</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($book_list as $book) { ?>
                        <tr>
                            <td><?php echo $book['id']; ?></td>
                            <td><?php echo $book['book_name']; ?></td>
                            <td><?php echo $book['category']; ?></td>
                            <td><?php echo $book['author_name']; ?></td>
                            <td><?php echo $book['price']; ?></td>
                            <td><?php echo $book['status']; ?></td>
                            <td><?php echo $book['updated_by']; ?></td>
                            <td><?php echo $book['updated_at']; ?></td>
                            <td><?php echo $book['created_by']; ?></td>
                            <td><?php echo $book['create_at']; ?></td>
                            <td>
                                <a href="book_edit.php?id=<?php echo $book['id']; ?>" class="btn btn-success">Edit</a>
                                <a href="book_show.php?id=<?php echo $book['id']; ?>" class="btn btn-primary">Show</a>
                                <a href="book_delete.php?id=<?php echo $book['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>