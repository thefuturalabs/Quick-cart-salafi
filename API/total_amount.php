<?php

include 'connection.php';
$id = $_POST['id'];
// $pro_id = $_POST['pro_id'];


$sql = mysqli_query($con, "SELECT * FROM request join product on product.product_id = request.product_id where cus_id = '$id'");
$list = array();

if ($sql->num_rows>0) {
    while ($row = mysqli_fetch_assoc($sql)){

  

    $myarray['message'] = 'Added';

    $myarray['product'] = $row['product'];

    $myarray['quandity'] = $row['quandity'];

    $myarray['price'] = $row['price'];
    $myarray['value'] = $row['val'];

    $price = $row['price'];
    $quandity = $row['quandity'];


    $myarray['total'] = $price*$quandity;

    array_push($list, $myarray);
  
}
}
 else {

  $myarray['message'] = 'Failed';
  array_push($list, $myarray);
}
echo json_encode($list);
