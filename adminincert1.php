<html>
<head>
    <?php include "bootstrapfile.php";?>
</head>
    <body>
        <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
         <div class="panel panel-primary">
                <div class="panel-heading">
                   <h3 class="panel-title">INCERT HOTEL DETA</h3>
                      </div>
                  <div class="panel-body">
                      <form name="form" action="" method="post" enctype="multipart/form-data">
                       <table class="table">
                       <tr>
                           <td><b>Hotel id</b></td>
                           <td><b>Hotel name</b></td>
                           <td><b>Location</b></td>
                           <td><b>Price</b></td>
                           <td><b>Rating</b></td>
                           <td><b>image</b></td>
                       </tr>
                         <tr>
                             <td><input type="text" class="form-control"name="t1" placeholder="hotel id"></td>
                            <td><input type="text" class="form-control"name="t2" placeholder="hotel name"></td>
                            <td> <input type="text" class="form-control"name="t3" placeholder="Location"></td>
                            <td><input type="text" class="form-control"name="t4" placeholder="hotel price"></td>
                            <td> <input type="text" class="form-control"name="t5" placeholder="hotel rating"></td>
                            <td><input type="file" class="form-control"name="image1" placeholder="hotel image"></td>
                           </tr>
                           <tr><td colspan="6" align="right"><input type="submit"class="btn btn-success"class="form-control"name="t6" value="INCERT"></td></tr>

                       
                            
            <tr><td colspan="6" align="center">
         <?php

        if(isset($_POST["t6"]))
		{
		$conn= mysqli_connect("localhost","root",""); 
		mysqli_select_db($conn,"mydb");

		$h_id=$_POST ["t1"];
		$h_name=$_POST["t2"];
		$h_location=$_POST["t3"];
		$h_price=$_POST["t4"];
        $h_rating=$_POST["t5"];
		
		$file = $_FILES ['image1']; 
         $name1 = $file ['name'];
        $type = $file ['type'];
        $size = $file ['size'];
      $tmppath = $file ['tmp_name']; 
		move_uploaded_file ($tmppath, 'C:\xampp\htdocs\hotel\img/'.$name1);
		$path='img/'.$name1;
       $sql="insert into hotel values($h_id,'$h_name','$h_location',' $path','$h_price','$h_rating')";
		mysqli_query($conn,$sql);
		if(mysqli_affected_rows($conn)>0)
			echo " stored data Registred";
		else
			echo "Student Did Not Registred";
		mysqli_close($conn);
		}
                ?>                         </td>
                           </tr>
                          </table>
                      </form> 
                   </div>
              </div>
            </div>
            </div>
        </div>
    </body>
</html>