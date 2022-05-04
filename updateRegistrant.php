<?php

include('conn.php');
$id = $_POST['id']; 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password =$_POST['password'];
$teacher_id = $_POST['teacher_id'];
$class_id = $_POST['class_id'];
$division_id = $_POST['division_id']; 
$sql = "UPDATE user SET firstname = '$firstname', lastname = '$lastname', email = '$email', password = '$password', teacher_id = '$teacher_id', class_id = '$class_id' ,division_id = '$division_id' WHERE id =".$id;
// print_r($sql);exit;
if (mysqli_query($conn, $sql)) {
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn,$sql);
    $rows = array();
    while($r = mysqli_fetch_assoc($result)) {
     $rows[] = $r;
     }
    //Send the array back as a JSON object
    echo json_encode($rows);

} else {
   $response = array('status' => 500, 'message' => 'Something went wrong');
    echo json_encode($response);
}
