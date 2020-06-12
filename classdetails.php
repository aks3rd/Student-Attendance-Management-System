<?php
 session_start();
 ?>
<?php include("header.php"); ?>
		<form name="Attendance" action="attendanceform.php" method="POST"> 
		<table width="500" height="200" align = "center"  bgcolor ="blue"border="1px" cellspacing="5" cellpadding="5">
		<tr>
				<th align="left"> <font size="20">Enter Details :</font>
					<table bgcolor="lightblue" border="1px" width="480" height="180" size="22">
				<tr>
						<!--  <th>Faculty Id </th>  -->
							  <th>Subject Code</th>
							  <th>Class No. </th>
							  <th>Branch Code </th>
							  <th>Semester </th>
							  <th>Date </th>
				</tr>
				<tr>
						<!--	<td><input type="text" name="fid"/></td>   -->
								<td><input type="text" name="scode"/></td>
								<td><input type="number" name="classno" /></td>
								<td><input type="text" name="bcode" /></td>
								<td><input type="number" name="semester" /></td>
								<td><input type="date" placeholder="YYYY/MM/DD" name="date" /></td>
							</tr>
							<tr><td colspan="5"><input type="submit" value="SUBMIT"/>
			</table>
				</th>
		</tr>
		</table>
		</form>
		<?php include("footer.php"); ?>