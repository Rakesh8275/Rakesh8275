<?php

include('conn.php');
$rowId = $_POST['id'];
$sql = "SELECT * FROM division WHERE id =".$rowId;
// print_r($sql);exit;
$result = mysqli_query($conn,$sql);
$r = mysqli_fetch_assoc($result);
if($r){
    $response = $r;
    echo json_encode($response);
}else{
    $response = array('status' => 500, 'message' => 'Something went wrong');
    echo json_encode($response);
}
      
