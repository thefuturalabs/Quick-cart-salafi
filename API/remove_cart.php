<?php
include 'connection.php';
$cus_id = $_POST['cus_id'];
$method = $_POST['method'];
$data = mysqli_query($con,"select * from request where cus_id = '$cus_id'");
$req = mysqli_fetch_assoc($data);
$r_id = $req['req_id'];
mysqli_query($con,"insert into history(req_id,method)values('$r_id','$method')");
$sql = mysqli_query($con,"delete from request where cus_id = '$cus_id'");
if($sql){
    $myarray['result']='removed';
}
else{
    $myarray['result']='failed';
}
echo json_encode($myarray);
?>