<?php 
session_start();
$fname=$_POST['fname'];
$fid=$_POST['fid'];
$email=$_POST['email'];
$address=$_POST['address'];
$mobileno=$_POST['mobileno'];
$gender=$_POST['gender'];

$degree=$_POST['degree'];
$password=$_POST['password'];
$ccode=$_POST['ccode'];
$bcode=$_POST['bcode'];
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'c_db');

$q = "insert into facultytemp(fid,fname,gender,email,mobileno,address,degree,password,ccode,bcode) values('$fid','$fname','$gender','$email','$mobileno','$address','$degree','$password','$ccode','$bcode');";
mysqli_query($con,$q); 
mysqli_close($con);

?>
<?php include("header.php"); ?>
<table width="70%" height="" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
			 <tr><td colspan="2">Dear<?php echo $fname;?>,Your Request Is Submitted,,,,</td></tr>
			 <td align="center"><a href="home.php"><button>CLOSE</button></a></td>
			 
			</table>
	<?php include("footer.php"); ?>