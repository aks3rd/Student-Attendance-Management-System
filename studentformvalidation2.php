<?php
session_start();
$studentrollno=$_POST['studentrollno'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'c_db');
	
if($_POST['submit']=="ADD")
{
	
	$q="select * from studenttemp where studentrollno='$studentrollno';";
	$result=mysqli_query($con,$q);
	$row=mysqli_fetch_array($result);
	$studentname=$row['studentname'];
	$studentrollno=$row['studentrollno'];
	$fathersname=$row['fathersname'];
	$mothersname=$row['mothersname'];
	$dob=$row['dob'];
	$gender=$row['gender'];
	$studentname=$row['studentname'];
	$cast=$row['cast'];
	$address=$row['address'];
	$mobileno=$row['mobileno'];
	$parentsno=$row['parentsno'];
	$email=$row['email'];
	$studentpicture=$row['studentpicture'];
	$ccode=$row['ccode'];
	$cname=$row['cname'];
	$bcode=$row['bcode'];
	$bname=$row['bname'];
	$duration=$row['duration'];
	$admissiondate=$row['admissiondate'];
	$semester=$row['semester'];
	$password=$row['password'];
	$q ="insert into student(studentrollno,studentname,fathersname,mothersname,dob,gender,cast,address,mobileno,parentsno,studentpicture,email,ccode,bcode,bname,duration,admissiondate,semester,password) values('$studentrollno','$studentname','$fathersname','$mothersname','$dob','$gender','$cast','$address','$mobileno','$parentsno','$studentpicture','$email','$ccode','$bcode','$bname','$duration','$admissiondate',$semester,'$password');";
 
	mysqli_query($con,$q);
	$q2="select * from subject where semester='$semester' and bcode='$bcode';";
	$result = mysqli_query($con,$q2);
	$num = mysqli_num_rows($result);
	for($i=1;$i<=$num;$i++)
	{
		$row = mysqli_fetch_array($result);
		$vscode=$row['scode'];
		$q2="insert into studentsubject(scode,studentrollno,semester) values('$vscode','$studentrollno',$semester);";
		$result = mysqli_query($con,$q2);
	}
	$q2="delete from studenttemp where studentrollno='$studentrollno'";
	mysqli_query($con,$q2);

}	
elseif($_POST['submit']=="VEIW")
{
	$q1="select * from studenttemp where studentrollno='$studentrollno'";
	$result=mysqli_query($con,$q1);
	$row1=mysqli_fetch_array($result);
		
?>		
<?php include("header.php"); ?>
 <form name="Login" action="studentformupdation.php" method="POST"> 
    <table border="1px" bgcolor="lightblue" align ="center" width="70%" height="">	
		<tr>

            <th align="left">Student Information :-
			<table border="1px" bgcolor="lightgreen" align ="center" width="95%" height="">
				<th align="left">Personal Details :
			<table border="1px" bgcolor="lightblue" align ="center" width="95%" height="">
				<tr>
					<td>Student Name :</td>
					<td><input type="text" value="<?php echo $row1['studentname'];?>" name="studentname"></td>
				</tr>
				<tr>
					<td>Roll Number :</td>
					<td><input type="text"value="<?php echo $row1['studentrollno'];?>" name="studentrollno"></td>
				</tr>
				<tr>
					<td>Father's Name :</td>
					<td><input type="text"value="<?php echo $row1['fathersname'];?>" name="fathersname"></td>
				</tr>
				<tr>
					<td>Mother's Name :</td>
					<td><input type="text"value="<?php echo $row1['mothersname'];?>" name="mothersname"></td>
				</tr>
				<tr>
					<td>Date of birth :</td>
					<td><input type="date" value="<?php echo $row1['dob'];?>" name="dob"></td>
				</tr>
				<tr>
					<td>Gender :</td>
					<td><input type="text" value="<?php echo $row1['gender'];?>" name="gender"></td>
				</tr>
				<tr>
					<td>Cast :</td>
					<td><input type="text" value="<?php echo $row1['cast'];?>" name="cast"></td>
				</tr>
				<tr>
				<td>Address:</td>
				<td><input type="textarea" value="<?php echo $row1['address'];?>" name="address"/></td>
				</tr>
				<tr>
				<td>Mobile Number:</td>
				<td><input type="number" value="<?php echo $row1['mobileno'];?>"name="mobileno" /></td>
				</tr>
				<tr>
				<td>Parent's Number:</td>
				<td><input type="number" value="<?php echo $row1['parentsno'];?>"name="parentsno" /></td>
				</tr>
				<tr>
					<td>E-mail :</td>
					<td><input type="mail"value="<?php echo $row1['email'];?>" name="email"></td>
				</tr>
				
				<tr>
				<td>Student Picture:</td>
				<td><input type="text" value="<?php echo $row1['studentpicture'];?>" name="studentpic" accept="image/*" /></td>
				</tr>
			</table>
			<tr>
				<th align="left">Course Details :-
				<table border="1px"  bgcolor="lightblue" align ="center" width="95%" height="">
					<tr>
					<td>College Code :</td>
					<td><input type="text" value="<?php echo $row1['ccode'];?>" name="collegecode"></td>
				</tr>
				<tr>
					<td>College Name :</td>
					<td><input type="text"value="<?php echo $row1['cname'];?>"name="collegename"></td>
				</tr>
				<tr>
					<td>Course Code :</td>
					<td><input type="text"value="<?php echo $row1['bcode'];?>" name="coursecode"></td>
				</tr>
				<tr>
					<td>Course Name :</td>
					<td><input type="text" value="<?php echo $row1['bname'];?>" name="coursename"></td>
				</tr>
				<tr>
					<td>Duration :</td>
					<td><input type="text"value="<?php echo $row1['duration'];?>" name="duration"/></td>
				</tr>
				<tr>
					<td>Date of Admission :</td>
					<td><input type="date" value="<?php echo $row1['admissiondate'];?>" name ="admissiondate"/></td>
				</tr>
				<tr>
					<td>Semester :</td>
					<td><input type="number" value="<?php echo $row1['semester'];?>" name ="semester"/></td>
				</tr>
				<tr>
					<td>Create Password :</td>
					<td><input type="text" value="<?php echo $row1['password'];?>" name ="password"/></td>
				</tr>
				<tr>
					<td>Re-Enter Password :</td>
					<td><input type="text" value="<?php echo $row1['password'];?>" name ="repassword"/></td>
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
	
<?php include("footer.php"); ?>
<?php
}	
elseif($_POST['submit']=="DELETE")
{			
	$q2="delete from studenttemp where studentrollno='$studentrollno'";
	mysqli_query($con,$q2);
}
mysqli_close($con);
?>