<?php
require_once('logics/connection.php');

$sqlFetchEnrolledStudents = mysqli_query($conn, "SELECT* FROM enrollment WHERE no='".$_GET['id']."'");

while($fetchStudent = mysqli_fetch_array($sqlFetchEnrolledStudents))
{
    $fullName = $fetchStudent['fullname'];
    $email = $fetchStudent['email'];
    $phone = $fetchStudent['phonenumber'];
    $gender = $fetchStudent['gender'];
    $course = $fetchStudent['course'];
    $enrolledOn = $fetchStudent['created_at'];
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
                                <li class="list-group-item">Full Name: <span class = "float-right badge bg-primary"><?php echo $fullName ?></span></li>
                                <li class="list-group-item">Email: <span class = "float-right badge bg-secondary"><?php echo $email ?></span></li>
                                <li class="list-group-item">Phone Number: <span class = "float-right badge bg-danger"><?php echo $phone ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header text-center bg-dark text-light">
                            <h4 class="card-title">Other Information<h4>
                        </div>
                        <div class="card-body">
                        <ul class="list-group">
                                <li class="list-group-item">Gender: <span class = "float-right badge bg-primary"><?php echo $gender ?></span></li>
                                <li class="list-group-item">Course: <span class = "float-right badge bg-secondary"><?php echo $course ?></span></li>
                                <li class="list-group-item">Enrolled on: <span class = "float-right badge bg-danger"><?php echo $enrolledOn ?></span></li>
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