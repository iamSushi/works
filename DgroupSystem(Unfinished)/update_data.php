<?php 
	
	include_once("connection.php");
	$memberid = $_POST['memberid'];
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

	$sql = "UPDATE member SET firstname = '$fname', middlename = '$mname', lastname = '$lname' , monthBirthdate = '$month' , dayBirthdate = '$day' , yearBirthdate = '$year' , gender = '$gender' , status  = '$status' , position = '$pos',GLClevel = '$glclevel' WHERE memberID = '$memberid'";

	if(mysqli_query($connect, $sql)){
		echo "Successfully Updated! <a href='viewmember.php'><<< Go Back</a>";
	}else{
		echo "Failed to Update!".mysqli_error($connect);
		echo "<br/> <a href='viewmember.php'><<< Go Back</a>";
	}

?>