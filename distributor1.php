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
$sql="select *from distributor where email='$a'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$b="false";
$c=$row['name'];
 $sql="select *from customer where status='$b' and distributor='$c'";
 $result=mysqli_query($conn,$sql);
 ?> <table class="table table-hover">
	 <tr>
	 <th>NAME</th>
	 <th>EMAIL</th>
	 <th>PHONENO</th>
	 <th>DOB</th>
	 <th>DISTRICT</th>
	 <th>ADD</th>
	 </tr>
<?php
  while($row=mysqli_fetch_assoc($result))
  {
      ?><tr>
       <td><?php echo $row['name'];?></td>
       <td><?php echo $row['email'];?></td>
       <td><?php echo $row['phoneno'];?></td>
       <td><?php echo $row['dob'];?></td>
       <td><?php echo $row['district'];?></td>
       <td>
       <form action="update.php" method="get">
       <input type="hidden" value="<?php echo $row['email']?>" name="email">
       <input type="hidden" value="<?php echo $row['password']?>" name="password">
       <input type="submit" value="ADD">
        </form>
       </td>
       </tr>
       <?php
  }
 ?>
 </table>
 <script>
 </script>
</body>
</html>