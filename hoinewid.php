<?php
session_start();
?>
<?php include("header.php"); ?>
 
 <form name="Login" action="hoinewidvalidation.php" method="POST"> 
    <table border="1px" bgcolor="lightblue" align ="center" width="70%" height="">	
		<tr>

            <th align="left">HOI Information :-
			<table border="1px" bgcolor="lightblue" align ="center" width="95%" height="">
				<tr>
					<td> Name :</td>
					<td><input type="text"placeholder="Enter Name" name="hname"></td>
				</tr>
				<tr>
					<td>Your Id :</td>
					<td><input type="text"placeholder="Enter Faculty Id" name="hid"></td>
				</tr>
				<tr>
					<td>Gender :</td>
					<td><input required type="radio" value="Male" name="gender"/>Male<input type="radio" value="Female" name="gender"/>Female</td>
				</tr>
				<tr>
				<td>Your Post:</td>
				<td><input type="text" placeholder="Enter Your Post"name="post" /></td>
				</tr>
				<td>Contact No :</td>
				<td><input type="text" placeholder="Enter Number"name="mobileno" /></td>
				</tr>
				<tr>
					<td>E-mail :</td>
					<td><input type="mail"placeholder="Enter E-mail" name="email"></td>
				</tr>
				<tr>
				<td>Address :</td>
				<td><input type="text" placeholder="Enter Address" name="address" /></td>
				</tr>
				<tr>
				<td>Education :</td>
				<td><input type="text" placeholder="Enter Your Education" name="education" /></td>
				</tr>
				<tr>
				<td>Password :</td>
				<td><input type="password" name="password" /></td>
				</tr>
				<tr>
				<td>College Code :</td>
				<td><input type="text" placeholder="Enter code" name="ccode" /></td>
				</tr>
				<tr>
				<td>Branch Code :</td>
				<td><input type="text" name="bcode" /></td>
				</tr>
			</table>
			</th>
		</tr>
		<tr>
			 <td><input type ="submit" value="REQUEST" name="request"/>
			
			 <a href="home.php"><button>CLOSE</button></a></td>
		</tr>
		
	</table>
	
<?php include("footer.php"); ?>