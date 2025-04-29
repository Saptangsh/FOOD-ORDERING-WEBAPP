<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Footer</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style type="text/css">

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;

}


ul{

	list-style-type: none;
}

.footer{

	background-color: #24262b;
	padding: 30px 0;
}

.container{

	max-width: 1170px;
	margin: auto;
}

.row{

	display: flex;
	flex-wrap: wrap;

}

.footer-col{

	width: 25%;
	padding: 0 15px;
}

/*.footer-col h4{

	font-size: 20px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 30px;
}*/

a{

	text-decoration: none;
	color: #A0A0A0;
	font-size: 16px;
}

.footer-col a:hover{

	color: #D3D3D3;
}

.footer-col .social-links a{

	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgb(255, 255, 255,0.2);
	margin: 0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}

.footer-col .social-links a:hover{

	color: #24262b;
	background-color: #ffffff;
}

.phoneno{

	font-style: unset;
}

.social-icon a{

	padding-top: 5px;
	width: 38px;
	height: 38px;
	margin-left: 2px;
	display: inline-block;
	font-size: 20px;
	line-height: 30px;
	color: var(--text-black);
	/*border: 2px solid whitesmoke;*/
	text-align: center;
	border-radius: 100%;
	transition: all cubic-beizer(0.645,0.045,0.335,1);
}

</style>

<body>

	<div class="footer">

		<div class="container">

			<div class="row">

				<div class="col-md-3">

					<center><img src="logo4.jpg" class="img-fluid" style="max-width: 150px;height: 50px;"></center>
					<br>
					<span style="color: #999999;font-family: Georgia, serif;letter-spacing: 0.2px;">
					SG Food is one of the few Mughlai restaurants that carry their legacy forward. They have embellished the “Dum Pukht” style of cooking with aromatic ingredients and dried fruits. Started in 1941.</span>
					
				</div>

				<div class="col-md-3">

					<div class="text-white text-start" style="margin-top: 15px;font-size: 18px;font-weight: bold;font-family: Helvetica,sans-serif;">Park Street Branch</div>

					<div class="mt-4" style="color: #999999;font-family: Georgia, serif;">
						135, Park St, behind Neuro Science Hospital, Park Circus, Beniapukur, Kolkata, West Bengal 700014<br><br>
					</div>
						<a href="" class="phoneno" style="color:white;"><i class="fas fa-phone-alt"></i> +91 8585 007649</a><br>

						<a href="" style="color: white;margin-top: 15px;"><i class="fas fa-map-marker-alt"></i> &nbsp;Get Directions</a>		

				</div>

				<div class="col-md-3">

					<div class="text-white text-start" style="margin-top: 15px;font-size: 18px;font-weight: bold;font-family: Helvetica,sans-serif;">VIP Nagar Branch</div>

					<div class="mt-4" style="color: #999999;font-family: Georgia, serif;">
						62, Eastern Metropolitan Bypass, Netaji Nagar, VIP Nagar, Kolkata, West Bengal 700100<br><br>
					</div>
						<a href="" class="phoneno" style="color:white;"><i class="fas fa-phone-alt"></i> +91 90733 22422</a><br>

						<a href="" style="color: white;margin-top: 15px;"><i class="fas fa-map-marker-alt"></i> &nbsp;Get Directions</a>		

				</div>

				<div class="col-md-3">

					<div class="text-white text-start" style="margin-top: 15px;font-size: 18px;font-weight: bold;font-family: Helvetica,sans-serif;">Ajoy Nagar Branch</div>

					<div class="mt-4" style="color: #999999;font-family: Georgia, serif;">
						C/279, Survey Park Road, Survey Park, Santoshpur, Kolkata, West Bengal 700075<br><br>
					</div>
						<a href="" class="phoneno" style="color:white;"><i class="fas fa-phone-alt"></i> +91  90733 07471</a><br>

						<a href="" style="color: white;margin-top: 15px;"><i class="fas fa-map-marker-alt"></i> &nbsp;Get Directions</a>		

				</div>

			</div> <!-- Row Close -->



		</div> <!-- Container Close -->

		<center style="color: #999999;" class="mt-5 mb-1">
		<ul class="list-unstyled d-flex justify-content-center text-white social-icon">

              <li><a href=""><i class="fab fa-instagram"></i></a></li>
              <li><a href=""><i class="fab fa-facebook"></i></a></li>
              <li><a href=""><i class="fab fa-twitter"></i></a></li>
              <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>

            </ul>
        © Copyright SG Food </center>

	</div>

</body>
</html>