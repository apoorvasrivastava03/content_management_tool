<?php
    include('auth.php');
    include_once('link.php');
    include_once('header1.php');



    ?>
<html>
	<head>
		<title>Content Management Tool</title>
	</head>
	<body>
		<body background = "img/back.png">
		<div id="account">
		<div class="col-lg-6 col-sm-6">
			<div class="card hovercard"> 
				<div class="useravatar">
					<img alt="" src="img/user.svg" height="100">
				</div>
					<div class="card-info"> <span class="card-title"> <h5>Welcome</h5><?php echo $fetch_user['fname']." ".$fetch_user['lname']; ?></span>
				</div>
			</div>
		</div>
		</div> 
		<br><br>
	</body>
</html>	
	<?php
		include_once('add_product.php');
    ?>    
