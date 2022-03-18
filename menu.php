<html>
<head>
<?php include "bootstrapfile.php"; ?>
</head>
<body>
<nav class="navbar navbar-inverse" role="navigation">
 <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">HOME</a></li>
        <li><a href="about.php">ABOUT</a></li>
		 <li><a href="team.php">TEAM</a></li>
		  <li><a href="gallery.php">GALLARY</a></li>
		   <li><a href="room.php">ROOMS</a></li>
		    <li><a href="contactus.php">CONTECT US</a></li>
             <li><a href="Adminlogin.php">Admin</a></li>
			 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    
		 <form class="navbar-form navbar-right" role="search" action="hotelSearch.php" >
        <div class="form-group">
          <input type="text" class="form-control" name="t1" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default"  name="b1">Submit</button>
      </form>
</nav>


</body>
</html>