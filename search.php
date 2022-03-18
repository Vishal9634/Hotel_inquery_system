<html>
<body>
<form method="get" action="">
<table width="500px">
  <tr>
  <td>collageid<input type="text" name="t1" /></td>
  </tr>
  <tr>
  <td><input type="submit" value="search" name="b1" /></td>
  </tr>
  <tr>
	<td colspan="2">
	<?php
		if(isset($_GET["b1"]))
		{
		$conn= mysqli_connect("localhost","root","");
		mysqli_select_db($conn,"mydb");

		$gid=$_GET["t1"];
		$sql="select * from student where collageid=$gid";
		$rs=mysqli_query($conn,$sql);
		if(mysqli_num_rows($rs)>0)
		{
		?>
		<table width="500px"  border="2">
			<tr style="background-color:black;color:white">
				<td>ID</td><td>Name</td><td>Age</td><td>Address</td><td>profile pic</td>
			</tr>
		
		<?php
		while($row=mysqli_fetch_array($rs))
		{
            ?>
		<tr>
		<td><?php echo $row["collageid"]; ?></td>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["course"]; ?></td>
		<td><?php echo $row["college"]; ?></td>
		<td><img src='<?php echo $row["photos"]; ?>' width="200" height="200" /></td>
	
		
		 
		</tr>
		<?php
		}
	mysqli_close($conn);
	}
	else
		echo "No Record Found";
	}
      ?>
	</td>
</tr>
</table>
</form>
</html>