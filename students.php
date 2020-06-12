<?php
session_start();
 
 if(!isset($_SESSION['username']))
	 header('location:http://localhost/project/home.php');
?>
<?php include("header.php"); ?>
			<div style="background-color:white;">
			<font size="18">
			<ul>
			<li><a href="studentform.php">Fill Student Form</a></li>
			<li><a href="viewattendance1.php">View Attendance</a></li>
			</font>
			</div>
			<?php include("footer.php"); ?>

