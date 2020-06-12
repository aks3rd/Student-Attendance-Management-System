<?php 
session_start();
$hname=$_POST['hname'];
$hid=$_POST['hid'];
$gender=$_POST['gender'];
$post=$_POST['post'];
$email=$_POST['email'];
$address=$_POST['address'];
$mobileno=$_POST['mobileno'];
$education=$_POST['education'];
$password=$_POST['password'];
$ccode=$_POST['ccode'];
$bcode=$_POST['bcode'];
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'c_db');

$q = "insert into hoi(hid,hname,gender,post,email,mobileno,address,education,password,ccode,bcode) values('$hid','$hname','$gender','$post','$email','$mobileno','$address','$education','$password','$ccode','$bcode');";
mysqli_query($con,$q); 
mysqli_close($con);

?>