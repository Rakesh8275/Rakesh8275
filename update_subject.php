<?php

include('conn.php');
$id = $_POST['id']; 
$subject_name = $_POST['subject_name'];
$subject_key = $_POST['subject_key'];

$sql = "UPDATE subject_ SET subject_name = '$subject_name' , subject_key = '$subject_key'  WHERE id =".$id;
// print_r($sql);exit;
if (mysqli_query($conn, $sql)) {
    $sql = "SELECT * FROM subject_";
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