<?php
include "conn.php";


	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
	$role = 2;
	$teacher_id = $_POST['teacher_id'];
	$class_id = $_POST['class_id'];
	$division_id = $_POST['division_id']; 
	$sql = "INSERT INTO user (firstname, lastname, email, password, role, teacher_id, class_id, division_id, ) VALUES ('$firstname', '$lastname', '$email', '$password', '$role', '$teacher_id', '$class_id', '$division_id')";
	if (mysqli_query($conn, $sql)) {
		$id = mysqli_insert_id($conn);
        $response = array('status' => 200, 'message' => 'Successfully Inserted');
        echo json_encode($response);
	} else {
		$response = array('status' => 500, 'message' => 'Failure');
        echo json_encode($response);
	}

?>