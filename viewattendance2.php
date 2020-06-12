<?php
session_start();
 
if(!isset($_SESSION['username']))
	 header('location:http://localhost/project/facultylogin.php');
  $fid=$_SESSION['username'];
  $scode=$_POST['scode'];
  $bcode=$_POST['bcode'];
  $semester =$_POST['semester'];
  $from=$_POST['from'];
  $to=$_POST['to'];
  
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'c_db');
$q1= "select * from teaching where scode='$scode' AND bcode= '$bcode'AND session=2018;";
$result1 = mysqli_query($con,$q1);
$vfid=mysqli_fetch_array($result1);
if($fid!=$vfid['fid'])
{
		header('location:http://localhost/project/viewattendance.php');
		
}
else
{
  
    $q2 = "select studentrollno from studentsubject where scode='$scode' AND semester='$semester';";
	$result2= mysqli_query($con,$q2);
	$num1=mysqli_num_rows($result2);	
?>
<?php include("header.php"); ?>
		<table width="500" height="200" align = "center"  bgcolor ="blue"border="0px" cellspacing="5px" cellpadding="5px">
		<tr>
				<th colspan="3"> <font size="20">Attendance is:</font></th>
		</tr>
		<tr bgcolor="white">
				<th>Subject Code</th>
				<th>Branch Code</th>
				<th>Semester</th>
		</tr>
		<tr bgcolor="white">
				<th><?php echo $scode;?> </th>
				<th><?php echo $bcode;?> </th>
				<th><?php echo $semester;?> </th>
		<tr>
		<tr bgcolor="white">
				<th>From</th>
				<th colspan="2">To</th>
		</tr>
		<tr bgcolor="white">
				<th><?php echo $from;?> </th>
				<th colspan="2"><?php echo $to;?> </th>
		</tr>
		<tr><th colspan="3">
					<table bgcolor="lightblue" border="1px" width="480" height="180" size="22">
					<tr>
						<th>Roll No</th>
						<th>Student Name</th>
						<th>Attendance</th>
					</tr>
			<?php
				for($i=1;$i<=$num1;$i++)
				{ 
					$row1=mysqli_fetch_array($result2);
					$temp =  $row1['studentrollno'];
					$q3="select * from student where studentrollno='$temp'";
					$studentdt=mysqli_query($con,$q3);
					$row1=mysqli_fetch_array($studentdt);
			?>
					<tr bgcolor="white">
						<td><?php echo $row1['studentrollno']; ?></td>
						<td><?php echo $row1['studentname']; ?></td>
				<?php
							$studentrollno=$row1['studentrollno'];
							$q4="SELECT MAX(classno) FROM attendance WHERE scode='$scode';";
							$result4= mysqli_query($con,$q4);
							$row=mysqli_fetch_array($result4);
							$num4=$row['MAX(classno)'];
							$q5="select * from attendance where studentrollno='$studentrollno' and scode='$scode' AND bcode='$bcode' AND date between '$from' and '$to';";
							$result5=mysqli_query($con,$q5);
							$num5=mysqli_num_rows($result5);
							$per=($num5*100)/$num4;
					
				?>		
						<td><?php echo $per."%";?></td>
					</tr>
			<?php
				}
			?>
				</table>
			</th>
		</table>
		</form>
		<?php include("footer.php"); ?>
<?php
}
mysqli_close($con);
?>