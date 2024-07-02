<?php
$book_id = $_GET['id'];

// database connetion
$connection  = new mysqli('localhost', 'root', '', 'college_newsportal');

// query for fetch data
$sql = "SELECT * from tbl_library where id=$book_id";

// execute query
$result = $connection->query($sql);

$data = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <section class="container book-details">
        <h1>Book Details</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td><?php echo $data['id']; ?></td>
            </tr>
            <tr>
                <th>Book Name</th>
                <td><?php echo $data['book_name']; ?></td>
            </tr>
            <tr>
                <th>Category</th>
                <td><?php echo $data['category']; ?></td>
            </tr>
            <tr>
                <th>Author Name</th>
                <td><?php echo $data['author_name']; ?></td>
            </tr>
        </table>
        <a href="book_edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success">Edit Book</a>
    </section>
</body>

</html>