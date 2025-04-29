<?php

include 'NavBar.php';
$Id=$_GET['id'];
$sql= "select * from product where ID=$Id";
$r= mysqli_query($con,$sql);
 
 if($row = mysqli_fetch_assoc($r)){

 	$name=$row['Name'];
 	$dsc= $row['Description'];
 	$cp=  $row['CP'];
 	$sp=  $row['SP'];
 	$img= $row['Image'];
 }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buy Now</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style type="text/css">

.btn1{

	width: 150px;
	height: 200px;
	/*display: flex;*/
	background-color: #0aa141;
	color: whitesmoke;
	font-size: 18px;
	font-weight: bold;
	text-align: center;
	font-family: sans-serif;
}

.btn2{

	margin-top: 15px;
	width: 100px;
	height: 35px;
	
	background-color: #111dbd;
	color: whitesmoke;
	font-size: 18px;
	font-weight: bold;
	text-align: center;
}


</style>
<body>
<br><br>
<div class="container mt-4">

	<div class="row" style="box-shadow: ">
	<div class="col-lg-5 md-6">
	<img src="Admin/<?php echo $img ?>" class="img-fluid border border-secondary rounded" style="max-width: 400px;">
	</div><br>

	<div class="col-lg-6">
	<div class="card">
		<form method="get" action="cart.php">
		<div class=" p-3">
		<h5>Item Name: <span style="margin-left: 5px"><?php echo $name;?>
		</span></h5><br>
		<h5>Price: <span style="margin-left: 5px"><?php echo $sp;?>
		</span></h5><br>
		<h5>Description: <?php echo $dsc;?><br><br>
			<input type="text" name="id" value="<?php echo $Id;?>"  readonly></h5><br>
		<h5>Quantity <!-- <input type="number" name="" value="0"></h5> -->
		<select name="quantity" id="quantity">
  			<option value="1">1</option>
  			<option value="2">2</option>
  			<option value="3">3</option>
  			<option value="4">4</option>
  			<option value="5">5</option>
		</select>
		<br><br>
		<button type="submit" class="btn btn-primary">Buy Now</button>
		<button type="submit" class="btn btn-primary" style="background-color: green;">Add to Cart</button>	
		</div>
		</form>
	</div> <!-- Card -->
	</div><!--  Column -->
	</div> <!-- Row -->
</div>
<br><br>

<?php
include 'footer.php';
?>

</body>
</html>