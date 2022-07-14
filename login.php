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
            Zalego Training | Admin Login
        </nav>
    </div>
		<div class="container p-5 text-center">
			<img src="images/zalego1.png" alt="zalego" height="100" width="100" class="rounded-circle">
		</div>
	<div class="container">
        <form action="register.php" method="POST">
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>   
            <button type="submit" name="loginButton" class="btn btn-primary">Submit</button>
            <p>Have no account? Sign up Here</p>
        </form>
    </div>
    

















<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>