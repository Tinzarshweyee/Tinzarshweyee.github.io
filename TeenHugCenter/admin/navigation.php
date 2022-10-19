<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Admin Side</title>
    <style>
        div {
            padding: 10px;
            border-bottom: 5px solid black;
        }
    </style>
</head>
<body>
    <div>
        <h2 class="alert alert-primary"><center>Teen Hug Admin Side</center></h2>
        <a href="item.php" class="btn btn-primary">ITEM</a>
        <a href="booking.php" class="btn btn-primary">BOOKING</a>
        <a href="feedback.php" class="btn btn-primary">CONTACT</a>
    </div>
</body>
</html>