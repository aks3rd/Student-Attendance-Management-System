<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'c_db');
$q4= "select * from studenttemp;";
$result4= mysqli_query($con,$q4);
$num4 = mysqli_num_rows($result4);

?>
<?php include("header1.php"); ?>
	<table width="70%" height="	" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
	<tr>
            <th align="left"> <font size="20"> Notifications :</font>

	<table width="98%" height="	" align = "center"  bgcolor ="white" border="1px" cellspacing="5" cellpadding="5"align="center">
		<tr>
			<th>Roll No.</th>
			<th>Student Name</th>
			<th>Gender</th>
			<th>Picture</th>
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
			<form action="studentformvalidation2.php" method="POST">
			<td><?php echo $row4['studentrollno']; ?>
			<input type="hidden" name="studentrollno" value="<?php echo $row4['studentrollno']; ?>" /></td>
			<td><?php echo $row4['studentname']; ?></td>
			<td><?php echo $row4['gender']; ?></td>
			<td><img src="<?php echo $row4['studentpicture'];?>" alt="image" /></td>
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
<?php include("footer.php"); ?>

<?php
mysqli_close($con);
?>