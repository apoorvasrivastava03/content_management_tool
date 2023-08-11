<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');

if(isset($_POST['email'])){
    $sql= ' insert into user_form (fname, lname, email, gender, password) 
    values ("' .$_POST['fname'].'", "' .$_POST['lname'].'","' .$_POST['email'].'","'.$_POST['gender'].'","'.$_POST['password'].'")';
    mysqli_query($conn, $sql);
	if(mysqli_error($conn)){ 
		echo 'Error # 1 : '.mysqli_error($conn).'>> '.$sql;
	}
	else{
		header('location:login.php');
	}
}


?>

<!--
Into this file, we create a layout for registration page.
-->
<?php
include_once('header.php');
include_once('link.php');
?>
<?php echo $msg; ?>
<html>
	<head>
		<title>Content Management Tool</title>
	</head>
	<body>
		<body background = "img/back.png">
		<form id="form" action="registration.php" method="post" enctype="multipart/form-data">
			<div class="card mx-auto" style="width: 35rem;">
			  <h5 class="card-header text-center">user Registration</h5>
				<div class="card-body">
					<div>				
						<div class="row" >
							<div class="col">
								<div class="form-group">
									<label >First Name</label>
									<input type="text" class="form-control"id="fname" name="fname" placeholder="First Name"requeired>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label >Last Name</label>
									<input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label >Email address</label>
							<input type="email" class="form-control" id="email" name="email"  placeholder="Enter email">
						</div>
						<div class="form-group">
							<label>Gender</label>
							<select class="form-control" name="gender" id="gender" >
								<option value="Select District-">--Select--</option>
								<option value="Male">Male</option>
								<option value="Feamle">Feamle</option>
								<option value="Other">Other</option>
							</select>
						</div>
						<div class="form-group ">
							<label >Password</label>
							<input type="password" class="form-control" id="password" name="password"  placeholder="Password">
						</div>
						<button type="submit" class="btn btn-primary ">Submit</button>
					</div>
				</div>
			</div>
		</form>
	</body>
</html>	
