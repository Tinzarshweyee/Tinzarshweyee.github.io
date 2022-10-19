<?php 
    include 'connection.php';
    $id = $_POST['id'];
    $name= $_POST['name'];
    $ctg = $_POST['ctg'];
    $price = $_POST['price'];
    $des = $_POST['des'];

    $oldimg = $_POST['oldimg'];
    $newimg = $_FILES['newimg']['name'];

    if($newimg != "") {
        $updatephoto = $newimg;
        move_uploaded_file($_FILES['newimg']['tmp_name'], "images/".$newimg);
    }
    else {
        $updatephoto=$oldimg;
    }

    $sql=$db->prepare("UPDATE item_tbl SET itemid='$id', name='$name', category='$ctg',
                        price='$price', description='$des', photo='$updatephoto'
                        WHERE itemid='$id'");
    $sql->execute();
    header('location: item.php');
?>