<?php

include 'connection.php';



$sql = mysqli_query($con, "SELECT * FROM supermarket");
$list = array();

if ($sql->num_rows > 0) {

    while ($row = mysqli_fetch_assoc($sql)) {

        $myarray['id'] = $row['login_id'];
        $myarray['name'] = $row['name'];
   


        array_push($list, $myarray);
    }
} else {



    $myarray['message'] = 'failed';
    array_push($list, $myarray);
}
echo json_encode($list);
