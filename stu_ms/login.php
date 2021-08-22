<?php
session_start();
if(isset($_SESSION['uid']))
        {
            header('location:admin/admindash.php');
           
        }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body bgcolor="#C0C0C0">
<h1 align="center">Admin Login</h1>
<form action="login.php" method="post">
    <table align="center" style="margin-top:50px;">

        <tr>
        <td>Username</td>
        <td><input type="text" name="username"/></td>
        </tr>

        <tr>
        <td>Password</td>
        <td><input type="password" name="pass"/></td>

        </tr>
        <tr align="center"><td colspan="2"><input type="submit" name="login" value="submit"/></td></tr>

    </table>
</form>

<h2> <a href="index.php">Go To HomePage</a></h2>

</body>
</html>

<?php
include ('dbcon.php');

if (isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $query = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";

    $run = mysqli_query($con, $query);
    $row = mysqli_num_rows($run);
    if ($row < 1)

    {

?>
  	<script>
       alert('Username or Password do not match !!');
       window.open('login.php','_self'); 
    </script>
    <h1>Error</h1>
 
<?php
    }

    else
    {
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];
        
        $_SESSION['uid'] =$id;
        header('location:admin/admindash.php');

        //echo "id = ". $id;
    }
}    

?>
