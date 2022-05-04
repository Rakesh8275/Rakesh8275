<?php
/**
 * include the connection.php
 * 
 */
include ("conn.php");

/**
 * Starting SESSION
 */
session_start();

$user_id = $_SESSION['user_id'];
/**
 * fROMTHE GLOBAL session we are assigning the user_id TO USER_ID VARIABLE
 */
$logOutDateTime = date('Y-m-d H:i:s');

mysqli_query($conn,"UPDATE login_log SET logout_time = '$logOutDateTime ' WHERE user_id ='$user_id' order by id desc limit 1") ;
session_destroy();
header("location:login.php");
?>