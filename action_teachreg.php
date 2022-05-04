<?php
include "conn.php";


	$name = $_POST['name'];
	$place = $_POST['place'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $experience = $_POST['experience'];
    $subject = $_POST['subject'];
    $password = $_POST['password'];
	$role = 3;
	$sql = "INSERT INTO teacher (name, place, email, phone, experience, subject, password, role) VALUES ('$name', '$place', '$email', '$phone', '$experience', '$subject', '$password', '$role')";
	if (mysqli_query($conn, $sql)) {
		$id = mysqli_insert_id($conn);
        $response = array('status' => 200, 'message' => 'Successfully Inserted');
        echo json_encode($response);
	} else {
		$response = array('status' => 500, 'message' => 'Failure');
        echo json_encode($response);
	}

?>