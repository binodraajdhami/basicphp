<?php

// database connection
$connection  = new mysqli('localhost', 'root', '', 'college_newsportal');

// fetch datas
$datas = $connection->query("SELECT * from tbl_result");

$result = [];
while ($row = $datas->fetch_array()) {
    array_push($result, $row);
}

if (isset($_POST['btnsubmit'])) {

    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $error_name = "Name field is required!";
    }

    if (isset($_POST['english']) && !empty($_POST['english'])) {
        if (is_numeric($_POST['english'])) {

            if ($_POST['english'] <= 100) {
                $english = $_POST['english'];
            } else {
                $error_english = "Please enter number less than 100";
            }
        } else {
            $error_english = "Please enter numeric number";
        }
    } else {
        $error_english = "English field is required!";
    }

    if (isset($_POST['nepali']) && !empty($_POST['nepali'])) {
        $nepali = $_POST['nepali'];
    } else {
        $error_nepali = "Nepali field is required!";
    }

    if (isset($_POST['science']) && !empty($_POST['science'])) {
        $science = $_POST['science'];
    } else {
        $error_science = "Science field is required!";
    }

    if (isset($_POST['math']) && !empty($_POST['math'])) {
        $math = $_POST['math'];
    } else {
        $error_math = "Math field is required!";
    }

    // calcsulate result
    if (
        isset($name) &&
        isset($english) &&
        isset($nepali) &&
        isset($science) &&
        isset($math)
    ) {
        $total = $english + $nepali + $math + $science;
        $percentage = ($total / 400) * 100;

        // caluculate remarks
        if (
            $english > 40 &&
            $nepali > 40 &&
            $science > 40 &&
            $math > 40
        ) {
            $remarks = "Pass";

            // calculate grade
            if ($percentage >= 80) {
                $grade = "Disticntion";
            }

            if ($percentage < 80 && $percentage >= 60) {
                $grade = "First";
            }

            if ($percentage < 60 && $percentage >= 50) {
                $grade = "Second";
            }

            if ($percentage < 50 && $percentage >= 40) {
                $grade = "Third";
            }
        } else {
            $remarks = "Failed";
            $grade = "No";
        }

        if (isset($name) && $english && $nepali && $math && $science && $math && $total && $percentage && $grade && $remarks) {

            $sql = "INSERT INTO tbl_result 
            (name,engish,nepali,math,science,total,percentage,grade,remarks) 
            values('$name',$english,$nepali,$math,$science,$total,$percentage,'$grade','$remarks')";

            $connection->query($sql);
        }
    }


    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Calculation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Result Calculation</h1>

        <form action="" method="POST">
            <label>Student Name</label>
            <input type="text" name="name" class="form-control">
            <?php if (isset($error_name)) {
                echo $error_name;
            } ?>
            <br>
            <label>English</label>
            <input type="text" name="english" class="form-control">
            <?php if (isset($error_english)) {
                echo $error_english;
            } ?>
            <br>
            <label>Nepali</label>
            <input type="text" name="nepali" class="form-control">
            <?php if (isset($error_nepali)) {
                echo $error_nepali;
            } ?>
            <br>
            <label>Math</label>
            <input type="text" name="math" class="form-control">
            <?php if (isset($error_math)) {
                echo $error_math;
            } ?>
            <br>
            <label>Science</label>
            <input type="text" name="science" class="form-control">
            <?php if (isset($error_science)) {
                echo $error_science;
            } ?>
            <br>
            <button type="submit" name="btnsubmit" class="btn btn-success">Calulate</button>
        </form>

        <br>
        <br>

        <!-- show data in table -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>English</th>
                    <th>Nepali</th>
                    <th>Math</th>
                    <th>Science</th>
                    <th>Total</th>
                    <th>Percentage</th>
                    <th>Grade</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $student) { ?>
                    <tr>
                        <td><?php echo $student['id']; ?></td>
                        <td><?php echo $student['name']; ?></td>
                        <td><?php echo $student['engish']; ?></td>
                        <td><?php echo $student['nepali']; ?></td>
                        <td><?php echo $student['math']; ?></td>
                        <td><?php echo $student['science']; ?></td>
                        <td><?php echo $student['total']; ?></td>
                        <td><?php echo $student['percentage']; ?></td>
                        <td><?php echo $student['grade']; ?></td>
                        <td><?php echo $student['remarks']; ?></td>
                    </tr>
                <?php   } ?>

            </tbody>
        </table>

    </div>
</body>

</html>