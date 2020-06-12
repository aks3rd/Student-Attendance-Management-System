<?php
 session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'c_db');
$fid =$_SESSION['username'];
$bcode=$_POST['bcode'];
$scode=$_POST['scode'];
$semester =$_POST['semester'];
$date =$_POST['date'];
$classno = $_POST['classno'];


$q1= "select * from teaching where scode='$scode' AND bcode= '$bcode'AND session=2018;";
$result1 = mysqli_query($con,$q1);
$vfid=mysqli_fetch_array($result1);

$q4="SELECT MAX(classno) FROM attendance WHERE scode='$scode';";
$result4= mysqli_query($con,$q4);
$row=mysqli_fetch_array($result4);
$num4=$row['MAX(classno)'];
							
if($fid!=$vfid['fid'])
{
		header('location:http://localhost/project/classdetails.php');
		
}
elseif($classno<=$num4)
{
	header('location:http://localhost/project/classdetails.php');
}
else
{
	
	$q2 = "select studentrollno from studentsubject where scode='$scode' AND semester='$semester';";
	$result2= mysqli_query($con,$q2);
	$num1=mysqli_num_rows($result2);	
?>
<?php include("header.php"); ?>
<table width="70%" height="	" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
	<tr>
            <th align="left"> <font size="20"> Details :</font>
                <table bgcolor="lightblue" border="1px" width="98%" height="100%" size="22">
			<tr>
						  <th>Faculty Id </th>
                          <th>Subject Code</th>
                          <th>Class No. </th>
						  <th>Branch Code </th>
                          <th>Semester </th>
                          <th>Date </th>
			</tr>
			<tr>
                            <td><?php echo $fid;?></td>
                            <td><?php echo $scode;?></td>
                            <td><?php echo $classno;?></td>
							<td><?php echo $bcode;?></td>
                            <td><?php echo $semester;?></td>
                            <td><?php echo $date;?></td>
            </tr>
                     
		</table>
            </th>
	</tr>
	</table>
	
	`<form action="attendancesubmission.php" method="POST">
		<input type="hidden" value="<?php echo $fid;?>" name="fid"/>
		<input type="hidden" value="<?php echo $scode;?>" name="scode"/>
		<input type="hidden" value="<?php echo $classno;?>" name="classno"/>
		<input type="hidden" value="<?php echo $bcode;?>" name="bcode"/>
		<input type="hidden" value="<?php echo $semester;?>" name="semester"/>
		<input type="hidden" value="<?php echo $date;?>" name="date"/>
		<input type="hidden" value="<?php echo $num1;?>" name="num"/>
		<table width="70%" height="100%" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
			<tr>
				<th>Serial No.</th>
				<th>Roll No.</th>
				<th>Student Name </th>
				<th>Attendance</th>
				<th>Persent</th>
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
				<td><?php echo $i; ?></td>
				<td><?php echo $row1['studentrollno']; ?></td>
				<td><?php echo $row1['studentname']; ?></td>
				<td><input type="checkbox" value="<?php echo $row1['studentrollno'];?>" name="s<?php echo $i?>" />
				<input type="hidden" value="<?php echo $row1['studentrollno'];?>" name="a<?php echo $i?>"/>
				</td>
				<?php
							$studentrollno=$row1['studentrollno'];
							$q4="SELECT MAX(classno) FROM attendance WHERE scode='$scode';";
							$result4= mysqli_query($con,$q4);
							$row=mysqli_fetch_array($result4);
							$num4=$row['MAX(classno)'];
							$q5="select * from attendance where scode='$scode' and studentrollno='$studentrollno';";
							$result5=mysqli_query($con,$q5);
							$num5=mysqli_num_rows($result5);
							$per=($num5*100)/$num4;
					
				?>		
				<td><?php echo $per."%";?></td>
			</tr>
			<?php
				}
			?>
			<tr>
				<td colspan="5" align="center"><input type="submit" value="SUBMIT" /></td>
			</tr>
			
		</table>
	 </form>
	<?php include("footer.php"); ?>

<?php
}
?>

<?php
mysqli_close($con);
?>