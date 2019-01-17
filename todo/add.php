<?php 
include 'connection.php';
   if (isset($_POST['submit'])) {
        $name = $_POST['itemname'];
          $sql = "insert into item (id,name) values (NULL,'$name');";
          mysqli_query($con,$sql);
   }
   //header('Location : https://www.google.com/');
 ?>
 <script type="text/javascript">
 	window.location.href = 'http://localhost/todo/';
 </script>