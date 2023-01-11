<?php

include 'connection.php';
$login_id = $_POST['id'];
$name = $_POST['name'];
$place = $_POST['place'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];


$sql = mysqli_query($con, "UPDATE customers SET name='$name',email='$email',mobile='$mobile',place='$place' where login_id = '$login_id'");



if ($sql) {

  

    $myarray['message'] = 'Added';

    // $myarray['login_id'] = $row['login_id'];

    // $myarray['type'] = $row['type'];
  
} else {

  $myarray['message'] = 'Failed';
}
echo json_encode($myarray);
