<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Teen Hug Electronic Center</title>
    <style>
        img{
            margin-top: -20px;
        }
        #searchbar {
            margin-left: 50px;
            margin-top: 10px;
            width: 300px;
            height: 30px;
        }
    </style>
</head>
<body>
    <div class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="image/7.png" height="60px" width="150px"></a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a href="home.php" class="nav-link">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">PRODUCT</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">ABOUT</a>
                </li>
                <li>
                    <form method="post" action="searchprocess.php">
                        <input id="searchbar" type="text" name="searching" placeholder="Enter You Want To Search">
                        <input type="submit" name="search" value="Search" style="margin-left: -2px; height: 30px;">
                    </form>
                </li>
            </ul>
        </div>

        <div>
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a href="login.php" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="register.php" class="nav-link">Register</a>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>