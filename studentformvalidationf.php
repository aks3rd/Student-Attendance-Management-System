<?php 
session_start();
$studentname=$_POST['studentname'];
$studentrollno=$_POST['studentrollno'];
$fathersname=$_POST['fathersname'];
$mothersname=$_POST['mothersname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$studentname=$_POST['studentname'];
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
	mysqli_close($con);
 
?>
<?php include("header.php"); ?>
<table width="70%" height="" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
			 <tr><td colspan="2">Dear<?php echo $studentname;?>,Is Added,,,,</td></tr>
			 <td align="center"><a href="home.php"><button>CLOSE</button></a></td>
			 
			</table>
	<?php include("footer.php"); ?>