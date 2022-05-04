<?php

include('conn.php');

$id = $_POST['id'];

$sql = " DELETE FROM teacher WHERE id =".$id;
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
} 
 else {
  $response = array('status' => 500, 'message' => 'Failure');
  echo json_encode($response);
}
