<?php
    $message = '';
    require_once('logics/connection.php');

    $queryContact = mysqli_query($conn, "SELECT * FROM contactus WHERE no='".$_GET['id']."'");
    while ($fetchContact = mysqli_fetch_array($queryContact))
    {
        $id = $fetchContact['no'];
        $firstName = $fetchContact['firstname'];
        $lastName = $fetchContact['lastname'];
        $email = $fetchContact['email'];
        $phone = $fetchContact['phonenumber'];
        $message = $fetchContact['message'];
        $created_at = $fetchContact['created_at'];
    }

    //updating user records
    require_once('logics/process-update.php');
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
                    <div class="card ">
                        <div class="card-header bg-dark text-white text-center">
                            <h4>Edit Contact <?php echo $firstName ?><h4>
                                <?php echo $message ?>
                        </div>
                        <div class="card-body">
                <form action="edit-contactus.php?id=<?php echo $id ?>" method="POST">
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="firstname" class="form-label"><b>First Name</b></label>
                            <input type="text" name="firstname" class="form-control" placeholder="Enter your first name" value="<?php echo $firstName?>">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="lastname" class="form-label"><b>Last Name</b></label>
                            <input type="text" name="lastname" class="form-control" placeholder="Enter your last name" value="<?php echo $lastName?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="email" class="form-label"><b>Email Address</b></label>
                            <input type="text" name="email" class="form-control" placeholder="Please enter your email" value="<?php echo $email?>">
                        </div>
                        
                        <div class="mb-3 col-lg-6">
                            <label for="phonenumber" class="form-label"><b>Phone Number</b></label>
                            <input type="text" name="phonenumber" class="form-control" placeholder="Please enter your phone number" value="<?php echo $phone?>">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="message" class="form-label"><b>Message</b></label>
                            <input type="text" name="message" class="form-control" placeholder="" value="<?php echo $message?>">
                        </div>
                    </div>
                    
                    <br>
                    <br>
                    <div class="col-lg-6"> 
                        <button type="submit" name="updateContactus" class="btn btn-primary">Update Records</button>
                        
                    </div>
            </form>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>

	<?php require_once('includes/scripts.php') ?>
</body>
</html>