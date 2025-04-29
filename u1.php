<?php 

$name=$_POST['t1'];
$address=$_POST['t2'];
$email=$_POST['t3'];
$phoneno=$_POST['t4'];
$username=$_POST['t5'];
$password=$_POST['t6'];

// echo $name."<br>";
//  echo $password;

    $con=mysqli_connect("localhost","root","","project1");

    $sql = "insert into signup values('$name','$address', '$email', $phoneno,'$username','$password')";

    $r = mysqli_query($con,$sql);
        if($r>0)
        {   
            echo $r." Sign up successful";
        }
        else
        {
            echo "<br>Unsuccessful";
        }

?>