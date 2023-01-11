<?php

include 'connection.php';

$id = $_POST['id'];
$sql = mysqli_query($con, "SELECT * FROM product where cat_id='$id'");
$list = array();

if ($sql->num_rows > 0) {

    while ($row = mysqli_fetch_assoc($sql)) {

        $myarray['id'] = $row['product_id'];
        $myarray['product'] = $row['product'];
        $myarray['sid'] = $row['shop_id'];
        $myarray['image'] = $row['image'];
        
        
        
   


        array_push($list, $myarray);
    }
} else {



    $myarray['message'] = 'failed';
    array_push($list, $myarray);
}
echo json_encode($list);