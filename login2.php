<html>
<head>
<title> this is login 2 page</title>
</head>
<body>
<form name="f1" method="get" action="">
<table width="500px" align="center" border="2px">
  <tr>
  <td colspane="2"> login page </td>
  </tr>
  <tr>
  <td>user name </td>
    <td><input type="text" name="t1" placeholder="enter Username"/> </td>
	</tr>
	<tr>
  <td>passward </td>
    <td><input type="password" name="t2" placeholder="enter password"/> </td>
	</tr>
		  <tr>
			<td> <input type="submit" name="b1" value="login"></td>
			 </tr>
	</table>
	 <?php
	if(isset($_GET["b1"]))
	{
		require("dbconnection.php");
		$un=$_GET["t1"];
		$pw=$_GET["t2"];
		$sql="select * from user1 where username='$un' and password='$pw'";
		$rs=mysqli_query($conn,$sql);
		if(mysqli_num_rows($rs)>0)
		{
		
			echo "<script>window.location='hometest.php'</script>";
		}
		else
			echo "Invalid User Name or Password";
	}
	?>
</form>
</body>
</html>