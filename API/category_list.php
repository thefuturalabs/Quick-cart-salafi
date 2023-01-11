<?php

include 'connection.php';

$id = $_POST['id'];
$sql = mysqli_query($con, "SELECT * FROM category where shop_id='$id'");
$list = array();

if ($sql->num_rows > 0) {

    while ($row = mysqli_fetch_assoc($sql)) {

        $myarray['id'] = $row['dept_id'];
        $myarray['category'] = $row['category'];
   


        array_push($list, $myarray);
    }
} else {



    $myarray['message'] = 'failed';
    array_push($list, $myarray);
}
echo json_encode($list);