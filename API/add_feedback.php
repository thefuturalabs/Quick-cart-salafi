<?php

include 'connection.php';
$id = $_POST['id'];
$feedback = $_POST['feedback'];

$sql = mysqli_query($con, "INSERT INTO feedback(customer_id,feedback)values('$id','$feedback')");

if ($sql) {

  

    $myarray['message'] = 'Added';

  
} else {

  $myarray['message'] = 'Failed';
}
echo json_encode($myarray);
