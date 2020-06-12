<?php


session_start();

$facultyid = $_POST['facultyid'];
$facultypassword = $_POST['facultypassword'];

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'c_db');

$q1= "select * from faculty where fid='$facultyid' AND password= '$facultypassword';";
$result1 = mysqli_query($con,$q1);
$num1 = mysqli_num_rows($result1);


if ($num1==1)
{
	$_SESSION['username'] = $facultyid;
	header('location:http://localhost/project/classdetails.php');
}
else
{
	header('location:http://localhost/project/facultylogin.php');
}

mysqli_close($con);
?>