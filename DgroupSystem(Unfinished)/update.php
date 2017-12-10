<!DOCTYPE html>
<html lang='en'>
	<head>
    	<title>Dgroup System</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/animate.min.css" rel="stylesheet"/>
        <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
        <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	</head>
	<body>
		<div class="wrapper">
            <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
            	<div class="sidebar-wrapper">
                    <div class="logo">
                        <a href="#" class="simple-text">
                            Dgroup System
                        </a>
                    </div>

                    <ul class="nav">
                        <li class="active">
                            <a href="viewmember.php">
                                <i class="pe-7s-graph3"></i>
                                <p>View Member</p>
                            </a>
                        </li>

                    </ul>
                    <ul class="nav">
                        <li class="active">
                            <a href="addmember.html">
                                <i class="pe-7s-graph2"></i>
                                <p>Add Member</p>
                            </a>
                        </li>

                    </ul>
                    <ul class="nav">
                        <li class="active">
                            <a href="ministry.html">
                                <i class="pe-7s-graph"></i>
                                <p>Member Ministry</p>
                            </a>
                        </li>

                    </ul>
            	</div>
            </div>

            <div class="main-panel">
                <nav class="navbar navbar-default navbar-fixed">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-left">
                                <li>
                                    <a href="template" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-refresh"></i>
                                    </a>
                                </li>
                            </ul>

                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                   <a href="#">
                                       <b>Update</b>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </nav>
			<?php

				include_once("connection.php");

				$id = $_GET['id'];
				
				$sql = "SELECT * FROM member WHERE memberID = '$id'";
				$result = mysqli_query($connect,$sql);
				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)){
					}
				}
			?>
			<div class="container">
				<form method="POST" action="update_data.php">
				  	<input type="hidden" name="memberid" value="<?php echo $id; ?>">
					<div>
						<label><b>First Name:</b></label>
						<input type="text" name="fname" class='form-control' value="<?php echo $row['firstname'];?>" required>
					</div>

					<div>
						<label><b>Middle Name:</b></label>
						<input type="text" name="mname" class='form-control' value="<?php echo $row['middlename'];?>" required>
					</div>

					<div>
						<label><b>Last Name:</b></label>
						<input type="text" name="lname" class='form-control' value="<?php echo $row['lastname'];?>" required>
					</div>

					<div>
						<br>
						<label><h4><b>Birthdate:</b></h4></label>
						<br>
						<br>
					</div>

					<div>
						<label><b>Month:</b></label></label>
						<select class="form-control" name="month" value="<?php echo $row['monthBirthdate'];?>" required="">
                            <option value="" selected disabled>Select Month!</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>            
                        </select>
					</div>

					<div>
						<label><b>Day:<b></label>
						<input type="text" name="day" class='form-control' value="<?php echo $row['dayBirthdate'];?>" required>
					</div>

					<div>
						<label><b>Year:</b></label>
						<input type="text" name="year" class='form-control' value="<?php echo $row['yearBirthdate'];?>" required>
					</div>

					<div>
						<label><b>Gender:</b></label>
						<select class="form-control" name="gender" value="<?php echo $row['gender'];?>" required>
                            <option value="" selected disabled>Select Gender!</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>              
                        </select>
					</div>

					<div>
						<label><b>Civil Status:</b></label>
						<select class="form-control" name="gender" value="<?php echo $row['status'];?>" required>
                            <option value="" selected disabled>Select Gender!</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>              
                        </select>
					</div>

					<div>
					<label><b>Position:</b></label>
					<select class="form-control" name="pos" value="<?php echo $row['pos'];?>" required>
						<option value="" selected disabled>Please Select a Position</option>
						<option value="Member">Member</option>
						<option value="Leader">Leader</option>
						<option value="D12 Leader">D12 Leader</option>
						<option value="Potential Leader">Potential Leader</option>
					</select>
					</div>

					<div>
						<label><b>GLC Level:</b></label>
						<select class="form-control" name="pos" value="<?php echo $row['GLClevel'];?>" required>
							<option value="" selected disabled>Please Select a Position</option>
							<option value="GLC 1">GLC 1</option>
							<option value="GLC 2">GLC 2</option>
							<option value="GLC 3">GLC 3</option>
							<option value="GLC 4">GLC 4</option>
						</select>
					</div>
					<br>
					<button type="submit" class="btn btn-primary">Submit</button>
					<button type="button" class="btn btn-danger"><a href="viewmember.php">Back</a></button>
				</form>
				<div class="masaya">
					<style type="text/css">.masaya{height: 50px; width: 100%;}</style>			
				</div>
			</div>
			</div>
		</div>
		
	</body>
</html>




