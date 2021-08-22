<?php
session_start();
        if(isset($_SESSION['uid']))
        {
        	
        }
        else
        {
        	header('location: ../login.php');
        }

?>
<?php

include('header.php');
include('titlehead.php');

?>

</div>

<div class="dashboard">
	<table style="width: 50%" align="center">
		<tr>
			<td>1.</td>
			<td><a href="addstudent.php">Insert Student</a></td>
		</tr>
		<tr>
			<td>2.</td>
			<td><a href="updatestudent.php"> Update Student</a></td>
		</tr>
		<tr>
			<td>3.</td>
			<td><a href="deletestudent.php">Delete Student</a> </td>
		</tr>
	</table>
	
</div>

</body>
</html>
