<?php
session_start();
?>

<?php
if(isset($_POST['login']))
{
	include 'connect.php';
	$username=$_POST['u_name'];
	$password=$_POST['pass'];
	echo $username;
	echo $password;
	$sql= " SELECT * FROM login WHERE user_id='$username' AND password='$password'";
	$result=mysqli_query($con,$sql);
	if(($result->num_rows)>0)
	{
		$_SESSION['username']=$username;
//echo"correctr";
			header('location:index.html');

	}
	else
	{
		$s= " SELECT * FROM login WHERE user_id='$username'";
		$r=mysqli_query($con,$s);
		if(($r->num_rows)>0)
		{
			//$a=$row['user_id'];
			echo '<script type="text/javascript">alert("Incorrect password")</script>';

		}
		else
		{
			echo '<script type="text/javascript">alert("user in invalid")</script>';
		}
	}
}
?>
