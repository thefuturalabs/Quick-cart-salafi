<?php
include 'connection.php';
$id = $_GET['id'];

mysqli_query($con,"UPDATE supermarket SET status='1' WHERE login_id='$id'");
mysqli_query($con,"UPDATE login SET status='1' WHERE login_id='$id'");
header('location:approve_shop.php');
?>