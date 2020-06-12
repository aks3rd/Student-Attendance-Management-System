<?php

session_start();

$studentrollno = $_POST['studentid'];
$password = $_POST['studentpassword'];

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'c_db');

$q1= "select * from student where studentrollno='$studentrollno' AND password='$password';";
$result1 = mysqli_query($con,$q1);
$num1 = mysqli_num_rows($result1);


if ($num1==1)
{
	$_SESSION['username']=$studentrollno;
	header('location:http://localhost/project/students.php');
}
else
{
	header('location:http://localhost/project/studentlogin.php');
}

mysqli_close($con);
?>