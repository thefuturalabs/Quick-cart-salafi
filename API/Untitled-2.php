
<?php

include 'connection.php';


$login_id = $_POST['login_id'];
$doctor_id = $_POST['doctor_id'];
$time_slot = $_POST['time_slot'];

$image = $_FILES['image']['name'];

if ($image != "") {
	$filearray = pathinfo($_FILES['image']['name']);
	// var_dump($filearray);exit();

	$file1 = rand();
	$file_ext = $filearray["extension"];




	$filenew = $file1 . "." . $file_ext;
	move_uploaded_file($_FILES['image']['tmp_name'], "photos/" . $filenew);
	//var_dump($filenew);exit();
}


$query = mysqli_query($conn,"INSERT INTO appointment_tb(`login_id`,`doctor_id`,`time_slot`) VALUES('$login_id','$doctor_id','$time_slot')");
$last_login_id = mysqli_insert_id($conn);


if($query)
{
	echo "Appointment fixed";
}

else
{

	echo " sorry!";
}

?>