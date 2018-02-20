<?php 
session_start()
?>
<?php 
 if(!isset($_SESSION['email']))
    header('Location:index.html#login');
  else
    {
      
      ?>
<!DOCTYPE html>
<html lang="en">
<style>
  body {
	font-family: Book Antiqua;
	font-weight: bold;
	background: url(http://media.istockphoto.com/photos/yellow-background-picture-id513886684?k=6&m=513886684&s=612x612&w=0&h=_tg3hEfmFAwP6UgWG_VrwOYWUMIMs_-DZExveGd-WG4=) ;
	background-repeat: no-repeat;
	background-size: cover;
}
  h1
  {
  	text-align:center;
  }
  .container {
    padding: 50px 50px 50px 50px;	
    background-color: #ffffff;
	opacity: 0.9;
    width: 40%;
    border: 1px solid #ccc;
	margin-right: 50%;
	margin-left: 20%;
	margin-top: 5%;
    border-radius: 4px;
}
input[type=button]{
	display: inline-flex;
    background-color: #217AD3;
    color: white;
   padding: 14px 20px;
   margin: 8px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    position: relative;
    left: 25%;
   
}

input[type=button]:hover {
		background-color: #02036b;
		
		}
</style>
<head>
  <title>Tamilnadu Gas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
function viewrequest()
{
  location="distributor1.php";
}
function viewbook()
 {
  location="viewbook.php";
 }

</script>
</head>
<body>

<div class="container">
<input type="button" value="view request" onclick="viewrequest()">
<input type="button" value="view booking" onclick="viewbook()">
<input type="button" value="logout" onclick="dest()">
</div>

</body>
<script>
 function dest()
 {
   
   xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
     
     location="index.html#login";
}
  }
  xmlhttp.open("GET","logout.php",true);
  xmlhttp.send();
  
 }
</script>
</html>
<?php
}
?>