<html>
<body>
	<?php
		$conn= mysqli_connect("localhost","root","");
		mysqli_select_db($conn,"mydb");
		$sql="select * from student";
		$rs=mysqli_query($conn,$sql);
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
		<td><img src='<?php echo $row["photos"]; ?>' width="140" height="140" /></td>
	     <td><a href="delete.php?id=<?php echo["collageid"];?>">Delete</a></td>
		
		
		 
		</tr>
		<?php
		}
	mysqli_close($conn);
	
      ?>
    </table>        
</body>
</html>