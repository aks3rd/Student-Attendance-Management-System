<?php
session_start();

?>

<?php include("header.php"); ?>
	<form name="StudentLogin" action="studentloginvalidation.php" method="POST"> 
	<table width="400" height="300" align = "center"  bgcolor ="lightblue"border="1px" cellspacing="5" cellpadding="5">
	<tr>
	 <th align="left"> <font size="20">Student Login</font>
	   <table bgcolor="white" width="380" height="280">
	   <tr>
	    <td>
        
           <table size="22" align=center>
			<tr>
			  <td>Student Id : </td>
			  <td><input type="text" name="studentid" placeholder ="Enter Login Id" /></td>
			 </tr>
			 <tr></tr>
			 <tr>
              <td>Password : </td>
			  <td><input type="password" name="studentpassword" /></td>
             </tr>
			 <tr></tr>
			 <tr>
			  <td colspan="2" align = center  ><a href="createnewid.php" id="la">Create New Id...</a></td>
			 </tr>
			 <tr></tr>
			 <tr>
				<td colspan="2" align = center><input type="submit" value="Login" /></td>
			</tr>
			
            
            
        </td>
		</tr>
		</table>
		</td>
		</tr>
		</table>

	</th>
	</tr>
	</table>
	</form>
<?php include("footer.php"); ?>
