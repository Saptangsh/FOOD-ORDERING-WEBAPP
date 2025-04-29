<!-- <form action="logindetails.php" method="get"> -->
	<!-- <h2>Login Id</h2>
	<input type="text" name="t1"><br>
	<h2>Password</h2>
	<input type="text" name="t2"><br><br>
	<button type="submit" name="btn">Login</button>
	 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Login Form Using Bootstrap 5</title>
	<!-- Bootstrap 5 CDN Link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS Link -->
	<!-- <link rel="stylesheet" href="style.css"> -->
	<style type="text/css">
		/* Google Poppins Font CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

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
} 

/* Main CSS */ 
.wrapper{
    padding:0 0 100px;

   /* background-size:contain;*/

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
	<form method="get"action="indexdetails.php" class="rounded bg-white shadow py-5 px-4">
    <section class="wrapper">
		<div class="container">
			<div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center">
				
					<h3 class="text-dark fw-bolder fs-4 mb-2">Sign In </h3>
					<div class="fw-normal text-muted mb-4"> New Here?
						<a href="#" class="text-primary fw-bold text-decoration-none">Create an Account</a>
					</div>
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
					<button type="submit" class="btn btn-primary submit_btn w-100 my-4">Continue</button>
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
    
</body>
</html>


</form>

