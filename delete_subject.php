<?php

include('conn.php');

$id = $_POST['id'];

$sql = " DELETE FROM subject_ WHERE id = $id ";

if (mysqli_query($conn, $sql)) { 
  $sql = "SELECT * FROM subject_";
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
