<?php
include('connection.php');
if(isset($_SESSION['s.no'])){
    $sel_user = "SELECT * FROM user_form WHERE `s.no` = '".$_SESSION['s.no']."'";
    $qry_user = mysqli_query($conn, $sel_user);
    $fetch_user = mysqli_fetch_assoc($qry_user);
    if(!$fetch_user){
        header('location:login.php');
    }
}
else{
    header('location:login.php');
}