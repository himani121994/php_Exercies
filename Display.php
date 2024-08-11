<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php include "include/navbar.php"; ?>

    <div class="container mt-5">
        <h1>Display Student Table</h1>

        <?php
        // Connect to the database
        $con = new mysqli("localhost", "root", "", "curd");

        // Check connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        // Query to select all records from the student table
        $sql = "SELECT * FROM student";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th scope="col">#</th>';
            echo '<th scope="col">Roll Number</th>';
            echo '<th scope="col">Name</th>';
            echo '<th scope="col">City</th>';
            echo '<th scope="col">Fees</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<th scope="row">' . $row["id"] . '</th>';
                echo '<td>' . $row["roll_number"] . '</td>';
                echo '<td>' . $row["student_name"] . '</td>';
                echo '<td>' . $row["student_city"] . '</td>';
                echo '<td>' . $row["student_fees"] . '</td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
        } else {
            echo "<p>No records found.</p>";
        }

        // Close the database connection
        $con->close();
        ?>
    </div>

    <?php include "include/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" cros
