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

$a=$_GET['q'];
//echo $a;
$sql="update booking set status='true' where cus_email='$a'";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo "delivered";
}

?>