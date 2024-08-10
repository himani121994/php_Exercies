<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php include "include/navbar.php"; ?>

    <div class="container mt-5">
        <h1>Please fill this form</h1>

        <?php
        // Handle form submission
        if (isset($_POST["submit"])) {
            // Get form data
            $rollnumber = $_POST["roln"];
            $name = $_POST["nm"];
            $city = $_POST["ct"];
            $fees = $_POST["fs"];

            // Database connection
            $con = new mysqli("localhost", "root", "", "curd");

            // Check connection
            if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            }

            // Insert query
            $sql = "INSERT INTO student (roll_number, student_name, student_city, student_fees) 
                    VALUES ('$rollnumber', '$name', '$city', '$fees')";

            if ($con->query($sql) === TRUE) {
                echo "<div class='alert alert-success'>Record saved successfully!</div>";
            } else {
                echo "<div class='alert alert-danger'>Error: " . $con->error . "</div>";
            }

            // Close the connection
            $con->close();

            echo "<script>alert('Data saved successfully!');</script>";
        }
        ?>

        <!-- Form -->
        <form method="POST" action="">
            <div class="mb-3">
                <label for="rollNumber" class="form-label">Roll number</label>
                <input type="text" class="form-control" name="roln" id="rollNumber" required>
            </div>
            <div class="mb-3">
                <label for="fullName" class="form-label">Full name</label>
                <input type="text" class="form-control" name="nm" id="fullName" required>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" name="ct" id="city" required>
            </div>
            <div class="mb-3">
                <label for="fees" class="form-label">Fees</label>
                <input type="text" class="form-control" name="fs" id="fees" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

    <?php include "include/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
