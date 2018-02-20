<?php 
session_start()
?>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="gas";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
	 // echo "connection successful<br>";
$a=$_SESSION['email'];

$sql="select *from booking where cus_email='$a'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$date1=$row['date'];
$date2= date("Y-m-d");
if(($date2-$date1)<=10)
{
	echo "you cant book within 10 days of previous booking";
}
else
{







$sql="select *from customer where email='$a'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$b=$row['distributor'];
$sql="select *from distributor where name='$b'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$b=$row['email'];
$c="false";
$d= date("Y-m-d");
$e= date("h:i:s");
$sql="insert into booking values('$a','$b','$c','$d')";
$result=mysqli_query($conn,$sql);
if($result)
	echo "booking successs";
}

 ?>
