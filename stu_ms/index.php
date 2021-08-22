<!DOCTYPE html>
<html>

<head>
	<title>Student Management System</title>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<div>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li style="float: right;"><a href="login.php">Admin Login</a></li>
		</ul>
	</div>
	<div class="form">
		<h1 align="center">Welcome to Student Management System</h1>

		<form method="post" action="index.php">
			<table style="width: 30%;" align="center" border="1">
				<tr>
					<td colspan="2" align="center"><b> Student Information </b> </td>
				</tr>
				<tr>
					<td><b>Choose Standard </b> </td>
					<td>
						<select name="std">
							<option value="1">1st</option>
							<option value="2">2nd</option>
							<option value="3">3rd</option>
							<option value="4">4th</option>
							<option value="5">5th</option>
							<option value="6">6th</option>
							<option value="7">7th</option>
							<option value="8">8th</option>
							<option value="9">9th</option>
							<option value="10">10th</option>
							<option value="11">11th</option>
							<option value="12">12th</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><b>Enter Rollno.</b></td>
					<td align="left">
						<input type="text" name="rollno" required />
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input class="submit" type="submit" name="submit" value="Show Info."></td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
	$standard = $_POST['std'];
	$rollno = $_POST['rollno'];
	include('dbcon.php');
	include('function.php');

	showdetails($standard, $rollno);
}
?>