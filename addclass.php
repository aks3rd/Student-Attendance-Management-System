
<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<?php include("header1.php"); ?>
	<form name="Login" action="classsubmission.php" method="POST"> 
    <table border="1px" bgcolor="lightblue" align ="center" width="70%" height="">	
		<tr>

            <th align="left">Class Information :-
			<table border="1px" bgcolor="lightblue" align ="center" width="95%" height="">
				<tr>
					<td>Subject Code :</td>
					<td><input type="text"placeholder="Enter Subject Code" name="scode"></td>
				</tr>
				<tr>
					<td>Faculty Id :</td>
					<td><input type="text"placeholder="Enter Your Id" name="fid"></td>
				</tr>
				<tr>
					<td>Branch Code :</td>
					<td><input type="text"placeholder="Enter Branch Code" name="bcode"></td>
				</tr>
				<tr>
					<td>Semester :</td>
					<td><input type="text"placeholder="Enter Semester" name="semester"></td>
				</tr>
				<tr>
					<td>Session :</td>
					<td><input type="date" placeholder="DD/MM/YYYY" name="session"></td>
				</tr>
				<tr>
					<td><input type ="submit" value="SUBMIT" name="submit"/></td>
			
					<td><a href="home.php"><button>CLOSE</button></a></td>
				</tr>

			</table>
			</th>
		</tr>
	</table>
	</form>
 <?php include("footer.php"); ?>