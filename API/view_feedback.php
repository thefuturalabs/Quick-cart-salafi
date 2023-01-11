<?php

include 'connection.php';

$sql = mysqli_query($con, "SELECT * FROM feedback join customers on customers.login_id = feedback.customer_id");
$list = array();

if ($sql->num_rows > 0) {

    while ($row = mysqli_fetch_assoc($sql)) {

        $myarray['id'] = $row['name'];
        $myarray['feedback'] = $row['feedback'];
        array_push($list, $myarray);
    }
} else {



    $myarray['message'] = 'failed';
    array_push($list, $myarray);
}
echo json_encode($list);