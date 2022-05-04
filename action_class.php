<?php

include('conn.php');

$class_name = $_POST['class_name'];
$teacherselect = $_POST['teacherselect']; 
// print_r($class_name);exit;
$sql = "INSERT INTO class (class_name, teacher_id) VALUES ('$class_name', '$teacherselect')";
//  print_r($sql);exit;
if (mysqli_query($conn, $sql)) {
    $id = mysqli_insert_id($conn);

    $sql = "SELECT * FROM class";
    $result = mysqli_query($conn,$sql);
    $rows = array();
    while($r = mysqli_fetch_assoc($result)) {
     $rows[] = $r;
     }
    //Send the array back as a JSON object
    echo json_encode($rows);
} else {
    $response = array('status' => 500, 'message' => 'SFailure');
    echo json_encode($response);
}
