<html>
<head>
    
 <link href="signin.css" rel="stylesheet">
     <?php include "bootstrapfile.php";?>
</head>
<body style="background-color:powderblue">

    <div class="container">

      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="email" class="form-control" name="E1" placeholder="Email address" required autofocus>
        <input type="password" class="form-control"name="p1" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" name="btn" type="submit">Sign in</button>
          <br>
           <a href="#"> Lost your passward?</a><br>
			 <a href="#">Don't have an account</a>
          <?php
	if(isset($_GET["btn"]))
	{
		require("dbconnection.php");
		$un=$_GET["E1"];
		$pw=$_GET["p1"];
		$sql="select * from user1 where username='$un' and password='$pw'";
		$rs=mysqli_query($conn,$sql);
		if(mysqli_num_rows($rs)>0)
		{
		    session_start(); 
			echo "<script>window.location='registration.php'</script>";
		}
		else
			echo "Invalid User Name or Password";
	}
	?>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
