<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'c_db');
$q4= "select * from facultytemp;";
$result4= mysqli_query($con,$q4);
$num4 = mysqli_num_rows($result4);
$q5= "select * from hoitemp;";
$result5= mysqli_query($con,$q5);
$num5 = mysqli_num_rows($result5);

?>
<?php include("header.php"); ?>
	<table width="70%" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
	<tr>
            <th align="left"> <font size="20"> Notifications :</font>

	<table border="1px" width="98%" bgcolor="white" align="center">
		<tr>
			<th>Faculty Id </th>
			<th>Faculty Name</th>
			<th>Gender</th>
			<th>E-mail</th>
			<th>Mobile No.</th>
			<th>Address</th>
			<th>Degree</th>
	<!--	<th>Password</th>  -->
			<th>Branch Code</th>
			<th>ADD</th>
			<th>VEIW</th>
			<th>DELETE</th>
		</tr>
<?php
	$i=1;
	while($i<=$num4)
	{
		$row4= mysqli_fetch_array($result4);
		
?>
	
		<tr>
			<form action="facultyformvalidation2.php" method="POST">
			<td><?php echo $row4['fid']; ?>
			<input type="hidden" name="fid" value="<?php echo $row4['fid']; ?>" /></td>
			<td><?php echo $row4['fname']; ?></td>
			<td><?php echo $row4['gender']; ?></td>
			<td><?php echo $row4['email'];?></td>
			<td><?php echo $row4['mobileno'];?></td>
			<td><?php echo $row4['address'];?></td>
			<td><?php echo $row4['degree'];?></td>
	<!--    <td><?php echo $row4['password'];?></td>   -->
			<td><?php echo $row4['bcode'];?></td>
			<td><input type="submit" value="ADD" name="submit"/></td>
			<td><input type="submit" value="VEIW" name="submit"/></td>
			<td><input type="submit" value="DELETE" name="submit"/></td>
			</form>
			
		</tr>
<?php
	$i++;
	}
	
?>
	</table>
	</th>
	</tr>
	</table>
<!-- This feild hoitemp -->


<table width="70%" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
	<tr>
            <th align="left"> <font size="20"> Notifications :</font>

	<table border="1px" width="98%" bgcolor="white" align="center">
		<tr>
			<th>ID </th>
			<th>Name</th>
			<th>Gender</th>
			<th>Post</th>
			<th>Mobile No.</th>
			<th>E-mail</th>			
			<th>Address</th>
			<th>Education</th>
	<!--	<th>Password</th>	-->
			<th>Branch Code</th>
			<th>ADD</th>
			<th>VEIW</th>
			<th>DELETE</th>
		</tr>
<?php
	$j=1;
	while($j<=$num5)
	{
		$row5= mysqli_fetch_array($result5);
		
?>
	
		<tr>
			<form action="hoinewvalidation2.php" method="POST">
			<td><?php echo $row5['hid']; ?>
			<input type="hidden" name="hid" value="<?php echo $row5['hid']; ?>" /></td>
			<td><?php echo $row5['hname']; ?></td>
			<td><?php echo $row5['gender']; ?></td>
			<td><?php echo $row5['post']; ?></td>
			<td><?php echo $row5['mobileno'];?></td>
			<td><?php echo $row5['email'];?></td>
			<td><?php echo $row5['address'];?></td>
			<td><?php echo $row5['education'];?></td>
	<!--	<td><?php echo $row5['password'];?></td>	-->
			<td><?php echo $row5['bcode'];?></td>
			<td><input type="submit" value="ADD" name="submit"/></td>
			<td><input type="submit" value="VEIW" name="submit"/></td>
			<td><input type="submit" value="DELETE" name="submit"/></td>
			</form>
			
		</tr>
<?php
	$j++;
	}
	
?>
	</table>
	</th>
	</tr>
	</table>
	<br/><br/>
	
	
	
<?php include("footer.php"); ?>

<?php
mysqli_close($con);
?>