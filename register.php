<?php
$msg='';
require_once('processRegister,php')
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Your name">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<div class="header navbar text-center text-white bg-maroon">
        <nav>
            Zalego | Admin Register
        </nav>
    </div>
		<div class="container p-5 text-center">
			<img src="images/zalego1.png" alt="zalego" height="100" width="100" class="mix-auto d-block rounded-circle">
                <span><?php echo $msg ?></span>
		</div>
	<div class="container">
        <form action="register.php" method="POST" class="form-group" autocomplete="of">
            <div class="justify-content-center align-items-center"></div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <div class="form-group">
                                <label for="username" class="form-group">Username:</label>
                                <input type="text" name="username" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <div class="form-group">
                                <label for="email" class="form-group">Email:</label>
                                <input type="text" name="email" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <div class="form-group">
                                <label for="password" class="form-group">Password:</label>
                                <input type="text" name="password" id="password" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <div class="form-group">
                            <label for="confirmpassword" class="form-group">Confirm password:</label>
                            <input type="text" name="confirmpassword"  id="confirmpassword" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <br> 
            <div class="form-group">  
            <input type="submit" name="signUp" class="btn btn-primary btn-sm">Submit</button>
            </div>
            <p>Have no account? Sign up Here</p>
        </form>
    </div>
    

















<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>