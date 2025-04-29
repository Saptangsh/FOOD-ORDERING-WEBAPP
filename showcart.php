<?php

include 'NavBar.php';

?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Show Cart</title>

<!-- 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

<style type="text/css">
/*.empty{
	width:100%;
}
.empty img {
	width:100%;
	max-width: 550px;
	margin:0 auto;
}	*/

</style>
</head>

<body>
<br><br>
<div style="height: 30px;"></div>

	<div class="container ">

		<div class="row">

			<div class="col-lg-12">

				<?php 

					if(!empty($_SESSION['cart_info']))
					{
						$len=sizeof($_SESSION['cart_info']);
						$sum=0;
					
				?>
					<table class="table table-responsive table-hover">

						<tr>

							<th></th>
							<th>Name</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Total</th>
							<th>Remove</th>

						</tr>

						<?php 

							for($i=0;$i<$len;$i++){

								$sum+=$_SESSION['cart_info'][$i]['total'];

						?>

						<tr>
							<td><img src="Admin/<?php echo $_SESSION['cart_info'][$i]['Image']?>" alt ="" height="80" width="80"></td>

							<td><?php echo $_SESSION['cart_info'][$i]['Name'];?></td>

							<td><i class="fas fa-rupee-sign"></i><?php echo $_SESSION['cart_info'][$i]['SP'];?>/-</td>

							<td>
							<?php echo $_SESSION['cart_info'][$i]['Qty'];?>
							</td>

							<td>
							<i class="fas fa-rupee-sign"></i>
							<?php echo $_SESSION['cart_info'][$i]['total'];?>
							/-
							</td>

							<td>

								<a href="remove.php?index=<?php echo $i;?>" class="btn btn-danger">X</a>

							</td>

						</tr>

						<?php 

							} ?>


						 <tr>
                                          <th></th>
                                          <th></th>
                                          
                                          <!-- <th></th> -->
                                          <th colspan="2">
                                            <p class="btn btn-danger">Gross Total:</p>
                                          </th>
                                          <?php $_SESSION['total_amt']=$sum; ?>
                                          <th><i class="fas fa-rupee-sign"></i> <?php echo $sum ?> /-</th>
                                          <th></th>
                                        </tr>

               <tr>

               	<th></th>
                                          <th></th>
                                          
                                          <!-- <th></th> -->
                                          <th colspan="2">
                                            <a class="btn btn-danger" href="PaymentCheck.php">Check Out:</a>
                                          </th>
                                          
                                          <th></th>
                                          <th></th>
								</table>
							<?php

							}else{

							?><center><img src="empty.png" style="position: relative;width: 60%;"></center>

						<?php 

							} ?>
			</div>

		</div>

	</div>
<br>
<?php

include 'footer.php';

?>

</body>
</html>