<?php
include "conn.php";

if (isset($_POST['save'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$address_ = $_POST['address_'];
	$mobile = $_POST['mobile'];
	$sql = "INSERT INTO comments (firstname, lastname, email, address_, mobile comment) VALUES ('$firstname', '$lastname', '$email', '$address_', '$mobile')";
	print_r($sql);
	exit();
	if (mysqli_query($conn, $sql)) {
		$id = mysqli_insert_id($conn);
		$saved_comment = '<div class="comment_box">
      		<span class="delete" data-id="' . $id . '" >delete</span>
      		<span class="edit" data-id="' . $id . '">edit</span>
      		<div class="display_fname">' . $firstname . '</div>
      		<div class="display_lname">' . $lastname . '</div>
			<div class="display_email">' . $email . '</div>
      		<div class="display_address">' . $address_ . '</div>
			<div class="display_mobile">' . $mobile . '</div>
      	</div>';
		echo $saved_comment;
	} else {
		echo "Error: " . mysqli_error($conn);
	}
	exit();
}
// delete comment fromd database
if (isset($_GET['delete'])) {
	$id = $_GET['id'];
	$sql = "DELETE FROM comments WHERE id=" . $id;
	mysqli_query($conn, $sql);
	exit();
}
if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$address_ = $_POST['address_'];
	$mobile = $_POST['mobile'];
	$sql = "UPDATE comments SET firstname='$firstname', lastname='$lastname', email='$email', address_='$address_', mobile='$mobile' WHERE id=" . $id;
	if (mysqli_query($conn, $sql)) {
		$id = mysqli_insert_id($conn);
		$saved_comment = '<div class="comment_box">
  		  <span class="delete" data-id="' . $id . '" >delete</span>
  		  <span class="edit" data-id="' . $id . '">edit</span>
		  <div class="display_fname">' . $firstname . '</div>
		  <div class="display_lname">' . $lastname . '</div>
		  <div class="display_email">' . $email . '</div>
		  <div class="display_address">' . $address_ . '</div>
		  <div class="display_mobile">' . $mobile . '</div>
  	  </div>';
		echo $saved_comment;
	} else {
		echo "Error: " . mysqli_error($conn);
	}
	exit();
}

// Retrieve comments from database
$sql = "SELECT * FROM comments";
$result = mysqli_query($conn, $sql);
$comments = '<div id="display_area">';
while ($row = mysqli_fetch_array($result)) {
	$comments .= '<div class="comment_box">
  		  <span class="delete" data-id="' . $row['id'] . '" >delete</span>
  		  <span class="edit" data-id="' . $row['id'] . '">edit</span>
			<div class="display_fname">' . $row['firstname'] . '</div>
			<div class="display_lname">' . $row['lastname'] . '</div>
		  <div class="display_email">' . $row['email'] . '</div>
			<div class="display_address">' . $row['address_'] . '</div>
		  <div class="display_mobile">' . $row['mobile'] . '</div>
  	  </div>';
}
?>