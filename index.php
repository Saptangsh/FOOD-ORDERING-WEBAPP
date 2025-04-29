<?php
include 'NavBar.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<style type="text/css">

  .b_wrapper{

    background-image: url("b.webp");
    background-repeat: no-repeat;
    background-size: 100%;
  }

  .a1{

      display: flex;
      align-items: center;
      justify-content: center;
 }

.t1{

    font-weight: 500;
    font-size: 45px;
    color: white;
    /*font-family: Garamond, serif;*/
    /*font-family: 'Courier New', monospace;*/
    font-family: 'Brush Script MT', cursive;
    font-style: italic;
    text-decoration: underline;
  }

</style>
</head>
<body>

	<section class="mt-0 b_wrapper mb-4" style="border: 1px solid white;">

    <div class="container">

      <div class="row a1"> 

        <div class="col-lg-1">


        </div>

        <div class="col-lg-9 col-md-9 mb-0"> 

          <video controls loop autoplay muted style="max-height: 550px;max-width: 100%;">

            <source src="Bannervideo.mp4" type="video/mp4">

          </video>


        </div>

      </div><!--  Row -->

    </div> <!-- Container -->

  </section>

  <div class="container mt-5" id="about">
        <div class="row">
          <div class="col-lg-5 col-md-5 mt-4">
            <img src ="biriyani2.jpg" style="height: 650px;width: 100%;opacity: 0.90;">
          </div>
          <div class="col-lg-6 col-md-5 mt-4 pt-3 px-3" id="a" >

        <center><h2 style="font-family: Times New Roman, Georgia, Serif; letter-spacing: 3px;color:#262626;" class="t1">About Catering</h2>
        <br><br>
        <h5>Tradition since 1889</h5></center>
        <p  style="padding-top:30px" style="font-family: Times New Roman; size: 20px">The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.We only use <span style="background-color: #f1f1f1;">seasonal</span> ingredients.</p>

        <p style="padding-top:30px; color: #757575;">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div></p>
      </div>
        <hr></hr>
    </div>

  <?php include 'footer.php';
  ?>

</body>
</html>