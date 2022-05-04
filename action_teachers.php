<?php

include('conn.php');
$name = $_POST['name'];
$place = $_POST['place'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$experience = $_POST['experience'];
$subject = $_POST['subject'];
$password = $_POST['password'];
$role = 3;

$sql = "INSERT INTO teacher (name, place, email, phone, experience, subject, password, role) VALUES ('$name', '$place' ,'$email', '$phone', '$experience', '$subject', '$password', '$role')";
// print_r($sql);exit;
if (mysqli_query($conn, $sql)) {
    $id = mysqli_insert_id($conn);

    $sql = "SELECT * FROM teacher";
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
}?>
