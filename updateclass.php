<?php

include('conn.php');

$id = $_POST['id']; 
$class_name = $_POST['class_name'];

$sql = "UPDATE class SET class_name = '$class_name' WHERE id =".$id;

if (mysqli_query($conn, $sql)) {
    $sql = "SELECT * FROM class";
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