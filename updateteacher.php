<?php

include('conn.php');
$id = $_POST['id']; 
$name = $_POST['name'];
$place = $_POST['place'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$experience = $_POST['experience'];
$subject = $_POST['subject'];

$sql = "UPDATE teacher SET name = '$name', place =' $place' , email = '$email' , phone = '$phone' , experience = $experience , subject = '$subject' WHERE id =".$id;
// print_r($sql);exit;
if (mysqli_query($conn, $sql)) {
    $sql = "SELECT * FROM teacher";
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
?>