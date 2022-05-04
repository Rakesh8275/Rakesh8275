<?php

include('conn.php');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$teacher_id = $_POST['teacher_id'];
$class_id = $_POST['class_id'];
$division_id = $_POST['division_id'];
$role = 2;


// print_r($_POST);exit;
$sql = "INSERT INTO user (firstname, lastname, email, password, role, teacher_id, class_id, division_id) VALUES ('$firstname', '$lastname' ,'$email', '$password', '$role', '$teacher_id', '$class_id', '$division_id')";
//  print_r($sql);exit;
if (mysqli_query($conn, $sql)) {
    $id = mysqli_insert_id($conn);

    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn,$sql);
    $rows = array();
    while($r = mysqli_fetch_assoc($result)) {
     $rows[] = $r;
     }
    //Send the array back as a JSON object
    echo json_encode($rows);
} else {
    $response = array('status' => 500, 'message' => 'Failure');
    echo json_encode($response);
}
