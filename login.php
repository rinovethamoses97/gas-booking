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
$a=$_POST['email'];
$b=$_POST['password'];
$c=$_POST['category'];
$sql="select *from login where email='$a' and password='$b'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if($result==true && $row['category']==$c)
{
	$_SESSION['email']=$a;
	if($c=="distributor")
	{
		header('Location:distributor.php');
	}
	else
	{
		header('Location:customerui.php');
	}
	
}
else
	{
		?><script>
		  alert("wrong email or password");
		  location="index.html#login";
		  </script><?php

	}
 ?>
