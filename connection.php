<?php
session_start();
$conn = mysqli_connect("localhost","root","mysql","aaa");
	$msg = '';
if(!$conn)
{
	echo "Database connection faild...";
}
?>