<html>
<head>
	<style type="text/css">
		table
{
	width:100%;
    margin-top:50px;
	border:1px solid black;
	text-transform: uppercase;
	}
	</style>
	<title>Tamilnadu Gas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
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
$sql="select *from booking where dis_email='$a' && status='false'";
$result=mysqli_query($conn,$sql);
$n= mysqli_num_rows($result);
?>
<table class="table table-hover">
<tr>
   <th>NAME</th>
   <th>EMAIL</th>
   <th>PHONENO</th>
   <th>DISTRICT</th>
   <th>DELIVER</th>
   </tr>

<?php
while($row=mysqli_fetch_array($result))
{

$x=$row['cus_email'];

 $sql1="select *from customer where email='$x'";
 $result1=mysqli_query($conn,$sql1);
 $row1=mysqli_fetch_assoc($result1);
?><tr><td> <?php echo $row1['name']; ?> </td>
<td><?php echo $row1['email']; ?></td>

<td><?php echo $row1['phoneno']; ?></td>
<td> <?php echo $row1['district']; ?> </td>
<td><input type="button" value="deliver" id="<?php echo $row1['email']; ?>" onclick="del(this.id)"></td>
</tr>

<?php
} 

?>

</body>
<script>
 function del(a)
 {
 xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {

     alert(this.responseText);
     location.reload();
}
  }
  xmlhttp.open("GET","deliver.php?q="+a,true);
  xmlhttp.send();
  }
</script>
</html>