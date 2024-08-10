<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
    include "include/navbar.php";
    ?>
    <div class="container">
       <h1>Please fill this form</h1>
   
<form mathod="post" action="save.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Roll number</label>
    <input type="text" class="form-control" name="roln"  aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Full name</label>
  <input type="text" class="form-control" name="nm"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">City</label>
  <input type="text" class="form-control" name="ct"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Fees</label>
  <input type="text" class="form-control" name="fs" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> 
</div>
<?php
    include "include/footer.php";
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>