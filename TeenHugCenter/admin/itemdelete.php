<?php 
    include 'connection.php';
    $did=$_GET['did'];

    $sql=$db->prepare("DELETE FROM item_tbl WHERE itemid='$did'");
    $sql->execute();

    header('location: item.php');
?>