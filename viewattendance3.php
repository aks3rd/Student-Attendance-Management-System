<?php
session_start();
 
 if(!isset($_SESSION['username']))
	 header('location:http://localhost/project/login.php');
  $studentrollno=$_SESSION['username'];
  $scode=$_POST['scode'];
  $bcode=$_POST['bcode'];
  $from=$_POST['from'];
  $to=$_POST['to'];
  
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'c_db');

  $q="select * from attendance where studentrollno='$studentrollno' and scode='$scode' AND bcode='$bcode' AND date between '$from' and '$to';";
  $result=mysqli_query($con,$q);
  $num1=mysqli_num_rows($result);
	$q4="SELECT MAX(classno) FROM attendance WHERE scode='$scode';";
	$result4= mysqli_query($con,$q4);
	$row=mysqli_fetch_array($result4);
	$num4=$row['MAX(classno)'];
	$per=($num1*100)/$num4;

?>
<?php include("header.php"); ?>
	<table width="500" height="200" align = "center"  bgcolor ="blue"border="0px" cellspacing="5px" cellpadding="5px">
		<tr>
				<th align="left"> <font size="20">Your Attendance :</font>
					<table bgcolor="lightblue" border="1px" width="480" height="180" size="22">
				<tr>
							  <th>Roll No</th>
							  <th>Subject Code</th>
							  
							  <th>Branch Code </th>
							  
							  <th>From </th>
							  <th>To </th>
							  <th>Attendance</th>
				</tr>
				<tr bgcolor="white">
								
								<td><?php echo $studentrollno;?> </td>
								<td><?php echo $scode;?> </td>
								
								<td><?php echo $bcode;?> </td>
								<td><?php echo $from;?> </td>
								<td><?php echo $to;?> </td>
								<td><?php echo $per."%";?> </td>
				</tr>
			</table>
				</th>
		</tr>
		</table>
		</form>
		<?php include("footer.php"); ?>