<?php
require_once('logics/connection.php');
require_once('logics/process-add.php');
?>
<!DOCTYPE html>
<html>
<?php require_once('includes/header.php') ?>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php') ?>
	<?php require_once('includes/sidebar.php') ?>
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>
					<div class="card-body">
                <form action="add-student.php" method="POST">
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="fullname" class="form-label"><b>Full Name</b></label>
                            <input type="text" name="fullname" class="form-control" placeholder="Enter your full name" >
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="phonenumber" class="form-label"><b>Phone Number</b></label>
                            <input type="text" name="phonenumber" class="form-control" placeholder="+2547......" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="email" class="form-label"><b>Email Address</b></label>
                            <input type="text" name="email" class="form-control" placeholder="Please enter your email" >
                        </div>
                        
                        <div class="mb-3 col-lg-6">
                            <label for="gender" class="form-control"><b>What's your gender?</b></label>
                            <select class="form-select form-select-lg mb-3 col-lg-6" arial label="" name="gender">
                                <option selected></option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                        <p>
                            In order to complete your information to the bootcamp, you are required to select one course you will be undertaking. Please NOTE that this will be your learning track during the 2-week immersion.
                        </p>    
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="course" class="form-control"><b>What's your preferred course?</b></label>
                                    <select class="form-select form-select-lg mb-3 col-lg-6" arial label="" name="course">
                                        <option selected></option>
                                        <option value="python">Python</option>
                                        <option value="android">Android</option>
                                    </select>
                            </div>
                        </div> 
                    <p>
                        You agree by providing your information you understand all our data privacy and protection policy outlined in our terms & conditions and the Privacy Policy statements.
                    </p>
                    <br> 
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" >
                        <label class="form-check-label"><b>Agree Terms and Conditions</b></label>
                    </div>
                    <br>
                    <br>
                    <div class="col-lg-6"> 
                        <button type="submit" name="submitButton" class="btn btn-primary">Add Student</button>
                    </div>
                </form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php require_once('includes/scripts.php') ?>
</body>
</html>