<html>
<head>
<?php include "bootstrapfile.php";?>
</head>
<body>
<div class="page-header">
  <h1 align="center">RESERVATION FORM</h1>
</div>
    <form name="form" action="" method="post" enctype="multipart/form-data">
<div class="container-fluid">
    <div class="row">
          <div class="col-md-6">
		     <div class="panel panel-primary">
                <div class="panel-heading">
                   <h3 class="panel-title">PERSONAL INFORMATION</h3>
                      </div>
                  <div class="panel-body">
				    
			                    <div class="form-group">
                                <label for="name">First name</label>
                             <input type="text" class="form-control"name="t1" placeholder="first name" required>
                                   </div>
			               <div class="form-group">
                         <label for="secondname">Second name</label>
                          <input type="text" class="form-control" name="t2" placeholder="Second name" required>
                               </div>
                           <div class="form-group">
                        <label for="exampleInputEmail1">Email Id</label>
                         <input type="email" class="form-control"name="t3" placeholder="Enter email" required>
                       </div>
					       <div class="form-group">
                        <label for="exampleInputEmail1">Gender</label>
						        <input type="radio"  name="t4"/>Male
		                       	<input type="radio"  name="t4"/>Female
                       </div>
                   <div class="form-group">
                  <label for="exampleInputPassword1">passport Country</label>
                 <select class="form-control" name="t5">
                                <option>select country</option>
                              <option>india</option>
                              <option>sri-lanka</option>
                              <option>USA</option>
                              <option>Japan</option>
                                        </select>
               </div>
			           <div class="form-group">
                        <label for="exampleInputEmail1">Contect number</label>
                         <input type="text" class="form-control" name="t6" placeholder="enter contect no" required>
                       </div>
             <div class="form-group">
              <label for="exampleInputFile">File input</label>
               <input type="file" name="f1">
                <p class="help-block">save your profile picture.</p>
                   </div>
                 </div>
            </div>
          </div> 
      
         
          <div class="col-md-6">
		     <div class="panel panel-primary">
                <div class="panel-heading">
                   <h3 class="panel-title">RESERVATION INFORMATION</h3>
                      </div>
            <div class="panel-body">
            
			         <div class="form-group">
                     <label for="room">Type of room</label>
                           <select class="form-control" name="t7">
                                <option></option>
                              <option>SUPIRIOR</option>
                              <option>GUEST HOUSE</option>
                              <option>SENGLE ROOM</option>
                              <option>DELUXE ROOM</option>
                                        </select>
                               </div>
							      <div class="form-group">
                     <label for="type">Bedding Type</label>
                           <select class="form-control" name="t8">
                                <option>Single</option>
                              <option>double</option>
                              <option>triple</option>
                              <option>Quard</option>
                              <option>none</option>
                                        </select>
                               </div>
							    <div class="form-group">
                     <label for="rooms">No of room</label>
                           <select class="form-control" name="t9">
                                <option></option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                                        </select>
                               </div>
							    <div class="form-group">
                     <label for="mealplan">MEAL PLAN</label>
                           <select class="form-control" name="t10">
                                <option></option>
                              <option>ROOM ONLY</option>
                              <option>BREAKFAST</option>
                              <option>HALF BOARD</option>
                              <option>FULL BOARD</option>
                                        </select>
                               </div>
			                
                         <div class="form-group">
                        <label for="date">check in</label>
                         <input type="date" class="form-control" name="t11">
                       </div>
					    <div class="form-group">
                        <label for="date">Check out</label>
                         <input type="date" class="form-control"name="t12">
                       </div>
                       <div class="checkbox">
                       <label>
                      <input type="checkbox"> Check me out
                      </label>
                      </div>
                       <button type="submit" name="btn" class="btn btn-primary">Submit</button>
					  

					   <?php

             
        if(isset($_POST["btn"]))
		{
		require("dbconnection.php");
            
		$fname=$_POST["t1"];
		$secondname=$_POST["t2"];
		$email=$_POST["t3"];
		$nationality=$_POST["t4"];
		$Pcountry=$_POST["t5"];
		$mob=$_POST["t6"];
		$Typeoofroom=$_POST["t7"];
		$bedding_type=$_POST["t8"];
		$no_of_room=$_POST["t9"];
		$Mealplan=$_POST["t10"];
		$check_in=$_POST["t11"];
		$check_out=$_POST["t12"];
		
		$file = $_FILES ['f1'];
         $name = $file ['name'];
        $type = $file ['type'];
        $size = $file ['size'];
      $tmppath = $file ['tmp_name']; 
		move_uploaded_file ($tmppath, 'img/'.$name);
		$path='img/'.$name;
		
       $sql="insert into booking_form  values('$fname','$secondname','$email','$nationality','$Pcountry','$mob','$Typeoofroom','$bedding_type',$no_of_room,'$Mealplan','$check_in','$check_out','$path' )";
		mysqli_query($conn,$sql);
		if(mysqli_affected_rows($conn)>0)
			echo "<script>window.location='pay.php'</script>";
		else
			echo " Not Registred";
		mysqli_close($conn);
		}
?>
    
   
                  </div>
            </div>
          </div>
   </div>
</div>
    </form>

<br><br>
</body>
</html>
