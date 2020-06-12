<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'c_db');
$fid =$_POST['fid'];
$bcode=$_POST['bcode'];
$scode=$_POST['scode'];
$semester =$_POST['semester'];
$date =$_POST['date'];
$classno = $_POST['classno'];

$q2 = "select studentrollno from studentsubject where scode='$scode' AND semester='$semester';";
	$result2= mysqli_query($con,$q2);
	$num1=mysqli_num_rows($result2);
	
?>
<?php include("header.php"); ?>
<table width="70%" height="	" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
	<tr>
            <th align="left"> <font size="20"> Details :</font>
                <table bgcolor="white" border="1px" width="98%" height="100%" size="22">
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
	<table width="70%" height="100%" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
			<tr>
				<th>Serial No.</th>
				<th>Roll No.</th>
				<th>Student Name </th>
				<th>Attendance</th>
				<th>Persent</th>
			</tr>
			<?php
						$i=1;
				while($i<=$num1)
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
					<?php
						
						$index="s".$i;
						$index1="a".$i;
						if(isset($_POST[$index]))
						{
							$studentrollno=$_POST[$index];
							
							$q ="insert into attendance(studentrollno,scode,bcode,date,classno) values('$studentrollno','$scode','$bcode','$date',$classno);";
							mysqli_query($con,$q);
					?>
							<td><?php echo "P"?></td>
					<?php			
							
						}
						else
						{
							?>
							<td><?php echo "A"?></td>
							<?php
						}
						$studentrollno=$_POST[$index1];
						if(isset($studentrollno))
						{
							$q4="SELECT MAX(classno) FROM attendance WHERE scode='$scode';";
							$result4= mysqli_query($con,$q4);
							$row=mysqli_fetch_array($result4);
							$num4=$row['MAX(classno)'];

							$q5="select * from attendance where scode='$scode' and studentrollno='$studentrollno';";
							$result5=mysqli_query($con,$q5);
							$num5=mysqli_num_rows($result5);
							$per=($num5*100)/$num4;
						
						?>
							<td><?php echo $per."%" ;?></td>
					</tr>
			<?php
						}
				$i++;
				}
			?>
		</table>
			<table width="70%" height="100%" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
			 <tr><td colspan="2">Attendance Submitted,,,,</td></tr>
			 <tr><td><a href="viewattendance.php"><button>VEIW ATTENDANCE</button></a></td>
			 <td><a href="home.php"><button>CLOSE</button></a></td>
			 
			</table>
<?php include("footer.php"); ?>
<?php
mysqli_close($con);
?>