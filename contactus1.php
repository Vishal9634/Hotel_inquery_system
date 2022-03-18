<html>
<head>
<link href="contactus1.css" type="text/css" rel="stylesheet">
  <?php include "bootstrapfile.php"; ?>
</head>
<body>
	   <div class="header">
	     <h1>Contact Us </h1>
		 </div>
	   
	   <div class="contact form">
	   <div class="address">
	   <p><span class="glyphicon glyphicon-map-marker">	   
	   </span>&nbsp;&nbsp;&nbsp; Pryagraj</p>
	   
	   <p><span class="glyphicon glyphicon-phone-alt">	   
	   </span>&nbsp;&nbsp;&nbsp; +919634285611</p>
	   
	   <p><span class="glyphicon glyphicon-envelope">	   
	   </span>&nbsp;&nbsp;&nbsp; vishalsingh1dec1998@gmail.com</p>
	   </div>
	   
	   <div class="contact">
           
	     <form id="contact" method="get" action="">
                 <input type="text" name="t1" id="name" placeholder="Enter u r name" required>
                 <input type="email" name="t2" id="name" placeholder="Enter u r email" required >
             <br><br>
                 <input type="text" name="t3" id="sub"  placeholder="Enter u r subject" required>
		   <br><br>
                 <textarea id="nam" name="t4" rows="7" cols="15" placeholder="Enter your message" required></textarea>
		 <br><br>
                  <input type="submit"name="b1" value="submit" id="na" >
		
             <?php
		if(isset($_GET["b1"]))
		{
		$conn=mysqli_connect("localhost","root","");
		if(!$conn)
		{
			die("Error in Connection".mysqli_error());
		}
		mysqli_select_db($conn,"mydb");
		$name=$_GET["t1"];
		$email=$_GET["t2"];
		$sub=$_GET["t3"];
		$msg=$_GET["t4"];
		$sql="insert into contactus values('$name','$email','$sub','$msg')";
		mysqli_query($conn,$sql);
		if(mysqli_affected_rows($conn)>0)
			echo "Student Registred";
		else
			echo "Student Did Not Registred";
		mysqli_close($conn);
		}
	?>

		 </form>
 
		 </div>
	   <br><br> <br><br>  <br>
	   </div>
	   <footer>
           <a href="#f"><h4 style="color:white"align="center">Give Your Feedback</h4></a>
    </footer>
</body>
</html>