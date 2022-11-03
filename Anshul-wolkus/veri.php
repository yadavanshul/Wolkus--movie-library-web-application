<html>
<head>
<title>kito</title>
 <link rel="stylesheet" href="style.css">

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php
session_start();
include("db.php");

$na=$_POST['mail'];
if(isset($_POST['submit'])){
    $s="SELECT * FROM sign WHERE email='$na'";
    $n=mysqli_query($con,$s);
    $r=mysqli_num_rows($n);
    if($r){

       $recod=bin2hex(random_bytes(4));
    
       date_default_timezone_set("Asia/Kolkata");

      $expir=date('y-m-d h:i:s',time()+(100));
      $otp=rand(100000,999999);
      $date = new DateTime($expir);
      $timestamp = $date->getTimestamp();


      $up="UPDATE `sign` SET `tokken`='$recod',`expire`='$timestamp',`otp`='$otp' WHERE email='$na'";
      $n=mysqli_query($con,$up);
      $url="http://localhost/game/reset.php?email=$na&recod=$recod";

       $Subject =  "password reset";
       $Msg = "<a href=$url>click on this this link</a>";
       $headers =  'MIME-Version: 1.0' . "\r\n"; 
       $headers .= 'From: kito <infocbs869@gmail.com>' . "\r\n";
       $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
       $to = $na;
       
       $txt = "Your OTP is ".$otp." \n\n".$Msg;
 
       
       mail($to,$Subject,$txt,$headers);
        
        echo "<script>Swal.fire({
            title: 'link sended to your mail',
            icon: 'success',
           
            confirmButtonColor: '#3085d6',
        
            confirmButtonText: 'ok'
          }).then((result) => {
            if (result.isConfirmed) {
             document.location='index.php'; 
            }
          })
       
        </script>";
    }
 

    else{
        echo "<script>Swal.fire({
            title: 'you are not an existing user',
            icon: 'warning',
           
            confirmButtonColor: '#3085d6',
        
            confirmButtonText: 'ok'
          }).then((result) => {
            if (result.isConfirmed) {
             document.location='index.php'; 
            }
          })
        </script>";
    }
}
?>
</body>
</html>