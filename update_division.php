<?php

include('conn.php');
$id = $_POST['id']; 
$division_name = $_POST['division_name'];
$sql = "UPDATE division SET division_name = '$division_name' WHERE id =".$id;
// print_r($sql);exit;
if (mysqli_query($conn, $sql)) {
    $sql = "SELECT * FROM division";
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
