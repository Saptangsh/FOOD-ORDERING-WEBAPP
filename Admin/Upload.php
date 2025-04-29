<form action="dashboard.php" method="post">

</form>
 <!-- Only POST method can be used for Upload -->
<?php 

$id=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
$e=$_POST['t5'];

	echo $id."<br>";
	echo $b."<br>";
	echo $c."<br>";
	echo $d."<br>";
	echo $e."<br>";
	// echo $e."<br>";

$arr=$_FILES['f1'];

	echo "<pre>";
	print_r($arr);

$fname = $arr['name'];
$err=$arr['error']; //error is a Boolean Variable
$tmp_loc=$arr['tmp_name'];

if($err==0){

	$current_loc="IMG/".$fname;
	$a=move_uploaded_file($tmp_loc,$current_loc);
	echo $a;

		if($a>0){

			$con=mysqli_connect("localhost","root","","project1");
			$sql="insert into product values ($id,'$b','$c','$d','$e','$current_loc')";
			echo $sql;

			$r=mysqli_query($con,$sql);
		}

		if($r>0){

			// echo "File inserted";
			header('location:dashboard.php');
		}
		else{

			// echo "File Not inserted";
			header('location:insert.php');
		}
}
?>