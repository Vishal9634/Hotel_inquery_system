<html>
<head>
    <?php include "bootstrapfile.php";?>
</head>
<body>
      <?php
		if(isset($_GET["b1"]))
	{
		$con=mysqli_connect("localhost","root","");
		if(!$con)
		{
			die("Error in Connection".mysqli_error());
		}
		mysqli_select_db($con,"uim");
		$gid=$_GET["t1"];
		$sql="select * from record where hotel_location=$gid";
		$rs=mysqli_query($con,$sql)
	?>
         <?php
		while($row=mysqli_fetch_array($rs))
		{
            ?>
         <hr class="featurette-divider">
        <div class= "container-fluid" style=" background-color:whitesmoke">
            <div class="row">
                <div class="col-md-2">
                    
                    <img src='<?php echo $row["image"]; ?>' width="140" height="140" class="img-rounded" />
                    
                </div>
                
               
                <div class="col-md-6" align="left ">
                   <h2><?php echo $row["hotel_name"]; ?></h2>
                    <h6><?php echo $row["hotel_location"]; ?></h6>
                    <br>
                    <h5><?php echo $row["rating"]; ?><b>Excelent</b>(782reviews)</h5>
                    
                     <div class="vr">&nbsp;</div>
                </div>
                <div class="col-md-2" align="center">
                    <h5><b> hotel web </b><br>Rs=<?php echo $row["price"]; ?></h5>
                    <br>
                    <br>
                     <div class="vr">&nbsp;</div>
                </div>
                  <div class="col-md-2" align="center">
                      <h4> FabHotels</h4><br><br>
                       <?php include"registrationbtn.php"?>
                
                     <div class="vr">&nbsp;</div>
                </div>
                
            </div>
        </div>
        <?php

	mysqli_close($conn);
	
      ?>    
</body>
</html>