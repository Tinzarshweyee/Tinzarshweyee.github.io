<?php
include 'admin/connection.php';
$sql = $db->prepare("SELECT * FROM user_tbl");
$sql->execute();
    $email = $_POST["Email"];
    $pass = hash('sha256', $_POST["Password"]);
    while($row=$sql->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        if($email != $user_email || $pass != $password) {
            header("location:login.php");
        }
        else {
            header("location: home.php");
        }
    }
?>