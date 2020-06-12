<?php 
session_start();
$hname=$_POST['hname'];
$hid=$_POST['hid'];
$gender=$_POST['gender'];
$post=$_POST['post'];
$mobileno=$_POST['mobileno'];
$email=$_POST['email'];
$address=$_POST['address'];
$education=$_POST['education'];
$password=$_POST['password'];
$ccode=$_POST['ccode'];
$bcode=$_POST['bcode'];
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'c_db');

$q = "insert into hoitemp(hid,hname,gender,post,mobileno,email,address,education,password,ccode,bcode) values('$hid','$hname','$gender','$post','$mobileno','$email','$address','$education','$password','$ccode','$bcode');";
mysqli_query($con,$q); 
mysqli_close($con);

?>
<?php include("header.php"); ?>


<table width="70%" height="" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
			 <tr><td colspan="2">Dear<?php echo $hname;?>,Your Request Is Submitted,,,,</td></tr>
			 <td align="center"><a href="home.php"><button>CLOSE</button></a></td>
			 
			</table>
	<?php include("footer.php"); ?>