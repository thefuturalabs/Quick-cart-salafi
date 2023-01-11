<?php
include 'connection.php';
$req = $_GET['id'];
mysqli_query($con,"UPDATE request SET status = '2' where req_id = '$req'");
mysqli_query($con,"insert into history(req_id)values($req)");
header("location:request.php");
?>