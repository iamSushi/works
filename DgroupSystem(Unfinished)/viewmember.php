<!doctype html>
<html lang="en">
    <head>

    	<title>Dgroup System</title>

    	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
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
                        <a href="#" class="simple-text">Dgroup System</a>
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
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                   <a href="#"><b>View Member</b></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                
                <?php
                    include_once("connection.php");
                    $sql = "SELECT * FROM member";
                    $result = mysqli_query($connect,$sql);
                    if(mysqli_num_rows($result) > 0){
                        echo "<table class='table'>";
                        echo "<thead>
                                <tr>
                                    <th>MemberID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>";
                        echo "<tbody>";
                        while($row = mysqli_fetch_assoc($result)){
                           echo "<tr>
                                    <td style='text-align:center;'>".$row['memberID']."</td>
                                    <td>". $row['firstname'].' '.$row['lastname']."</td>
                                    
                                    <td>
                                        <a href='update.php?id=".$row['memberID']."'><button class='btn btn-primary'>Update</button></a>
                                        <a href='delete.php?id=".$row['memberID']."'><button class='btn btn-danger'>Delete</button></a>
                                     </td>
                                </tr>";
                        }
                        echo "</tbody>";
                    }
                ?>

            </div>
        </div>
    </body>
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>
	<script src="assets/js/chartist.min.js"></script>
    <script src="assets/js/bootstrap-notify.js"></script>
	<script src="assets/js/light-bootstrap-dashboard.js"></script>
	<script src="assets/js/demo.js"></script>


</html>
