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
$a=$_GET['email'];
$b=$_GET['password'];
$sql="update customer set status='true' where email='$a'";
$result =mysqli_query($conn,$sql);

if($result)
{
	$sql="insert into login values('$a','$b','customer')";
	$result=mysqli_query($conn,$sql);
	?>
	<script>
	alert("succesfully added as tamilnadu gas customer");
	location="distributor.php";
	</script>
	<?php
}
?>
