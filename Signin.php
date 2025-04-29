<?php
include 'NavBar.php';
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign in</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style type="text/css">

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

	.social-icon a{

	padding-top: 5px;
	width: 45px;
	height: 45px;
	display: inline-block;
	font-size: 25px;
	line-height: 30px;
	border: 2px solid var(--text-black);
	text-align: center;
	border-radius: 100%;
	transition: all cubic-beizer(0.645,0.045,0.335,1);
}

*{
    margin:0;
    padding:0;
    box-sizing: border-box;
}

/* Variables */
:root{
    --primary-font-family: 'Poppins', sans-serif;
    --light-white:#f5f8fa;
    --gray:#5e6278;
    --gray-1:#e3e3e3;
}
body{
    font-family:var(--primary-font-family);
    font-size: 14px;
    
    background-size: 100%;
    opacity: 1;
} 

/* Main CSS */ 
.wrapper{
    

    background-size:contain;
    background-image: linear-gradient(rgba(4,9,30,0.5),rgba(4,9,30,0.5)),url("food2.jpeg");*/
    background-repeat: no-repeat;
    background-size: 100% 100%;

}

.wrapper input{
    background-color: var(--light-white);
    border-color: var(--light-white);
    color: var(--gray); 
}
.wrapper input:focus{ 
    box-shadow: none;
}
.wrapper .submit_btn{
    padding:15px;
    font-weight: 500;
}
.wrapper .login_with{
    padding:15px;
    font-size: 15px;
    font-weight: 500;
    transition:0.3s ease-in-out;
}
.wrapper .submit_btn:focus,
.wrapper .login_with:focus{
    box-shadow: none;
}
.wrapper .login_with:hover{
    background-color:var(--gray-1);
    border-color:var(--gray-1);
}
.wrapper .login_with img{
    max-width: 8%;
}



</style>
</head>
<body>

	<section class="wrapper">
		<div class="container ">
			<div class="col-sm-10 offset-sm-2 col-lg-10 offset-lg-2 col-xl-4 offset-xl-4 text-center">
				<!-- <div class="logo">
					<img src="Starbucks-Logo.png" class="img-fluid" alt="Logo">
				</div> -->
				<form class="rounded  py-5 px-4" method="post" action="Session1.php" >
					<h3 class=" fw-bolder fs-2 mb-2" style="font-family: Serif;color: white;font-size: 22px;"><span style="color: orange;">Sign  </span>In to <span style="color: lightgreen;">Continue</span></h3>
					<b><div class="fw-normal text-white mb-4" style="font-size: 17px;"> <span style="color: red;font-family: Serif;">New Here?</span>
						<a href="#" class="text-white fw-bold text-decoration-none" style="font-size: 17px;font-family: Serif;">Create an Account</a>
					</div></b>
					<div class="form-floating mb-3">
						<input type="text" name="t1" class="form-control" id="floatingInput" placeholder="name@example.com">
						<label for="floatingInput">Login Id</label>
					</div>
					<div class="form-floating">
						<input type="password" name="t2" class="form-control" id="floatingPassword" placeholder="Password">
						<label for="floatingPassword">Password</label>
					</div>
					<div class="mt-2 text-end">
						<a href="#" class="text-primary fw-bold text-decoration-none">Forget Password?</a> 
					</div>
					<!-- <button type="submit" class="btn btn-primary submit_btn w-100 my-4">Continue</button> -->
					<button type="submit" class=" btn btn-primary" style="width:300px;border-radius: 8px;margin-top: 32px;font-size: 18px;">
						Sign in</button><br><br>
					<div class="text-center text-light fw-bold text-uppercase mb-3">or</div>
					<a href="#" class="btn btn-light login_with w-100 mb-3">
						<img alt="Logo" src="Google__G__Logo.svg.png" class="img-fluid me-3">Continue with Google
					</a>
					<a href="#" class="btn btn-light login_with w-100 mb-3">
						<img alt="Logo" src="circle-facebook_-512.webp" class="img-fluid me-3">Continue with Facebook
					</a>
					<a href="#" class="btn btn-light login_with w-100 mb-3">
						<img alt="Logo" src="145807.png" class="img-fluid me-3">Continue with Linkedin
					</a>
				</form>
			</div>
		</div>
	</section>
<?php
include 'footer.php';
?>
</body>
</html>