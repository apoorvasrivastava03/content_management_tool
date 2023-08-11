<?php
require_once('connection.php');
include_once('link.php');

if(isset($_POST['full_name'])){

    $sql= ' insert into product_details (user_id, full_name, roll_no, mobile_no, email, admission_no, admission_date) 
    values ("'.$_SESSION['s.no'].'", "' .$_POST['full_name'].'", "' .$_POST['roll_no'].'","' .$_POST['mobile_no'].'","'.$_POST['email'].'","'.$_POST['adm_no'].'", "'.$_POST['adm_date'].'")';
    mysqli_query($conn, $sql);
	if(mysqli_error($conn)){ 
		echo 'Error # 1 : '.mysqli_error($conn).'>> '.$sql;
	}
	else{
		header('location:account.php');
	}
}
?>

<html>
	<head>
		<title>Content Management Tool</title>
	</head>
	<body>
		<div class="card-deck">
			<div class="card">
				<div class="card-header ">
					<h4 class="card-title">New Admission</h4>
				</div>	
				<div class="card-body">		
					<div class="card-text">
						<form id="form" action="add_product.php" method="post" enctype="multipart/form-data">
							<div class="card mx-auto" style="width: 35rem;">
								<div class="card-body">
									<div>				
										<div class="row" >
											<div class="col">
												<div class="form-group">
													<label >Full Name</label>
													<input type="text" class="form-control"id="full_name" name="full_name" placeholder="full Name"requeired>
												</div>
											</div>
											<div class="col">
												<div class="form-group">
													<label >Roll no.:</label>
													<input type="text" class="form-control" id="roll_no" name="roll_no" placeholder="Roll no.:">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label > Mobile no.:</label>
											<input type="text" class="form-control" id="mobile_no" name="mobile_no"  placeholder="Mobile no.">
										</div>
										<div class="row" >
											<div class="col">
												<div class="form-group">
													<label >Email:</label>
													<input type="text" class="form-control"id="email" name="email" placeholder="Enter Email"requeired>
												</div>
											</div>
											<div class="col">
												<div class="form-group">
													<label >Admission no:</label>
													<input type="text" class="form-control" id="admission_no" name="adm_no" placeholder="Admission no.">
												</div>
											</div>
										</div>
										<div class="form-group ">
											<label >Admission Date</label>
											<input type="date" class="form-control" id="admission_date" name="adm_date"  placeholder="Admission Date">
										</div>
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>	
			<div class="card" >
				<div class="card-header ">
					<h4 class="card-title">Admission List</h4>
				</div>
				<div class="card-body">	
					<div class="card-text">
						<div class="card-body table-full-width table-responsive">

								<?php

							$result = mysqli_query($conn,"SELECT * FROM product_details WHERE `user_id` = '".$_SESSION['s.no']."'");
							?>
							<?php
							if (mysqli_num_rows($result) > 0) {
							?>
							<table class='table table-bordered table-striped'>
							<tr>
								<th>S.No.</th>
								<th>Full Name </th>
								<th>Roll no.</th>
								<th>Mobile no.</th>
								<th>Email </th>
								<th>Admission.no</th>
								<th>Admission Date</th>
							</tr>
							<?php
							$i=0;
							while($row = mysqli_fetch_array($result)) {
							?>
								<tr>
									<td><?php echo $row["s.no"]; ?></td>
									<td><?php echo $row["full_name"]; ?></td>
									<td><?php echo $row["roll_no"]; ?></td>
									<td><?php echo $row["mobile_no"]; ?></td>
									<td><?php echo $row["email"]; ?></td>
									<td><?php echo $row["admission_no"]; ?></td><td><?php echo $row["admission_date"]; ?></td>
								</tr>
							<?php
							$i++;
							}
							?>
							</table>
							<?php
							}
							else{
							echo "No result found";
							}
							?>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</body>
</html>	