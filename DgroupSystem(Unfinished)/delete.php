
<?php

	include_once("connection.php");

	$id = $_GET['id'];

	$sql = "DELETE FROM member where memberID = '$id'";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Deleted! <a href='viewmember.php' target='_self'>
		<button> Go Back </a></button>";
	}else{
		echo "Failed to Delete!".mysqli_error($connect);
		echo "<br/> <a href='sign_up.php'>
		<button> Go Back </a></button>";

	}

	