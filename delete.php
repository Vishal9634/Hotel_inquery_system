<html>
<body>
    collageid<input type="text" name="t1"/>
    <input type="submit" value="delete" name="b1"/>
    <?php
		if(isset($_GET["b1"]))
		{
		$conn= mysqli_connect("localhost","root","");
		mysqli_select_db($conn,"mydb");

		$gid=$_GET["t1"];
		$sql="delete from student where collageid=$gid";
		mysqli_query($conn,$sql);
		if(mysqli_affected_rows($conn)>0)
		  echo "record should be deleted";
		else
			echo "Student Record Not Deleted"; 
		mysqli_close($conn);
		}
?>  
	</body>
</html>