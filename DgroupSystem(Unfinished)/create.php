<?php
	include_once("connection.php");
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$mname = $_POST['mname'];
	$month = $_POST['month'];
	$day = $_POST['day'];
	$year = $_POST['year'];
	$gender = $_POST['gender'];
	$status = $_POST['cstatus'];
	$pos = $_POST['pos'];
	$glclevel = $_POST['glclevel'];

	$sql = "INSERT INTO member VALUES('','$fname','$mname','$lname','$month','$day','$year','$gender','$status','$pos','$glclevel')";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Added! <a href='viewmember.php'><<< Go Back</a>";
	}else{
		echo "Failed to Add! <a href='viewmember.php'><<< Go Back</a>";
	}
?>
