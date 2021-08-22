<?php

	$con = mysqli_connect('127.0.0.1','root','','stu_ms');
if(!$con)
{
?>
	<h1> 'Not connected'</h1>
<?php
}
if(!mysqli_select_db($con,'stu_ms'))
{
	echo 'Not selected';
}

?>
