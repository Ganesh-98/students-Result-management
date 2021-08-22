<?php

include('../dbcon.php');
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$id =$_POST['sid'];
	$city=$_POST['city'];
	$pcont=$_POST['pcont'];
	$std=$_POST['std'];
	$imagename = $_FILES['simg']['name'];
	$tempname = $_FILES['simg']['tmp_name'];
	move_uploaded_file($tempname,"../dataimg/$imagename");
	$qry = "UPDATE `student` SET `rollno` = '$rollno', `name` = '$name', `city` = '$city', `pcont` = '$pcont', `standerd` = '$std' WHERE `id` = '$id' ";

	
	$run = mysqli_query($con,$qry); 
	echo $run;
	if ($run==TRUE) {
		?>

		<script>
			alert('Data Updated Successfully');
			window.open('updateform.php?sid=<?php echo $id; ?>','_self');
		</script>
		<?php
	}
?>