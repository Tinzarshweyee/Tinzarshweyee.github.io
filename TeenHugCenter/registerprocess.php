<?php 
    include 'admin/connection.php';
    $name=$_POST['UserName'];
    $email=$_POST['Email'];
    $password=hash('sha256', $_POST['Password']);

    $sql="INSERT INTO user_tbl(user_name, user_email, password) VALUES (?,?,?)";
    $sq=$db->prepare($sql);

    if($sq->execute(array($name, $email, $password))) {
        header('location: home.php');
    }
?>