<?php 
include 'connection.php';

 
 ?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body
		{
			background-image: url("background.jpg");
			background-repeat: no-repeat;
			width: 100%;
			background-size: cover;
			height: 100%;
			
		}
		
	</style>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
     
   <div class="container text-center">
   	    <div class="row">
   	    	 <div class="col-xs-4"></div>
   	   <div class="col-xs-4">
   	   <h1><kbd>BANANA</kbd></h1>
      <ul class="list-group">
      <?php while ($row = mysqli_fetch_assoc($result)) { ?>   	   
   	   
        <li class="list-group-item active"><span class="badge"><?php echo $row['id']; ?></span><?php echo $row['name'] ?></li>
     
       <?php } ?>
    </ul>
      
  
   <form action="add.php" method="post">
       <div class="form-group">
       <label for="text">Add Item</label>
       <input type="text" class="form-control" id="item" name="itemname">
       </div>
       <button type="submit" name ="submit" class="btn btn-default">ADD</button>

       
   </form>
   <form action="delete.php" method="post">
   	<div class="form-group">
       <label for="number">Remove Item</label>
       <input type="number" placeholder="Enter the corresponding number of the item to delete"class="form-control" id="item" name="itemtodelete">
       </div>
       <button type="submit" name ="delete" class="btn btn-default">DELETE</button>
          <button type="submit" name ="deleteall" class="btn btn-default">DELETE ALL</button>
   </form>
</div>
<div class="col-xs-4"></div>
   </div>
</div>
</body>
</html>