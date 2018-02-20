<html>
<style>
#new_connection,h3,p
{
	//text-align: center;
}

body {
	font-family: Book Antiqua;
	font-weight: bold;
	background: url(http://www.scienceteller.com/resources/SciTell-Background.gif) ;
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
input[type=text],input[type=mail],input[type=password],input[type=number],input[type=date],#district,#distributor {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	}
input[type=submit]{
	display: inline;
    background-color: #217AD3;
    color: white;
   padding: 14px 20px;
   margin: 8px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    position: relative;
    left: 50px;
   
}
}
input[type=submit]:hover {
		background-color: #02036b;
		
		}
.container {
    padding: 50px 50px 50px 50px;	
    background-color: #ffffff;
	opacity: 0.9;
    width: 100px;
    border: 1px solid #ccc;
	/*margin-right: 50%;
	margin-left: 40%;
	margin-top: 5%;*/
    border-radius: 4px;
}
.feed {
     display: inline-flex;
	 margin-left: 20%;
	 }
.img{
    margin: 5%;
    
	}
	</style>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="gas";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
	//  echo "connection successful<br>";

 $a=$_POST['name'];
$b=$_POST['dob'];
$c=$_POST['phoneno'];
$d=$_POST['email'];
 $e=$_POST['password'];
$f=$_POST['district'];
$g=$_POST['distributor'];
$h="false";

$sql="select *from customer where email='$d'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if($row==true)
{
   ?>
   <script>
   alert("user already exist");
   location="register.html";
   </script><?php        
}
else
{
$sql="insert into customer values('$a','$b','$c','$d','$e','$f','$g','$h')";
$result=mysqli_query($conn,$sql);
if($result)
{
	header('Location:new.html');
	//echo "your application has been accepted<br>";
	//echo "approach your gas agency and provide your original documents and other details to start booking cylinders till that your appliaction will be withheld";
}

}
 ?>
 <br><br>
 <!-- <a href="index.html">home</a> -->
 <center>
 <h1>PAYMENT</h1>
 <form action="" method="" onsubmit="check()">
<label for="name">Card No<span id="sp1" style="color:red;">*</span></label>
<input type="text" name="cardno" id="cardno" placeholder="Card No" required>
<br>

<label for="name">Pin<span id="sp2" style="color:red;">*</span></label>
<input type="password" name="pin" id="pin" placeholder="Pin" required>
<br>
<input type="submit" value="Register" >
</form>
</center>
</body>
<script>
function check()
{
	alert("cc");
	var pin=document.getElementById("pin").value;
	var cardno=document.getElementById("cardno").value;
	if(pin.length<4)
	{
		document.getElementById("sp1").innerHTML="pin not valid";
		flag1=0;
	}
	else
	{
		flag1=1;
	}
	if(cardno.length<10)
	{
		document.getElementById("sp2").innerHTML="card no not valid";
		flag2=0;
	}
	else
	{
		flag2=1;
	}
    if(flag1==1 && flag2==1)
    {
        alert("payment success");
    }
    else
    {
    	return false;
    }
	
}
</script>
</html>