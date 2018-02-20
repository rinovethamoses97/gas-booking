<?php
$servername="localhost";
$username="root";
$password="";
$dbname="gas";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$a=$_GET['q'];
$i=0;
$flag=0;
if($conn)
	 // echo "connection successful<br>";

	 $sql="select *from distributor where district='$a'";
		 $result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($result))
	{
		$flag=1;
       $arr[$i]=$row['name'];
       $i++;
	}
		 
 
 // $a=array("rino","moses");
if($flag==1)
{ $aa=json_encode($arr);
  echo $aa;
}
 ?>