<?php

include 'connection.php';
$id = $_POST['id'];
 
$a = mysqli_query($con,"DELETE FROM request where req_id = '$id'");
if($a){
    $array['message']='deleted';
}
else{
    $array['message']='failed';
}
echo json_encode($array);
?>