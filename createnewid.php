<?php
 session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php include("header.php"); ?>
       <table border="1px" bgcolor="lightblue" align="center" width="200" height="300">
            <tr>
                <th>User Type
				<table border="1px" align="center" width="180" height="280">
					<tr><td><a href="studentform.php" ><button>Student</button></a></td></tr>
					<tr><td><a href="facultynewid.php" ><button>Faculty</button></a></td></tr>
					<tr><td><a href="hoinewid.php" ><button>Higher Department</button></a></td></tr>
					<tr><td><a href="parentnewid.php" ><button>Parents</button></a></td></tr>
				</table>
				</th>
            </tr>
        </table>
    <?php include("footer.php"); ?>