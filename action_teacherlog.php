<?php
//session starts
session_start();
//included connection
include "conn.php";
// get post vales
$email = $_POST['email'];
$password = $_POST['password'];
//checking emailand password isnot empty
if ($email != "" && $password != "") {
    //sql 
    $sql = "select * from teacher where email ='$email' AND password = '$password' ";
    //executing mysql
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    //if user exists with abopve credentails.
    if ($row) {
        //success condition
        $count = $row['email'];
        $user_id = $row['id'];
        $role_id = $row['role'];
        /**
         * inserting to log table
         * params;
         * login_time;
         * user id;
         */
        $insertLogSql = "INSERT INTO login_log (user_id) VALUES ('$user_id')";
	    mysqli_query($conn, $insertLogSql);
        $lastLoginSql = "SELECT * FROM login_log WHERE user_id = ". $user_id ." and logout_time !='' order by id desc limit 1";
        //executing mylastLoginSql
        $lastLogQuery = mysqli_query($conn, $lastLoginSql);
        $getResult = mysqli_fetch_array($lastLogQuery);
        
        if($getResult){
            $_SESSION['lastLogOut'] = $getResult['logout_time'];
        }else{
            $_SESSION['lastLogOut'] = '';
        }   
        /**
         * Activity log ends!!
         */
        $_SESSION['email'] = $$count;
        $_SESSION['role'] = $role_id;
        $_SESSION['firstname'] = $row['name'];
        $_SESSION['user_id'] = $user_id;
        $response = array('status' => 200, 'message' => 'Successfully iNSERTED');
        echo json_encode($response);
    } else {
        //not exists.
        $response = array('status' => 500, 'message' => 'Sfailed');
        echo json_encode($response);
    }
}
