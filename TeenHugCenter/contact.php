<?php 
    include 'navigation.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            overflow-x: hidden;
        }
    </style>
</head>
<body>
<div>
    <div>
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.951330844932!2d96.15213691453911!3d16.77909682447992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec821e07a833%3A0xdde741e3cd511209!2sJunction%20City!5e0!3m2!1sen!2smm!4v1653733163648!5m2!1sen!2smm" width="98%" height="380" style="border:1; margin-left: 10px; margin-top: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div>
            <form action="commentupload.php" method="post">
                <label for="Name">Name:</label> <br>
                <input type="text" placeholder="Enter your name" class="form-control" name="name"> <br>
                <label for="Name">Phone:</label> <br>
                <input type="text" placeholder="Enter your phone" class="form-control" name="phone"> <br>
                <label for="Name">Email:</label> <br>
                <input type="text" placeholder="Enter your mail" class="form-control" name="email"> <br>
                <label for="Name">Feedback:</label> <br>
                <textarea class="form-control" rows="5" name="feedback"></textarea>
                <br>
                <input type="submit" value="Submit" class="btn btn-success">
                <input type="reset" value="Cancel" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>
</body>
</html>