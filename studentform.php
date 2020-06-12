<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<?php include("header.php"); ?>
<form name="Login" action="studentformvalidation.php" method="POST"> 
    <table border="1px" bgcolor="lightblue" align ="center" width="100%" height="">	
		<tr>

            <th align="left">Student Information :-
			<table border="1px" bgcolor="lightgreen" align ="center" width="95%" height="">
				<th align="left">Personal Details :
			<table border="1px" bgcolor="lightblue" align ="center" width="95%" height="">
				<tr>
					<td>Student Name :</td>
					<td><input type="text"placeholder="Enter Name" name="studentname"></td>
				</tr>
				<tr>
					<td>Roll Number :</td>
					<td><input type="text"placeholder="Enter Roll No." name="studentrollno"></td>
				</tr>
				<tr>
					<td>Father's Name :</td>
					<td><input type="text"placeholder="Enter Father's Name" name="fathersname"></td>
				</tr>
				<tr>
					<td>Mother's Name :</td>
					<td><input type="text"placeholder="Enter Mother's name" name="mothersname"></td>
				</tr>
				<tr>
					<td>Date of birth :</td>
					<td><input type="date" placeholder="DD/MM/YYYY" name="dob"></td>
				</tr>
				<tr>
					<td>Gender :</td>
					<td><input required type="radio"name="gender" value="Male"/>Male<input type="radio"name="gender" value="Female"/>Female</td>
				</tr>
				<tr>
					<td>Cast :</td>
					<td><select name="cast">
					<option value="none" name="cast"></option>
					<option value="GEN" name="cast">GEN</option>
					<option value="OBC" name="cast">OBC</option>
					<option value="SC" name="cast">SC</option>
					<option value="ST" name="cast">ST</option>
					</select></td>
				</tr>
				<tr>
				<td>Address:</td>
				<td><input type="textarea" name="address"/></td>
				</tr>
				<tr>
				<td>Mobile Number:</td>
				<td><input type="number"name="mobileno" /></td>
				</tr>
				<tr>
				<td>Parent's Number:</td>
				<td><input type="number"name="parentsno" /></td>
				</tr>
				<tr>
					<td>E-mail :</td>
					<td><input type="mail"placeholder="Enter E-mail" name="email"></td>
				</tr>
				
				<tr>
				<td>Student Picture:</td>
				<td><input type="file" name="studentpic" accept="image/*" /></td>
				</tr>
			</table>
			<tr>
				<th align="left">Course Details :-
				<table border="1px"  bgcolor="lightblue" align ="center" width="95%" height="">
					<tr>
					<td>College Code :</td>
					<td><input type="text"placeholder="Enter College Code" name="collegecode"></td>
				</tr>
				<tr>
					<td>College Name :</td>
					<td><input type="text"placeholder="Enter College Name" name="collegename"></td>
				</tr>
				<tr>
					<td>Course Code :</td>
					<td><input type="text"placeholder="Enter Course Code" name="coursecode"></td>
				</tr>
				<tr>
					<td>Course Name :</td>
					<td><input type="text" placeholder="Enter Course Name" name="coursename"></td>
				</tr>
				<tr>
					<td>Duration :</td>
					<td><input type="text" placeholder="Enter Course Duration" name="duration"/></td>
				</tr>
				<tr>
					<td>Date of Admission :</td>
					<td><input type="date" name ="admissiondate"/></td>
				</tr>
				<tr>
					<td>Semester :</td>
					<td><input type="number" name ="semester"/></td>
				</tr>
				<tr>
					<td>Create Password :</td>
					<td><input type="text" name ="password"/></td>
				</tr>
				<tr>
					<td>Re-Enter Password :</td>
					<td><input type="text" name ="repassword"/></td>
				</tr>
				
				</table>
				</th>
			</tr>
			<tr>
			 <td><input type ="submit" value="REQUEST" name="request"/>
			
			 <a href="students.php"><button>CLOSE</button></a>	</td>
			</tr>
		</th>	
		</table>
		</th>
		</tr>
	</table>
	
<?php include("footer.php"); ?>