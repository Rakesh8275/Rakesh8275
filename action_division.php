<?php

include('conn.php');
    $division_name = $_POST['division_name'];
    // print_r($$_POST);exit;
    $sql = "INSERT INTO division (division_name) VALUES ('$division_name')";
    // print_r($sql);exit;
    if (mysqli_query($conn, $sql)) {
        $id = mysqli_insert_id($conn);

        $sql = "SELECT * FROM division";
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

