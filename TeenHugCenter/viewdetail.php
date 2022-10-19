<?php 
    include 'admin/connection.php';
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
    <?php 
        $id=$_POST['id'];
        $sql = $db->prepare("SELECT * FROM item_tbl WHERE itemid='$id'");
        $sql->execute();
        while($row=$sql->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
        ?>
        <div class="col-sm-4" align="center" style="margin-top: 50px;">
            <form action="orderform.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $itemid; ?>">
                <img src="admin/images/<?php echo $photo;?>" width="200" height="150">
                <h5><b>Name: </b><?php echo $name;?></h5>
                <h5><b>Price: </b><?php echo $price;?></h5>
                <input type="hidden" name="price" value="<?php echo $price; ?>">
                <h5><b>Description: </b><?php echo $description;?></h5>
                <h5><b>Quantity: </b></h5> <input type="text" name="qty"> <br>
                <input type="submit" name="order" class="btn btn-primary" value="Order Now">
            </form>
        </div>
    <?php } ?>
</body>
</html>