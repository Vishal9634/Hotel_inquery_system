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
                   <h3 class="panel-title">DELETE HOTEL DETA</h3>
                      </div>
                  <div class="panel-body">
                       <form name="form" action="" method="get" enctype="multipart/form-data">
                      <table class="table">
                          <tr> <td><b>Hotel id</b></td>
                              <td> <input type="text" class="form-control"name="t1" placeholder="hotel id"></td>
                              <td><input type="submit"class="btn btn-danger"class="form-control"name="b1" value="DELETE"></td>
                          </tr>
                          <tr>
                             <?php
		if(isset($_GET["b1"]))
		{
		$conn=mysqli_connect("localhost","root","");
		if(!$conn)
		{
			die("Error in Connection".mysqli_error());
		}
		mysqli_select_db($conn,"mydb");
		$gid=$_GET["t1"];
		$sql="delete from hotel where hotel_id=$gid";
		mysqli_query($conn,$sql);
		if(mysqli_affected_rows($conn)>0)
			echo "Delete sucsessfully";
		else
			echo "Student Record Not Deleted";
		mysqli_close($conn);
		}
	?>
                          </tr>
                      </table>
                      </form>
                      </div>
                   </div>
              </div>
            </div>
        </div>
