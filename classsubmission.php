<?php
 session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'c_db');

$fid =$_POST['fid'];
$bcode=$_POST['bcode'];
$scode=$_POST['scode'];
$semester =$_POST['semester'];
$session =$_POST['session'];


$q1= "select * from subject where scode='$scode' AND bcode= '$bcode';";
$result1 = mysqli_query($con,$q1);
$vscode=mysqli_fetch_array($result1);
$q2="select fid from teaching where scode='$scode' AND bcode= '$bcode';";
$result2 = mysqli_query($con,$q2);
$vfid=mysqli_fetch_array($result2);
if($scode!=$vscode['scode'])
{
	header('location:http://localhost/project/addclass.php');	
}

else
{
	
		$q3="update subject set fid='$fid' where scode='$scode';";
		mysqli_query($con,$q3);
		if($fid==$vfid['fid'])
		{
			$q4="update teaching set session='$session' where fid='$fid';";
			mysqli_query($con,$q4);	
		}
		else
		{
			$q5="update teaching set fid='$fid',session='$session' where scode='$scode';";
			mysqli_query($con,$q5);
		}	

}


?>

<?php include("header1.php"); ?>
			<table width="50%" height="20%" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
			 <tr><td colspan="2">Class is Added ,,,,</td></tr>
			 
			 <td><a href="home.php"><button>CLOSE</button></a></td>
			 
			</table>
			<?php include("footer.php"); ?>