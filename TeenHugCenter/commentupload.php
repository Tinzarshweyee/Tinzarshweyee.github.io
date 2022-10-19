<?php 
    include 'admin/connection.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $feedback=$_POST['feedback'];

    $sql="INSERT INTO comment_tbl(name, email, phone, feedback) VALUES (?,?,?,?)";
    $sq=$db->prepare($sql);

    if($sq->execute(array($name, $email, $phone, $feedback))) {
        header('location: contact.php');
    }
?>