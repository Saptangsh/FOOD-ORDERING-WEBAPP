<!DOCTYPE html>
<html>
<head>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Products</title>

<style type="text/css">


	body{

	background-size:contain;
    background-image: linear-gradient(rgba(4,9,30,0.5),rgba(4,9,30,0.5)),url("food2.jpeg");*/
    background-repeat: no-repeat;
    background-size: 100% 100%;
	}

	.items{

		display: flex;
		justify-content: space-between;
	}

	.t1{

		font-weight: 500;
		font-size: 45px;
		color: lightgreen;
		/*font-family: Garamond, serif;*/
		/*font-family: 'Courier New', monospace;*/
		font-family: 'Brush Script MT', cursive;
		font-style: italic;
		text-decoration: underline;
	}


.main-btn{

	display: inline-block;
	border-radius: 30px;
	padding: 10px 27px;
	color: #e81922;
	border: 1px solid #e81922;
	text-transform: uppercase;
	letter-spacing: 1px;
	background: linear-gradient(to right,#e81922 50%,transparent 50%);
	background-size: 200% 100%;
	background-position: right bottom;
	transition: 0.5s ease-out;
}


.main-btn:hover{

	color: white;
	background-position: left bottom;
}

</style>
</head>
<body style="background-color: #ba9d9b;">

<?php
include 'NavBar.php';

$sql= "select * from product";
$r= mysqli_query($con,$sql);
?> 

<section  class="mb-4 mt-1">
	<div class="container">

		<center><span class="t1"><font style="color:red;">Menu</font> Items</span></center><br>

		<div class="row items">

			
<?php
	while ($row=mysqli_fetch_assoc($r)) 
	{


	?>
	<br><br>

			<div class="col-lg-3 col-sm-6 mb-2" id="c">

				<div class="card mb-3" style="box-shadow: 0 0 2px 1px rgba(0,0,0,0.5)">

					<div class="card-body">
	  				<center><img src="Admin/<?php echo $row['Image']; ?>" style="max-width: 195px;height: 200px;" class="img-fluid border"><br>
	  				
	  				<div style="font-style: Sans-serif;" class="mx-3"><h4><a  style="color:black; " href="showdetails.php?id=<?php echo $row['ID']?>"><?php echo $row['Name']; ?></a></h4></div></center>
	  			
	  			<center><div class="rating" style="color: green;">
                <i class="fa-solid fa-star" ></i>
                <i class="fa-solid fa-star" ></i>
                <i class="fa-solid fa-star" ></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                </div></center>
	  			</div>

	  		</div>

	  		</div>		

				<?php

		}
	?>

			

		</div>
	</div>

</section>
<hr></hr>
<?php
include 'footer.php';

?> 
</body>
</html>
