<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{	
include 'connect.php';
$b="No";
$trip=$_POST['trip'];
if ($trip=="1")
{
$from=$_POST['from'];
$to=$_POST['to'];
$departing=$_POST['departing'];
$returning=$_POST['returning'];
$adults=$_POST['adults'];
$children=$_POST['children'];
$infants=$_POST['infants'];
$class=$_POST['class'];
$sql="INSERT INTO booking ( depature_from,arrival_to,depature_date,arrival_date,adult,children,infant,class,payment)VALUES('$from','$to','$departing','$returning','$adults','$children','$infants','$class','$b')";
if($result=$con->query($sql))
	{
	echo "<script>document.location='payment.html'</script>";
	}
	else
	{
		echo "<script>alert('Error');document.location='book.html'</script>";
	}
}
else
{
$a="One_way_trip";
$from=$_POST['from'];
$to=$_POST['to'];
$departing=$_POST['departing'];
$adults=$_POST['adults'];
$children=$_POST['children'];
$infants=$_POST['infants'];
$class=$_POST['class'];
$sql="INSERT INTO booking ( depature_from,arrival_to,depature_date,arrival_date,adult,children,infant,class,payment)VALUES('$from','$to','$departing','$a','$adults','$children','$infants','$class','$b')";
if($result=$con->query($sql))
	{
	echo "<script>document.location='payment.html'</script>";
	}
	else
	{
		echo "<script>alert('Error');document.location='book.html'</script>";
	}

}
}
?>
