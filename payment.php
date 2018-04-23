<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	include 'connect.php';
	$a="Yes";
	$sql=" select id from booking order by id desc limit 1;";
	$result = $con->query($sql);
	if ($result->num_rows > 0)
	{
		while($row = $result->fetch_array())
		{
			$id=$row['id'];
			echo$id;
		}
	}
	else
	{
		echo "<script>alert('error');document.location='payment.html'</script>";
	}
	$sql1="update booking set payment='$a' where id='$id'";
	if ($result1 = $con->query($sql1))
	{
		echo "<script>alert('Booking done PNR=$id');document.location='ticket1.php'</script>";
	}
	else
	{
		echo "<script>alert('error');document.location='payment.html'</script>";
	}
}
?>
