<?php

include('conn.php');
    $subject_name = $_POST['subject_name'];
    $subject_key = $_POST['subject_key'];
    // print_r($_POST);exit;
    $sql = "INSERT INTO subject_ (subject_name, subject_key) VALUES ('$subject_name', '$subject_key')";
    //  print_r($sql);exit;
    if (mysqli_query($conn, $sql)) {
        $id = mysqli_insert_id($conn);

        $sql = "SELECT * FROM subject_";
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

