<?php
session_start();
$hid=$_POST['hid'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'c_db');
	
if($_POST['submit']=="ADD")
{
	
	$q="select * from hoitemp where hid='$hid'";
	$result=mysqli_query($con,$q);
	$row=mysqli_fetch_array($result);
	$hname=$row['hname'];
	$hid=$row['hid'];
	$gender=$row['gender'];
	$post=$row['post'];
	$mobileno=$row['mobileno'];
	$email=$row['email'];
	$address=$row['address'];
	$education=$row['education'];
	$password=$row['password'];
	$ccode=$row['ccode'];
	$bcode=$row['bcode'];
$q = "insert into hoi(hid,hname,gender,post,mobileno,email,address,education,password,ccode,bcode) values('$hid','$hname','$gender','$post','$mobileno','$email','$address','$education','$password','$ccode','$bcode');";
mysqli_query($con,$q); 
	$q2="delete from hoitemp where hid='$hid';";
	mysqli_query($con,$q2);
	
}	
elseif($_POST['submit']=="VEIW")
{
	$q1="select * from hoitemp where hid='$hid'";
	$result=mysqli_query($con,$q1);
	$row1=mysqli_fetch_array($result);
		
?>		
<?php include("header.php"); ?>
 <form name="Login" action="hoiformupdation.php" method="POST"> 
    <table border="1px" bgcolor="lightblue" align ="center" width="70%" height="">	
		<tr>

            <th align="left">HOI Information :-
			<table border="1px" bgcolor="lightblue" align ="center" width="95%" height="">
				<tr>
					<td>Name :</td>
					<td><input type="text" value="<?php echo $row1['hname']?>" name="hname"></td>
				</tr>
				<tr>
					<td>Id :</td>
					<td><input type="text" value="<?php echo $row1['hid']?>" name="hid"></td>
				</tr>
				<tr>
					<td>Gender :</td>
					<td><input type="text"  value="<?php echo $row1['gender']?>" name="gender"/></td>
				</tr>
				
				<tr>
					<td>Post :</td>
					<td><input type="text"  value="<?php echo $row1['post']?>" name="post"/></td>
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
				<td>Education :</td>
				<td><input type="text"  value="<?php echo $row1['education']?>"  name="education" /></td>
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
			
			 <a href="home.php"><button>CLOSE</button></a></td>
		</tr>
		</th>	
		</table>
		</th>
		</tr>
	</table>
	</form>
<?php include("footer.php"); ?>
<?php
}	
elseif($_POST['submit']=="DELETE")
{			
	$q2="delete from hoitemp where fid='$hid'";
	mysqli_query($con,$q2);
	
}
mysqli_close($con);
?>	