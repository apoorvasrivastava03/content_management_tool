
<?php
include_once('link.php');
$email = $_SESSION['email'];

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="index.php">Content Management Tool</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" class="">
      <li class="nav-item active">
        <a class="nav-link" href="account.php">Account <span class="sr-only">(current)</span></a>
      </li>
	    <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
     
    </ul>
  </div>

  <!--<div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="logout.php" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown link
  </a>-->

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
</nav>
<br><br>


