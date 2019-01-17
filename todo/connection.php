<?php 
$con= mysqli_connect("localhost","root","","todolist");
$query = "select * from item ORDER BY id DESC LIMIT 5";
$result = mysqli_query($con,$query);

 ?>