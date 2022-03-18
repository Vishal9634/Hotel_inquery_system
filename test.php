 <html>
<body>
<form name="form" action="" method="post" enctype="multipart/form-data">
<table width="500px">
  <tr>
  <td>collageid<input type="text" name="t1" /></td>
  </tr>
  <tr>
  <td>Nmae<input type="text" name="t2" /></td>
  </tr>
  <tr>
  <td>course<input type="text" name="t3" /></td>
   </tr>
  <tr>
  <td>college<input type="text" name="t4" /></td>
  </tr>
  <tr>
  <td>image<input type="file" name="image1" /></td>
  </tr>
  <tr> 
  <td><input type="submit" value="Insert" name="t5" /></td>
  </tr>
  
<tr>
<td colspane="2">
<?php

        if(isset($_POST["t5"]))
		{
		$conn= mysqli_connect("localhost","root","");
		mysqli_select_db($conn,"mydb");

		$gid=$_POST ["t1"];
		$gname=$_POST["t2"];
		$course=$_POST["t3"];
		$college=$_POST["t4"];
		
		$file = $_FILES ['image1'];
         $name1 = $file ['name'];
        $type = $file ['type'];
        $size = $file ['size'];
      $tmppath = $file ['tmp_name']; 
		move_uploaded_file ($tmppath, 'img/'.$name1);
		$path='img/'.$name1;
       $sql="insert into student values($gid,'$gname','$course','$college',' $path')";
		mysqli_query($conn,$sql);
		if(mysqli_affected_rows($conn)>0)
			echo "Student Registred";
		else
			echo "Student Did Not Registred";
		mysqli_close($conn);
		}
?>
</td>
</tr>
</table>
</form>
</body>
</html>