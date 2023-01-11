<?php
include 'connection.php';
$req = $_GET['id'];
mysqli_query($con,"UPDATE request SET status = '1' where req_id = '$req'");
header("location:request.php");
?>