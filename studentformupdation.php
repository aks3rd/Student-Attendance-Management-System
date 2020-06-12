<?php 
session_start();
$studentname=$_POST['studentname'];
$studentrollno=$_POST['studentrollno'];
$fathersname=$_POST['fathersname'];
$mothersname=$_POST['mothersname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];

$cast=$_POST['cast'];
$address=$_POST['address'];
$mobileno=$_POST['mobileno'];
$parentsno=$_POST['parentsno'];
$email=$_POST['email'];
$studentpicture=$_POST['studentpic'];
$ccode=$_POST['collegecode'];
$cname=$_POST['collegename'];
$bcode=$_POST['coursecode'];
$bname=$_POST['coursename'];
$duration=$_POST['duration'];
$admissiondate=$_POST['admissiondate'];
$semester=$_POST['semester'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'c_db');
	$q ="insert into student(studentrollno,studentname,fathersname,mothersname,dob,gender,cast,address,mobileno,parentsno,studentpicture,email,ccode,bcode,bname,duration,admissiondate,semester,password) values('$studentrollno','$studentname','$fathersname','$mothersname','$dob','$gender','$cast','$address','$mobileno','$parentsno','$studentpicture','$email','$ccode','$bcode','$bname','$duration','$admissiondate',$semester,'$password');";
 
	mysqli_query($con,$q);
	
	$q2="select scode from subject where semester='$semester' and bcode='$bcode';"
	$result = mysqli_query($con,$q2);
	$num = mysqli_num_rows($result);
	for($i=1;$i<=$num;$i++)
	{
		$row = mysqli_fetch_array($result);
		$vscode=$row['scode']
		$q2="insert into studentsubject(scode,studentrollno,semester) values('$vscode','$studentrollno',$semester);"
		$result = mysqli_query($con,$q2);
	}
	$q2="delete from studenttemp where studentrollno='$studentrollno'";
	mysqli_query($con,$q2);
mysqli_close($con);
?>
<?php include("header.php"); ?>
<table width="70%" height="100%" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
			 <tr><td colspan="2">Dear<?php echo $studentname;?>,Is Added,,,,</td></tr>
			 <td><a href="home.php"><button>CLOSE</button></a></td>
			 
			</table>
<?php include("footer.php"); ?>