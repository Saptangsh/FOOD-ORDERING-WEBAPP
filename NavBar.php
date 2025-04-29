<?php
include 'Connect.php';
?>

<!DOCTYPE html>
<html>
<head>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" type="text/css" href="">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Client</title>

  <style type="text/css">


    .navbar-brand img{

      max-width: 70px;
    }

    .nav-item a{

      font-family: Josefin Sans;
      text-transform: uppercase;
      /*font-weight: 200;*/
      letter-spacing: 0.025em;
      /*color: #37394f;*/
      /*color: white;*/
      color: #F0F0F0;
      font-size: 16px;
    }

    .nav-item a:hover{

      color: skyblue;
    }


  .navbar-toggler:focus{

  outline: none;
  box-shadow: none;
 }

@media (max-width: 1100px){

 .nav-link{

/*    margin-left: 10px;*/
    text-align: center;
  }

}
 /* .b_wrapper{

    background-image: url("b.webp");
    background-repeat: no-repeat;
    background-size: 100%;
  }

  .a1{

      display: flex;
      align-items: center;
      justify-content: center;
 }*/


  </style>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>


	<nav class="navbar navbar-expand-lg bg-dark text-white">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="logo4.jpg" >
    </a>

    <button class="navbar-toggler a" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <i class="fas fa-stream navbar-toggler-icon" style="color: floralwhite;"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav" >
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" >Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php" >ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product.php">Our menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="showcart.php">Cart(<?php 
                    if(empty($_SESSION['cart_info']))
                      echo 0;
                    else
                      echo sizeof($_SESSION['cart_info']);?>)</a>
        </li>

        <?php if(empty($_SESSION['Username'])){ ?>
        <li class="nav-item">
          <a class="nav-link" href="Signin.php">Sign in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Signup.php">Sign up</a>
        </li> 
      <?php } 
            else
            {
              ?>
              <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
              <?php
            }
      ?>
     

      </ul>
    </div> <!-- Collapse -->
  </div> <!-- Container -->
</nav>

<script>
  $(document).ready(function() {
    $('.navbar-nav .nav-link').on('click', function() {
      $('.navbar-collapse').collapse('hide');
    });
  });
</script>

</body>
</html>