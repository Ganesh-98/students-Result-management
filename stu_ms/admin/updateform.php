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
include('../dbcon.php');
$sid =$_GET['sid'];
$sql ="SELECT * FROM `student` WHERE id='$sid'";
$run = mysqli_query($con,$sql);
$data =mysqli_fetch_assoc($run);

?>

<form method="post" action="updatedata.php" enctype="multipart/form-data">
	<table border="1"  style="line-height: 140%; width: 100%; color:black; text-align: center;font-style: italic;" >
		<tr>
			<td>Roll No</td>
			<td><input type="text" name="rollno" value=<?php echo $data['rollno'];?> ></td>
		</tr>
		<tr>
			<td>Full Name</td>
			<td><input type="text" name="name" value=<?php echo $data['name'];?>  ></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" value=<?php echo $data['city']; ?> ></td>
		</tr>
		<tr>
			<td>Parents Contact Number</td>
			<td><input type="number" name="pcont" value=<?php echo $data['pcont'];?> ></td>
		</tr>
		<tr>
			<td>Standerd</td>
			<td><input type="number" name="std" value=<?php echo $data['standerd']; ?> required/> </td>
		</tr>
		<tr>
			<td>Image</td>
			<input type="hidden" name="sid" value="<?php echo $data['id']; ?>"/>
			<td><input type="file" name="simg" placeholder="Upload Image" required/> </td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="submit" value="submit">
			</td>
		</tr>

	</table>
</form>	