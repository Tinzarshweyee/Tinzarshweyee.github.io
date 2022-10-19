<?php 
    include "navigation.php";
    include "admin/connection.php";
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
</head>
<body>
<div class="content" style="margin-top: 50px;">
	<div class="wrap">
		<div class="content-top" style="min-height:300px;padding:50px">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
				    <div class="panel-heading">Register</div>
				    <div class="panel-body">
				        <p class="login-box-msg">Register for an account</p>
				        <form action="registerprocess.php" method="post">
                            <div class="form-group has-feedback">
                                <input name="UserName" type="text" size="25" placeholder="Username" class="form-control"/>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input name="Email" type="text" size="25" placeholder="Email" class="form-control" placeholder="Email"/>
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input name="Password" type="password" size="25" placeholder="Password" class="form-control" placeholder="Password" />
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="Register">Register</button>
                                <p class="login-box-msg" style="padding-top:20px">Already Have An Account? <a href="login.php">Login</a></p>
                            </div>
                    </div>
                </div>
                        </form>
			</div>
		</div>
		<div class="clear"></div>		
	</div>
    <div style="margin-top: -150px;"></div>
    <?php include('footer.php');?>
</div>
</body>
</html>
