
<?php 

include 'connection.php';

$Id=$_GET['id'];

$con =mysqli_connect("localhost","root","","project1");
$sql="delete from product where ID = $Id";
echo $sql;
$r= mysqli_query($con,$sql);

		 header('location:dashboard.php');

?>