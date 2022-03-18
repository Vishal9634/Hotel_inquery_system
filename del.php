<html>
<body>
<form method="get" action="">
<table width="500px">
  <tr>
  <td>collageid<input type="text" name="t1" /></td>
  </tr>
  <tr>
  <td><input type="submit" value="delete" name="b1" /></td>
  </tr>
  <tr>
	<td colspan="2">
	<?php
		if(isset($_GET["b1"]))
		{
		$conn= mysqli_connect("localhost","root","");
		mysqli_select_db($conn,"mydb");

		$gid=$_GET["t1"];
		$sql="delete from student where collageid=$gid";
		mysqli_query($conn,$sql);
		if(mysqli_affected_rows($conn)>0)
			echo "Student Record Deleted";
		else
			echo "Student Record Not Deleted";
		mysqli_close($conn);
		}
	?>

	</td>
</tr>
</table>
</form>
</html>