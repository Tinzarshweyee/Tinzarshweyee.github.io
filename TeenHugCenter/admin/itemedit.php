<?php 
    include 'connection.php';
    include 'navigation.php';
    $eid=$_GET['eid'];

    $sql=$db->prepare("SELECT * FROM item_tbl WHERE itemid='$eid'");
    $sql->execute();

    $row=$sql->fetch(PDO::FETCH_ASSOC);
    extract($row);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<h2 class="alert alert-danger"><center>Update Data To item_tbl</center></h2>
<form action="editprocess.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $itemid;?>">
    <label for="name">Item Name: </label>
    <input type="text" name="name" class="form-control" value="<?php echo $name;?>">
    <label for="email">Item Category: </label>
    <input type="text" name="ctg" class="form-control" value="<?php echo $category;?>">
    <label for="phone">Item Price: </label>
    <input type="text" name="price" class="form-control" value="<?php echo $price;?>">
    <label for="class">Description: </label>
    <textarea type="text" name="des" class="form-control" rows="8"><?php echo $description;?></textarea> 
    <br><img src="images/<?php echo $photo?>" width="100" height="100"><br>
    <label for="school">Update Photo: </label>
    <input type="file" name="newimg" class="form-control">
    <input type="hidden" name="oldimg" value="<?php echo $photo;?>"> <br>
    <input type="submit" name="submit" value="Update" class="btn btn-success">
</form>