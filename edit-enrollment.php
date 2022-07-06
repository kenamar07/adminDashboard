<?php
    require_once('logics/connection.php');

    $queryStudent = mysqli_query($conn, "SELECT * FROM enrollment WHERE id=''".$_GET['no']."")
    while ($fetchStudent = mysqli_fetch_array($queryStudent))
    {
        $fullName = $fetchStudent['firstname'];
    }
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
                            <h4>Edit student <?php echo $fullName ?><h4>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>

	<?php require_once('includes/scripts.php') ?>
</body>
</html>