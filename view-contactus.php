<?php
require_once('logics/connection.php');

$sqlFetchContactusStudents = mysqli_query($conn, "SELECT* FROM contactus WHERE no='".$_GET['id']."'");

while($fetchStudent = mysqli_fetch_array($sqlFetchContactusStudents))
{
    $firstName = $fetchStudent['firstname'];
    $lastName = $fetchStudent['lastname'];
    $email = $fetchStudent['email'];
    $phone = $fetchStudent['phonenumber'];
    $message = $fetchStudent['message'];
    $created_at = $fetchStudent['created_at'];
}
?>
<DOCTYPE html>
<html>
<?php require_once('includes/header.php') ?>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php') ?>

	<?php require_once('includes/sidebar.php') ?>
	<div class="main-content">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header text-center bg-dark text-light">
                            <h4 class="card-title">Personal Information<h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">First Name: <span class = "float-right badge bg-primary"><?php echo $firstName ?></span></li>
                                <li class="list-group-item">Last Name: <span class = "float-right badge bg-secondary"><?php echo $lastName ?></span></li>
                                <li class="list-group-item">E-mail: <span class = "float-right badge bg-danger"><?php echo $email ?></span></li>
                                <li class="list-group-item">Phone Number: <span class = "float-right badge bg-info"><?php echo $phone ?></span></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header text-center bg-dark text-light">
                            <h4 class="card-title">Message<h4>
                        </div>
                        <div class="card-body">
                        <ul class="list-group">
                                <li class="list-group-item">Messsage: <span class = "float-right badge bg-success"><?php echo $message ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>

	<?php require_once('includes/scripts.php') ?>
</body>
</html>