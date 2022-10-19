<?php 
    include 'navigation.php';
    include 'connection.php';
    $sql=$db->prepare("SELECT * FROM item_tbl");
    $sql->execute();
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- View Data -->
<h2 class="alert alert-danger"><center>View Data For Item</center></h2>
<table class="table table-dark table-striped">
    <tr>
        <th>Item Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Description</th>
        <th>Photo</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php
        while($row=$sql->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
        ?>
        <tr>
            <td><?php echo $name?></td>
            <td><?php echo $category?></td>
            <td><?php echo $price?></td>
            <td><?php echo $description?></td>
            <td><img src="images/<?php echo $photo?>" width="100" height="100"></td>
            <td><a href="itemedit.php?eid=<?php echo $itemid?>" class="btn btn-success">Update</a></td>
            <td><a href="itemdelete.php?did=<?php echo $itemid?>" class="btn btn-danger">Delete</a></td>
        </tr>
    <?php } ?>
</table>

<!-- Add Data -->
<h2 class="alert alert-danger"><center>Add Data To student_tbl</center></h2>
<form method="POST" enctype="multipart/form-data">
    <label for="name" class="form-label">Item Name </label>
    <input type="text" name="itemname" class="form-control">
    <label for="category" class="form-label">Category </label>
    <input type="text" name="category" class="form-control">
    <label for="price" class="form-label">Price </label>
    <input type="text" name="price" class="form-control">
    <label for="descrption" class="form-label">Description </label><br>
    <textarea name="description" class="form-control"></textarea>
    <label for="photo" class="form-label">Choose Photo </label>
    <input type="file" name="photo" class="form-control">
    <br>
    <input type="submit" name="submit" value="Submit" class="btn btn-success">
</form>
<?php 
    include 'connection.php';
    if(isset($_POST['submit'])) {
        //file upload
        $error=array();
        $filename=$_FILES['photo']['name'];
        $filetype=$_FILES['photo']['type'];
        $filetemp=$_FILES['photo']['tmp_name'];
        $filesize=$_FILES['photo']['size'];

        $file_ext=explode("/", $filetype);
        $filex=strtolower(end($file_ext));

        $extension=array("jpeg", "jpg", "png", "jfif", "gif");

        if(in_array($filex, $extension)==FALSE) {
            $error[]="Extension is invalid";
        }
        elseif ($filesize>2097152) {
            $error[]="File Size is Large";
        }
        elseif (empty($error)==TRUE) {
            move_uploaded_file($filetemp,"images/".$filename);
        }
        else print_r($error);

        try{
            $sql="INSERT INTO item_tbl(name, category, price, description, photo) VALUES (?,?,?,?,?)";
            $sq=$db->prepare($sql);
    
            $name=$_POST['itemname'];
            $ctg=$_POST['category'];
            $price=$_POST['price'];
            $des=$_POST['description'];
            $pto=$filename;
    
            if($sq->execute(array($name, $ctg, $price, $des, $pto))) {
                header ('location: item.php');
            }
        } catch(Exception $e) {
            echo $e->getMessage;
        }
    }
?>