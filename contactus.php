<?php
require_once('logics/connection.php');
$sql = mysqli_query($conn, "SELECT * FROM contactus");
?>
<!DOCTYPE html>
<html>
<?php  
require_once('includes/header.php');
$querymessage = mysqli_query($conn, "SELECT *FROM contactus");
?>
<body>
    <?php
    require_once('includes/navbar.php');
    require_once('includes/sidebar.php');
    ?>
    <div class="main-content">
		<div class="container-fluid">
			<div class="row">
				
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Contact Us</span>
					</div>
					<div class="card-body">
						<table class="table table-striped table-hover table-dark" style = "font-size:12px;">
							<thead>
								<tr>
                                    <th scope="col">No</th>
									<th scope="col">First Name</th>
									<th scope="col">Last Name</th>
									<th scope="col">email</th>
									<th scope="col">Phone Number</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">created_at</th>
									
								</tr>
							</thead>
							<tbody>
								<?php $count = 1; while($fetchContactRecords = mysqli_fetch_array($querymessage)) {?>
									<tr>
										<th scope ="row"><?php echo $count; ?> </th>
										<td><?php echo $fetchContactRecords['firstname']; ?></td>
										<td><?php echo $fetchContactRecords['lastname']; ?></td>
										<td><?php echo $fetchContactRecords['email']; ?></td>
                                        <td><?php echo $fetchContactRecords['phonenumber']; ?></td>
                                        <td><?php echo $fetchContactRecords['message']; ?></td>
                                        <td><?php echo $fetchContactRecords['created_at']; ?></td>
										<td>
											<a href="edit-contactus.php?id=<?php echo $fetchContactRecords['no']?>  " class="btn btn-primary btn-sm">
												<i class="fa fa-edit"></i>
											</a>
											<a href="view-contactus.php?id=<?php echo $fetchContactRecords['no']?>" class="btn btn-info btn-sm">
												<i class="fa fa-eye"></i>
											</a>
											<a href="delete-contactus.php?id=<?php echo $fetchcontactRecords['no']?>" class="btn btn-danger btn-sm">
												<i class="fa fa-trash"></i>
											</a>
										</td>
									</tr>
								<?php $count++; } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
        <?php  require_once('includes/scripts.php')?>
</body>
</html>