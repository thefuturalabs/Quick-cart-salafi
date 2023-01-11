<?php

include 'connection.php';
$id = $_POST['id'];

$sql = mysqli_query($con, "SELECT * FROM customers where login_id = '$id'");
$list = array();

if ($sql->num_rows>0) {
    while ($row = mysqli_fetch_assoc($sql)){

  

    $myarray['message'] = 'viewed';

    $myarray['name'] = $row['name'];

    $myarray['email'] = $row['email'];

    $myarray['mobile'] = $row['mobile'];

    $myarray['place'] = $row['place'];

   

    array_push($list, $myarray);
  
}
}
 else {

  $myarray['message'] = 'Failed';
  array_push($list, $myarray);
}
echo json_encode($list);
