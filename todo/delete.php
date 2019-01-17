<?php 
 include 'connection.php';
 if (isset($_POST['delete'])) {
 $item=$_POST['itemtodelete'];
 $query2 = "DELETE FROM item WHERE id='$item';";
  mysqli_query($con,$query2);
 }
  if (isset($_POST['deleteall'])) {
  	$query3="DELETE FROM item;";
  	$query4 ="ALTER TABLE item AUTO_INCREMENT=1;";
  	mysqli_query($con,$query3);
  	mysqli_query($con,$query4);
  }
 ?>
 <script type="text/javascript">
 	window.location.href = 'http://localhost/todo/';
 </script>