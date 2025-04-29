<?php
include 'NavBar.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Login Form Using Bootstrap 5</title>
    <!-- Bootstrap 5 CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">


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
     background-image:url("bg.jpg");

} 

/* Main CSS */ 
.wrapper{
    padding:0 0 100px;
    background-image:url("images/bg.png");
    background-position:bottom center;
    background-repeat: no-repeat;
    background-size: contain;
    background-attachment: fixed;
    min-height: 100%;

}
.wrapper .logo img{
    max-width:40%;
}
.wrapper input{
    background-color:var(--light-white);
   /* border-color:var(--light-white);*/
    border: none;
    color:var(--gray);
}
.wrapper input:focus{
    box-shadow: none;
    border: none;

}
.wrapper .password-info{
    font-size:10px;
}
.wrapper .submit_btn{
    padding:10px 15px;
    font-weight:500;
}
.wrapper .login_with{
    padding:8px 15px;
    font-size:13px;
    font-weight: 500;
    transition:0.3s ease-in-out;
}
.wrapper .submit_btn:focus,
.wrapper .login_with:focus{
    box-shadow: none;
    border: none;
}
.wrapper .login_with:hover{
    background-color:var(--gray-1);
    border-color:var(--gray-1);
}
.wrapper .login_with img{
    max-width:7%;
}
        
      
    </style>
</head>
<body> 
    <section class="wrapper">
        <div class="container mt-4">
            <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-5 offset-xl-3 text-center">
                <!-- <div class="logo">
                    <img src="logo.png" class="img-fluid" alt="logo">
                </div> -->
                <form class="rounded bg-white border p-5" action="u1.php" method="post">
                    <h3 class="text-dark fw-bolder fs-4 mb-2">Create an Account</h3>

                    <div class="fw-normal text-muted mb-2">
                        Already have an account? <a href="index.html" class="text-primary fw-bold text-decoration-none">Sign in here</a>
                    </div>

                    <div class="text-center text-muted text-uppercase mb-2">or</div>

                    <a href="#" class="btn btn-light login_with w-100 mb-4">
                        <img src="google-icon.svg" class="img-fluid me-3">Sign in with Google</a>
                    </a> 
                    <div class="form-floating border-bottom border-dark mb-3">
                        <input type="text" class="form-control" id="floatingName" placeholder="name@example.com" name="t1">
                        <label for="floatingName">Name</label>
                    </div>
                    <div class="form-floating border-bottom border-dark mb-3">
                        <input type="text" class="form-control" id="floatingAddress" placeholder="name@example.com" name="t2">
                        <label for="floatingAddress">Address</label>
                    </div> 
                    <div class="form-floating border-bottom border-dark mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="t3">
                        <label for="floatingInput">Email-Id</label>
                    </div>
                    <div class="form-floating border-bottom border-dark mb-3">                       
                        <input type="tel" class="form-control" id="Phone" maxlength="10" placeholder="9999999999" name="t4">
                        <label for="Phone">Phone No.</label>                                            
                    </div>
                     <div class="form-floating border-bottom border-dark mb-3">
                        <input type="text" class="form-control" id="floatingName" placeholder="name@example.com" name="t5">
                        <label for="floatingName">UserName</label>
                    </div>
                    <div class="form-floating border-bottom border-dark mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="t6">
                        <label for="floatingPassword">Password</label>
                    </div> 
                    <div class="form-check d-flex align-items-center">
                        <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                        <label class="form-check-label ms-2" for="gridCheck">
                          I Agree <a href="#">Terms and conditions</a>.
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary submit_btn w-100 my-4">Continue</button> 
                </form>
            </div>
        </div>
    </section>
</body>

<?php
include 'footer.php';
?>
</html>
