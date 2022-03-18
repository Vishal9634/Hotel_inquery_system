<html>
<head>
<title> this is index page</title>
<link rel="stylesheet" href="stylelogin.css" type="text/css" />
</head>
<body>
<div class="loginbox">
     <img src="img/img1.png" class="avatar"><br>
      <h2>Admin login</h2>
	  <form name="f1" method="get" action="">
	     <p>Username</p>
		   <input type="text" name="t1" placeholder="enter Username">
		   <p> Passward</p>
		    <input type="password" name="p1" placeholder="enter passward">
			 <input type="submit" name="btn" value="login">
			 <a href="#"> Lost your passward?</a><br>
			 <a href="#">Don't have an account</a>
			 <?php
	if(isset($_GET["btn"]))
	{
		require("dbconnection.php");
		$un=$_GET["t1"];
		$pw=$_GET["p1"];
		$sql="select * from user where uname='$un' and passward='$pw'";
		$rs=mysqli_query($conn,$sql);
		if(mysqli_num_rows($rs)>0)
		{
			session_start(); 
			$_SESSION["test"]=$un;
			echo "<script>window.location='Admin.php'</script>";
		}
		else
			echo "Invalid User Name or Password";
	}
?>
			
			</form>
			
    </div>
</body>
</html>