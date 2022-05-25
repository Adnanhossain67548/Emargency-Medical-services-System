<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">

<!-- index22:59-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
            
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="assets/img/user.jpg" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
						<span>Admin</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="change-password.php">Change Password</a>
						
						<a class="dropdown-item" href="logout.php">Logout</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="active">
                            <a href="index-2.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						<li>
                            <a href="manage-doctors.php"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
                        </li>
                        <li>
                            <a href="manage-patient.php"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                        </li>
                         <li>
                            <a href="manage-users.php"><i class="fa fa-user-o"></i> <span>Uer</span></a>
                        </li>
                        <li>
                            <a href="appointment-history.php"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                        </li>
						
                        <li>
                            <a href="manage-ambulance.php"><i class="fa fa-ambulance"></i></i> <span>Ambulane</span></a>
                        </li>
                         <li>
                            <a href="unread-queries.php"><i class="fa fa-address-book"></i></i> <span> Conatctus Queries</span></a>
                        </li>
                         <li>
                            <a href="patient-search.php"><i class="fa fa-search"></i></i> <span>Patient Search</span></a>
                        </li>
                
                       
                        <li>
                            <a href="logout.php"><i class="fa fa-columns"></i> <span>Logout</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
							<span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
								<h3><a href="manage-doctors.php">
                                                <?php $result1 = mysqli_query($con,"SELECT * FROM doctors ");
$num_rows1 = mysqli_num_rows($result1);
{
?>
                                            Total Doctors :<?php echo htmlentities($num_rows1);  } ?>       
                                                </a></h3>
								<span class="widget-title1"> Doctors <a href="manage-doctors.php"> <i class="fa fa-check" aria-hidden="true"></i></span>
								</a>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-wheelchair"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><a href="manage-patient.php">
<?php $result = mysqli_query($con,"SELECT * FROM tblpatient ");
$num_rows = mysqli_num_rows($result);
{
?>
Total Patients :<?php echo htmlentities($num_rows);  
} ?>        
</a></h3>
                                <span class="widget-title2">Patients <a href="manage-patient.php"><i class="fa fa-check" aria-hidden="true"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><a href="manage-users.php"><?php $result = mysqli_query($con,"SELECT * FROM users ");
$num_rows = mysqli_num_rows($result);
{
?>
                                            Total Users :<?php echo htmlentities($num_rows);  } ?> </a> </h3>
                                <span class="widget-title3">User<a href="manage-users.php"> <i class="fa fa-check" aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>
                                                    <a href="appointment-history.php">
                                                <?php $sql= mysqli_query($con,"SELECT * FROM appointment");
$num_rows2 = mysqli_num_rows($sql);
{
?>
                                            Appointments :<?php echo htmlentities($num_rows2);  } ?>  
                                                </a>
                                                </h3>
                                <span class="widget-title3">Appointment<a href="appointment-history.php"> <i class="fa fa-check" aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
                            <span class="dash-widget-bg4"><i class="fa fa-ambulance" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><a href="manage-ambulance.php">
                                                <?php $result1 = mysqli_query($con,"SELECT * FROM ambulance ");
$num_rows1 = mysqli_num_rows($result1);
{
?>
                                            Total Ambulance :<?php echo htmlentities($num_rows1);  } ?>       
                                                </a></h3>
                                <span class="widget-title4">Ambulance <a href="#"> <i class="fa fa-check" aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


				
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/app.js"></script>

</body>


<!-- index22:59-->
</html>