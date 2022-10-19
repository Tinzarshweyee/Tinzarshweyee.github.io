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
            <form action="orderconfirm.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $itemid; ?>">
                <h5><b>Name: </b></h5><input type="text" value="<?php echo $name?>" name="itemname"> <br>
                <h5><b>Price: </b></h5><input type="text" value="<?php echo $price?>" name="itemprice"> <br>
                <h5><b>Qty: </b></h5><input type="text" value="<?php echo $_POST['qty']?>" name="itemprice"> <br>
                <h5><b>Customer Name: </b></h5> <input type="text" name="cusname"> <br>
                <h5><b>Customer Email: </b></h5> <input type="text" name="cusemail"> <br>
                <h5><b>Total Amount: </b></h5><input type="text" name="total" value="<?php echo $_POST['price'] * $_POST['qty']; ?>"><br>
                <input type="submit" name="order" class="btn btn-primary" value="Order Confirm">
            </form>
        </div>
    <?php } ?>
</body>
</html>