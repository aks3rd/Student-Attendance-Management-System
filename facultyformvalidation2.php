<?php
session_start();
$fid=$_POST['fid'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'c_db');
	
if($_POST['submit']=="ADD")
{
	
	$q="insert into faculty select * from facultytemp where fid='$fid'";
	$result=mysqli_query($con,$q);
	$q2="delete from facultytemp where fid='$fid'";
	mysqli_query($con,$q2);
	
}	
elseif($_POST['submit']=="VEIW")
{
	$q1="select * from facultytemp where fid='$fid'";
	$result=mysqli_query($con,$q1);
	$row1=mysqli_fetch_array($result);
		
?>		
<?php include("header.php"); ?>
 <form name="Login" action="facultyformupdation.php" method="POST"> 
    <table border="1px" bgcolor="lightblue" align ="center" width="70%" height="">	
		<tr>

            <th align="left">Faculty Information :-
			<table border="1px" bgcolor="lightblue" align ="center" width="95%" height="">
				<tr>
					<td>Faculty Name :</td>
					<td><input type="text" value="<?php echo $row1['fname']?>" name="fname"></td>
				</tr>
				<tr>
					<td>Faculty Id :</td>
					<td><input type="text" value="<?php echo $row1['fid']?>" name="fid"></td>
				</tr>
				<tr>
					<td>Gender :</td>
					<td><input type="text"  value="<?php echo $row1['gender']?>" name="gender"/></td>
				</tr>
				<tr>
				<td>Mobile Number:</td>
				<td><input type="number" value="<?php echo $row1['mobileno']?>" name="mobileno" /></td>
				</tr>
				<tr>
					<td>E-mail :</td>
					<td><input type="mail" value="<?php echo $row1['email']?>"  name="email"></td>
				</tr>
				<tr>
				<td>Address :</td>
				<td><input type="text"  value="<?php echo $row1['address']?>"  name="address" /></td>
				</tr>
				<tr>
				<td>Degree :</td>
				<td><input type="text"  value="<?php echo $row1['degree']?>"  name="degree" /></td>
				</tr>
				<tr>
				<td>Password :</td>
				<td><input type="password"  value="<?php echo $row1['password']?>" name="password" /></td>
				</tr>
				<tr>
				<td>College Code :</td>
				<td><input type="text"  value="<?php echo $row1['ccode']?>"  name="ccode" /></td>
				</tr>
				<tr>
				<td>Branch Code :</td>
				<td><input type="text"  value="<?php echo $row1['bcode']?>" name="bcode" /></td>
				</tr>
			</table>
			</th>
		</tr>
		<tr>
			 <td><input type ="submit" value="UPDATE" name="update"/>
			
			 <input type ="button" value="CLOSE" name="close"/></td>
		</tr>
		</th>	
		</table>
		</th>
		</tr>
	</table>
	</form>
</body>
</html>
<?php
}	
elseif($_POST['submit']=="DELETE")
{			
	$q2="delete from facultytemp where fid='$fid'";
	mysqli_query($con,$q2);
	
}
?>