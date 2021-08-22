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

<form method="post" action="addstudent.php" enctype="multipart/form-data">
	<table border="1"  style="line-height: 140%; width: 100%; color:black; text-align: center;font-style: italic;" >
		<tr>
			<td>Roll No</td>
			<td><input type="text" name="rollno" placeholder="Enter Roll Number"> </td>
		</tr>
		<tr>
			<td>Full Name</td>
			<td><input type="text" name="name" placeholder="Enter Full Name" required/> </td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" placeholder="Enter City" required/> </td>
		</tr>
		<tr>
			<td>Parents Contact Number</td>
			<td><input type="number" name="pcont" placeholder="Enter Parents Contact Number"> </td>
		</tr>
		<tr>
			<td>Standerd</td>
			<td><input type="number" name="std" placeholder="Enter Standerd" required/> </td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="simg" > </td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="submit" value="submit">
			</td>
		</tr>

	</table>
	
</form>


<?php

if (isset($_POST['submit'])) {
	
	include('../dbcon.php');
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$pcont=$_POST['pcont'];
	$std=$_POST['std'];
	$imagename = $_FILES['simg']['name'];
	$tempname = $_FILES['simg']['tmp_name'];
	move_uploaded_file($tempname,"../dataimg/$imagename");
	$qry = "INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standerd`,`image`) VALUES ('$rollno','$name','$city','$pcont','$std','$imagename')";

	
	$run = mysqli_query($con,$qry); 
    
	if ($run==true) {
		?>

		<script>
			alert('Data Inserted Successfully.');
		</script>
		<?php
	}
?>
<?php


}
?>
