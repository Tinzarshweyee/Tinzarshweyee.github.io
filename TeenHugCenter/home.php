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
    <div class="container" style="margin-top: -20px;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 1270px; margin-left: -80px;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" >
                <div class="item active">
                    <img src="image/JCGVOpenNowImage.jpg" alt="#" style="width:100%;">
                </div>

                <div class="item">
                    <img src="image/JCGVProhibitedItemsImage.jpg" alt="#" style="width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <h3 class="alert alert-info" style="margin-top: -5px; margin-bottom: -10px;"><b><center>POPULAR PRODUCTS</center></b></h3>
    <?php 
        include 'admin/connection.php';
        $sql=$db->prepare("SELECT * FROM item_tbl");
        $sql->execute();
        while($row=$sql->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
        ?>
        <div class="col-sm-4" align="center" style="margin-top: 50px;">
            <form action="viewdetail.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $itemid; ?>">
                <img src="admin/images/<?php echo $photo;?>" width="200" height="150">
                <h5><b>Name: </b><?php echo $name;?></h5>
                <h5><b>Price: </b><?php echo $price;?></h5>
                <a href="viewdetail.php"><input type="submit" name="viewdetail" class="btn btn-primary" value="View Detail"></a>
            </form>
        </div>
    <?php } ?>
</body>
</html>