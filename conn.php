<?php
session_start();
$conn = mysqli_connect("localhost", "root", "ta123@", "forme");
		
if($conn === false) {
    die("ERROR: Could not connect. ". mysqli_connect_error());
}

?>